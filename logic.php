<?php

$conn = mysqli_connect("localhost", "root", "", "minor");

    if(!$conn){
        echo "<h3 class='container text-center p-3 mt-5 rounded-lg' style='background-color: maroon; color: white;'>
        Not able to establish database connection</h3>";
    }

    $statusMsg = '';


    if(isset($_REQUEST["publish_post"])){
        $title = $_REQUEST["title"];
        $content = $_REQUEST["content"];
        $writer = $_REQUEST["name"];

        // File upload path
        $targetDir = "uploads/";
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg','png','jpeg','gif');
        if(in_array($fileType, $allowTypes)){
            // Upload file to server
            if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                // Insert image file name into database
                $insert = $conn->query("INSERT into blogs_data (writer_name, title, content, blog_image, upload_date) VALUES ('$writer', '$title', '$content', '".$fileName."', NOW())");
                if($insert){
                    $statusMsg = "Blog added successfully. <a href='blogs.php' style='color: white'>Click here</a> to go back to blogs page.";
                    // header("Location: blogs.php?info=added");
                    // exit();
                }else{
                    $statusMsg = "File upload failed, please try again.";
                } 
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }else{
            $statusMsg = 'File type not supported';
        }
        echo "<h3 class='container text-center p-3 mt-5 rounded-lg' style='background-color: maroon; color: white;'>
        $statusMsg</h3>";
    }

    $sql = "SELECT * FROM blogs_data";
    $query = mysqli_query($conn, $sql);

    $sql1 = "SELECT * FROM blogs_data ORDER BY id DESC LIMIT 3";
    $query1 = mysqli_query($conn, $sql1);


    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM blogs_data WHERE id=$id";
        $query = mysqli_query($conn, $sql);
    }
    
?>