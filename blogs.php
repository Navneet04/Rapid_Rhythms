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
    <link rel="stylesheet" href="css/blogs.css" type="text/css">
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

    <!-- lity lightbox  -->
    <link href="lity/lity.css" rel="stylesheet">
    <script src="lity/lity.js"></script>
    <script src="lity/jquery.js"></script>

    <title>Blogs</title>
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
					<li class="nav-item dropdown active">
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
				  <li class="nav-item">
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

  <!-- main image section begins -->
  <div class="vision-img-container">
      <img src="https://images.unsplash.com/photo-1443188631128-a1b6b1c5c207?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=889&q=80" alt="" class="main-vision-image vov fade-in slow">
      <div class="top-center vov fade-in slowest">BLOGS</div>
      <div class="label-div"><h4 class="label">RAPID RHYTHMS DANCE ACADEMY&nbsp; &nbsp; <img style="transform: rotate(90deg); margin-top: 5px; width: 80px;" src="line.png" alt=""></h4></div>
  </div>
  <!-- main image section ends  -->
  <br><br><br>

  <!-- text begins  -->
  <div class="container">
      <div class="row">
          <div class="col-12 vov slide-in-up slower">
              <center><a href="create-blog.php" class="btn" style="background-color: maroon; color: white; font-size: 35px; font-family: 'Oswald',sans-serif;">+ Post New Blog</a></center>
          </div>
      </div>
  </div>
  <!-- text ends  -->

  <!-- blog section begins  -->
  <section class="news-section blog-grid">
        <div class="container">
            <div class="row">
                <?php foreach($query as $q){
                    $imageURL = 'uploads/'.$q["blog_image"]; ?>
                <div class="col-lg-4 col-md-6 col-sm-12 news-block wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="news-block-one">
                        <figure class="image-box"><a href="view-blog.php?id=<?php echo $q['id']; ?>"><img src="<?php echo $imageURL ?>" alt=""></a></figure>
                        <div class="lower-content">
                            <ul class="post-info">
                                <li><i class="far fa-calendar-alt"></i><?php echo $q['upload_date'] ?></li>
                                <li><i class="fa fa-tag"></i>Rapid Rhythms Academy</li>
                            </ul>
                            <center><h4><a href="view-blog.php?id=<?php echo $q['id']; ?>" style="font-family: 'Oswald',sans-serif; font-size: 25px; text-decoration: none; text-transform: capitalize;"><?php echo $q['title'] ?></a></h4></center>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
  <!-- blog section ends  -->
  <br><br><br>


  <!-- main-footer -->
  <footer class="main-footer">
    <div class="container">
        <div class="widget-section">
            <div class="row">
                <div class="col-lg-4 footer-column">
                    <div class="logo-widget footer-widget">
                        <div class="widget-content">
                            <h4 class="widget-title">Stay Connected On Social</h4>
                            <ul class="social-links">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 footer-column">
                    <div class="contact-widget footer-widget">
                        <h4 class="widget-title">Contact us</h4>
                        <div class="widget-content">
                            <ul class="list">
                                <li>
                                    <span>Address :</span>
                                    &bull; Delhi &nbsp; &bull; Noida &nbsp; &bull; Gurugaon
                                </li>
                                <li>
                                    <span>Call Us :</span>
                                    <a href="tel:8527910123">8527910123</a>
                                </li>
                                <li>
                                    <span>Email :</span>
                                    <a href="mailto:studio@rapidRhythms.in">studio@rapidRhythms.in</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred">
            <div class="copyright"><center>&copy; <a href="#">RAPID RHYTHMS DANCE STUDIO</a> 2021. All Rights Reserved.</center></div>
        </div>
    </div>
  </footer>
  <!-- main-footer end -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  -->

  <!-- jquery cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <!-- external JavaScript  -->
  <script src="javascript/our-vision.js"></script> 

  </body>
</html>