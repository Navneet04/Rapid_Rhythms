<?php
    include "logic.php"
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- external style sheets -->
    <link rel="stylesheet" href="css/blogs.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">

    <!-- jquery cdn  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- font-awesome cdn  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- animate.css cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- vov.css cdn  -->
    <link href="https://cdn.jsdelivr.net/gh/vaibhav111tandon/vov.css@latest/vov.css" rel="stylesheet" type="text/css">

    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <title>Add Blog</title>

    <style>
        /* styling body */
body{
    margin: 0;
    padding: 0;
    font-family: 'Oswald', sans-serif;
    font-weight: 300;
    color: maroon;
}

.container {
    position: relative;
  }

form{
    margin-top: 30px;
}

.small-text{
    height: 60px;
    width: 100%;
    min-width: 100%; 
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid maroon;
    color: maroon;
    font-size: 18px;
    margin-bottom: 16px;
}
.submit-button{
    display: flex;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
}  

textarea{
    width: 100%;
    min-width: 100%;
    background: transparent;
    border: none;
    outline: none;
    border-bottom: 1px solid maroon;
    color: maroon;
    font-size: 18px;
    margin-bottom: 16px;
}

#submit-btn{
    color: white;
    background-color: maroon;
    font-weight: bolder;
    font-size: 20px;
    letter-spacing: 2px;
    opacity:60%;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: maroon;
    opacity: 1; /* Firefox */
  }
/* form styling ends  */

</style>

  </head>
  <body>
    
    <!-- navbar code begins -->

    <nav id="mainNavbar" class="navbar navbar-expand-lg navbar-light shadow fixed-top shift animate__animated animate__slideInDown animate__slower">
        <div class="container-fluid">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="home.html" class="navbar-brand"> 
            <img src="images/logo.JPG" width="80" height="60" alt="" class="d-inline-block align-middle mr-2">
          </a>
      
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home.php">HOME</a>
              </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  THE STUDIO
                </a> 
                <ul class="dropdown-menu" aria-labelledby="navbarDropdow n">
                  <li><a class="dropdown-item" href="our-vision.html">Our Vision</a></li>
                  <li><a class="dropdown-item" href="classes.html">Classes</a></li>
                  <li><a class="dropdown-item" href="#">Artistic Director</a></li>
                  <li><a class="dropdown-item" href="faculty.html">Teaching Staff</a></li>
                </ul>
              </li>
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PROGRAMS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="virtual-classes.html">Virtual Dance Studio</a></li>
                  <li><a class="dropdown-item" href="in-studio.html">In-Studio Dance Clases</a></li>
                  <li><a class="dropdown-item" href="school-programs.html">School Programs</a></li>
                  <li><a class="dropdown-item" href="annual-recitals.html">Annual Recitals</a></li>
                </ul>
              </li>
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                EVENTS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="wellness-workshops.html">Wellness Workshop</a></li>
                  <li><a class="dropdown-item" href="wedding-choreography.html">Wedding Choreography</a></li>
                    <li><a class="dropdown-item" href="school-productions.html">Schools Productions & Musicals</a></li>
                  <li><a class="dropdown-item" href="event-choreography.html">Event Choreography & Product Launch</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="gallery.html">GALLERY</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="in-media.html">IN-MEDIA</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="blogs.php">BLOGS</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="contactUs.php">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

  <!-- navbar code ends -->

        <!-- query form begins -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 ">
                     <!-- heading for query section  -->
                    <h2 class="animate_animated animate_bounce" style="text-align: center; padding-top: 140px; font-weight: bolder;">WRITE YOUR BLOG</h2>

                    <div class="form-container">
                        <form id="post-blog-form" method ="POST" action="" class="contact" enctype="multipart/form-data">
                        <div class="mb-3 form-input">
                            <input id="name" class="small-text" type="text" name="name" placeholder="Enter Full Name" required>
                        </div>
                        <div class="mb-3 form-input">
                            <input id="title" class="small-text" type="text" name="title" placeholder="Enter Title" required>
                        </div>
                        <div class="mb-3 form-input">
                            <textarea name="content" id="exampleFormControlTextarea1" placeholder="Write your Query" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            Select Image File to Upload: <br>
                            <input name="file" type="file" name="file" required>
                        </div>
                        <div class="submit-button">
                            <button name="publish_post" type="submit" class="btn" id="submit-btn">Publish</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>

        <!-- query form ends  -->
    </body>
</html>