<?php
    include "logic.php"
?>

<!-- technologies used for the creation of this page  -->
<!-- 1. bootstrap -->
<!-- 2. jquery -->
<!-- 3. animate.css for animations-->
<!-- 4. font awesome for icons-->
<!-- 5. animista.css for animations-->
<!-- 6. vov.css for animations-->
<!-- 7. lity lightbox jquery plugin to play video inside website-->
<!-- 8. JSON -->

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
    <link rel="stylesheet" href="css/home-page.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/blogs.css">

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
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Faster+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">

    <!-- lity lightbox  -->
    <link href="lity/lity.css" rel="stylesheet">
    <script src="lity/lity.js"></script>
    <script src="lity/jquery.js"></script>

    

    <title>Home page</title>

    <script>
      $(window).load(function() {
		    // Animate loader off screen
		    $(".se-pre-con").fadeOut("slow");;
	    });
    </script>

    <style>
      .no-js #loader { display: none;  }
      .js #loader { display: block; position: absolute; left: 100px; top: 0; }
      .se-pre-con {
	      position: fixed;
	      left: 0px;
	      top: 0px;
	      width: 100%;
	      height: 100%;
	      z-index: 9999;
	      background: url('images/ajax-loader.jfif') center no-repeat #fff;
      }
    </style>
    
  </head>
  <body>

    <div class="se-pre-con"></div>
    
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
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="#">HOME</a>
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

  <!-- bootstrap carousel code begins  -->
  <div id="carouselExampleCaptions" class="carousel slide parallax" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" id="carousel-1">
        <img src="homepage-img/main-slider-img-1.jpg" data-lity class="d-block w-100 image-1 slider-img vov fade-in slow" alt="image-1">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="tracking-in-contract">RAPID RHYTHMS DANCE</h2>
          <h2 class="tracking-in-contract">ACADEMY</h2>
          <h2 class="tracking-in-contract" style="color:#c0a062;">LET'S DANCE TOGETHER TO THE</h2>
          <h2 class="tracking-in-contract" style="color:#c0a062;">SONG OF LIFE!!</h2>
          <hr class="text-flicker-in-glow">
          <p class="text-flicker-in-glow" style="font-family: 'Lobster', cursive; font-size: 30px;">Why walk, when you can Dance?</p>
        </div>
      </div>
      <div class="carousel-item" id="carousel-2">
        <img src="homepage-img/main-slider-img-2.jpg" class="d-block w-100 image-2  slider-img" alt="image-2">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="tracking-in-contract">WE WELCOME YOU TO OUR</h2>
          <h2 class="tracking-in-contract" style="color: maroon;">VIRTUAL WORLD!!</h2>
          <hr>
          <p class="text-flicker-in-glow" style="font-family: 'Lobster', cursive; font-size: 30px;">So now, forget your troubles and DANCE</p>
        </div>
      </div>
      <div class="carousel-item" id="carousel-3">
        <img src="homepage-img/main-slider-img-3.jpg" class="d-block w-100 image-3 slider-img" alt="image-3">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="tracking-in-contract" style="color: black;">COME VISIT OUR STUDIO!</h2>
          <h2 class="tracking-in-contract"><a id="location" href="contactUs.php#studios";>VIEW LOCATION  <i class="fas fa-arrow-circle-right"></i></a></h2>
          <!-- <hr style="color: black;"> -->
          <p class="text-flicker-in-glow" style="font-family: 'Lobster', cursive; font-size: 30px; color: maroon;">Because dance is all about expressing oneself</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="homepage-img/main-slider-img-4.jpg" class="d-block w-100 image-4 slider-img" alt="image-4">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="tracking-in-contract" style="font-size: 45px;">DANCE BIG, DREAM BIG!!</h2>
        </div>
      </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- bootstrap caarousel code ends  -->
  <br>
  <br>
  <br>

  <!-- Vision code begins  -->
  <div class="container" >
    <div class="row d-flex justify-content-center ">
      <div class="col-lg-4 col-xs-12 vision-col vision-section">
          <h6 class="title-heading">RAPID RHYTHMS DANCE STUDIO</h6>
          <span class="underline vision text-center"><b>OUR </b>VISION</span>
      </div>
      <div class="col-lg-4 col-xs-12 vision-read-more vision-section">
        <p class="about-para">Founded in 2015, Rapid Rhythms Dance Academy is the brainchild of Directors & Founders, Manya Mittal & Navneet Kaur, 
          along with a fantastic team of dancers who are now a part of the professional company at Rapid Rhythms Dance Academy. 
          The vision has always been to push boundaries both, in terms of movement as well as ideas. With their combined vision of creating and enhancing movement possibilities, 
          the director along with other emerging, passionate dancers in the company, create works that are captivating, reflective and evoke exuberance.</p>
        
        <a class="read-more" href="our-vision.html">READ MORE  &nbsp</a>
      </div>
      <div class="col-lg-4 col-xs-12 vision-img vision-section">
        <img class=" about-image" src="homepage-img/about-image.jpg" alt="">
      </div>
    </div>
  </div>

  <!-- vision code ends  -->
  <br><br><br><br>

  <!-- service section code begins  -->
  <div class="what-we-do-heading-container">
  <div class="container">
    <div class="title-box">
      <h1 class="what-we-do"><b>WHAT WE </b>DO</h1>
    </div>
  </div>

  <div class="container">
    <div class="row" style="filter: drop-shadow(0 0 0.55rem #222222);">
      <div class="col-xs-6 col-lg-3 service-column">
        <div class="service-block-one">
          <div class="inner-box">
            <figure class="image-box">
                <img class="what-we-do-img" src="homepage-img/school-function-img.jfif" alt="Rapid Rhythms">
            </figure>
            <div class="caption-box">
              <div class="count-text">01</div>
              <h4>School Productions &amp; Musicals</h4>
              <a href="school-productions.html">Read More</a>
            </div>
            <div class="overlay-box">
              <div class="icon-box"></div>
              <h4><a href="school-productions.html">School Productions &amp; Musicals</a></h4>
              <div class="text">Rapid Rhythms Dance Academy serves as an advocate for dance and for education in the arts within the dance community and to the public–at-large.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-lg-3 service-column">
        <div class="service-block-one">
          <div class="inner-box">
            <figure class="image-box">
              <img class="what-we-do-img" src="homepage-img/wedding-photo.jpg" alt="Rapid Rhythms">
            </figure>
            <div class="caption-box">
              <div class="count-text">02</div>
              <h4>Wedding Dance Lessons &amp; Choreography</h4>
              <a href="wedding-choreography.html">Read More</a>
            </div>
            <div class="overlay-box">
              <div class="icon-box"></div>
                <h4><a href="wedding-choreography.html">Wedding Dance Lessons &amp; Choreography</a></h4>
                <div class="text">It’s time to demonstrate your love and chemistry as a couple, and as a family.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-lg-3 service-column">
        <div class="service-block-one">
          <div class="inner-box">
            <figure class="image-box">
              <img class="what-we-do-img" src="homepage-img/dance-class-img.jfif" alt="Rapid Rhythms">
            </figure>
            <div class="caption-box">
              <div class="count-text">03</div>
              <h4>Occassional Wellness Workshops</h4>
              <a href="wellness-workshops.html">Read More</a>
            </div>
            <div class="overlay-box">
              <div class="icon-box"></div>
                <h4><a href="wellness-workshops.html">Occassional Wellness Workshops</a></h4>
                <div class="text">Rapid Rhythms Dance Academy serves as an advocate for dance and for education in the arts within the dance community and to the public–at-large.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-lg-3 service-column">
        <div class="service-block-one">
          <div class="inner-box">
            <figure class="image-box">
              <img class="what-we-do-img" src="homepage-img/event-img.jfif" alt="Rapid Rhythms">
            </figure>
            <div class="caption-box">
              <div class="count-text">04</div>
              <h4>Event Choreography <br>&amp; Product Launches</h4>
              <a href="event-choreography.html">Read More</a>
            </div>
            <div class="overlay-box">
              <div class="icon-box"></div>
                <h4><a href="event-choreography.html">Event Choreography &amp; Product Launches</a></h4>
                <div class="text">Whether you are launching a new car, introducing new machinery, or selling a phone or simply reminding your customers of your brand.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- service section code ends  -->

  <!-- video section code begins  -->
  <section class="video-style-two text-center" style="background-image: url(https://images.unsplash.com/photo-1537365587684-f490102e1225?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=751&q=80);">
    <div class="container">
        <div class="inner-content">
            <span class="top-text">EVENTS &amp; ENTERTAINMENT| THE WITCH, THE WIZARD &amp; THE WARDROBE</span>
            <h1 style="font-family: 'Oswald',sans-serif;">DANCE COMPANY SHOWREEL</h1>
            <a href="https://www.youtube.com/watch?v=uvqLZ9D6jrc" class="video-link" data-lity><i class="fas fa-play"></i></a>
        </div>
    </div>
  </section>
  <!-- video section code ends  -->
  <br><br>

  <!-- work explore section begins  -->
  <section class="work-section work-tab">
    <div class="container">
      <div class="sec-title text-center">
        <h1 style="font-family: 'Oswald',sans-serif;"><b>EXPLORE </b><span class="underline">THE SEASON</span></h1>
      </div>
      <div class="content-box">
        <div class="row">
          <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 inner-column">
            <div class="inner-content">
              <div class="tab-btns centred">
                <ul class="product-tab-btns project-btn post-filter">
                  <li class="p-tab-btn active-btn" data-tab="#p-tab-1">Virtual Dance Studio</li>
                  <li class="p-tab-btn" data-tab="#p-tab-2">In-Studio Dance Classes</li>
                  <li class="p-tab-btn" data-tab="#p-tab-3">School Programs</li>
                  <li class="p-tab-btn" data-tab="#p-tab-4">Summer Programs</li>
                  <li class="p-tab-btn" data-tab="#p-tab-5">Annual Recitals</li>
                </ul>
              </div>
              <div class="p-tabs-content">
                <div class="p-tab active-tab" id="p-tab-1">
                  <div>
                    <div class="single-item">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                          <div class="tab-content">
                            <div class="top-content">
                              <div class="count-text">01</div>
                            </div>
                            <div class="lower-content">
                              <h2><a class="explore-head" href="virtual-classes.html">Virtual Dance Studio</a></h2>
                              <div class="text">The Academy has been successfully hosting online classes and workshops since April 2020. The virtual studio maintains the division of curriculum and specialised methodology to work with dancers from beginners to advance levels.</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                          <figure class="image-box line-overlay">
                            <span class="line"></span>
                            <span class="line line-bottom"></span>
                            <img class="explore-imgs" src="homepage-img/virtual-dance-class.jpg" alt="Rapid Rhythms">
                          </figure>
                        </div>
                      </div> 
                    </div>                  
                  </div>
                </div>
                            
                <div class="p-tab" id="p-tab-2">
                  <div>
                    <div class="single-item">
                      <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                          <div class="tab-content">
                            <div class="top-content">
                              <div class="count-text">02</div>
                            </div>
                          <div class="lower-content">
                            <h2><a class="explore-head" href="in-studio.html">In-Studio Dance Classes</a></h2>
                            <div class="text">Rapid Rhythms Dance Academy offers adults and children's dance classes in many styles, including Ballet, Contemporary, Hip Hop, Jazz, Body Conditioning, Bollywood and Social Dances. The classes are  based in all levels from absolute beginner to Advanced. At the moment the In-studio classes are available in our Mumbai Andheri and Bandra studios.</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                        <figure class="image-box line-overlay">
                          <span class="line"></span>
                          <span class="line line-bottom"></span>
                          <img class="explore-imgs" src="homepage-img/in-studio-classes.jfif" alt="Rapid Rhythms">
                        </figure>
                      </div>
                    </div> 
                  </div>                  
                </div>
              </div>
                            
              <div class="p-tab" id="p-tab-3">
                <div>
                  <div class="single-item">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div class="tab-content">
                          <div class="top-content">
                            <div class="count-text">03</div>
                          </div>
                          <div class="lower-content">
                            <h2><a class="explore-head" href="school-programs.html">School Programs</a></h2>
                            <div class="text">The studio serves as an advocate for dance and for education in the arts within the dance community and to the public–at-large. Our facilitators, qualified and experienced dance faculty regularly involve themselves with school outreach programs enhancing the young students’ knowledge about the scope of dance.</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                        <figure class="image-box line-overlay">
                          <span class="line"></span>
                          <span class="line line-bottom"></span>
                          <img class="explore-imgs" src="homepage-img/school-programs.jfif" alt="Rapid Rhythms">
                        </figure>
                      </div>
                    </div>
                  </div>                    
                </div>
              </div>
                            
              <div class="p-tab" id="p-tab-4">
                <div>
                  <div class="single-item">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div class="tab-content">
                          <div class="top-content">
                            <div class="count-text">04</div>
                          </div>
                          <div class="lower-content">
                            <h2><a class="explore-head" href="summer-programs.html">Summer Programs</a></h2>
                            <div class="text">Each year the academy hosts a series of summer workshops and classes that focus on intensive training and building better techniques for dancers. The summer program run separate segments for children and adult dancers. All workshops are customised keeping in mind the physical &amp; performative skills for dancers of all levels.</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                        <figure class="image-box line-overlay">
                          <span class="line"></span>
                          <span class="line line-bottom"></span>
                          <img class="explore-imgs" src="homepage-img/summer-program.jpg" alt="Rapid Rhythms">
                        </figure>
                      </div>
                    </div> 
                  </div>                   
                </div>
              </div>

              <div class="p-tab" id="p-tab-5">
                <div>
                  <div class="single-item">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                        <div class="tab-content">
                          <div class="top-content">
                            <div class="count-text">05</div>
                          </div>
                          <div class="lower-content">
                            <h2><a class="explore-head" href="annual-recitals.html">Annual Recitals</a></h2>
                            <div class="text">The annual recital is a once-a-year stage gala! It's that time of the year when all our dancers come together to entertain a live audience. In recent years, we have seen a series of some very exciting musicals coming alive and have left our audiences spellbound. . This is a chance for most training dancers to get a hands-off learning experience to deal with props, costumes  and to understand the nuances of on-stage and back-stage life as a performer.</div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                        <figure class="image-box line-overlay">
                          <span class="line"></span>
                          <span class="line line-bottom"></span>
                          <img class="explore-imgs" src="homepage-img/annual-recitals.jfif" alt="Rapid Rhythms">
                        </figure>
                      </div>
                    </div> 
                  </div>                   
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- work explore section ends  -->

  <!-- blogs section begins -->
  <section class="news-section blog-grid">
        <div class="container">
            <div class="sec-title text-center">
                <h1 style="font-family: 'Oswald',sans-serif;"><b>NEWS </b><span class="underline">& BLOGS</span></h1>
            </div>
            <div class="row">
                <?php foreach($query1 as $q){
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
  <br><br><br>
  <!-- blogs section ends  -->


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
              <div class="copyright"><center>&copy; <a href="#">RAPID RHYTHMS DANCE STUDIO</a> 2021. All Rights Reserved. </center></div>
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
    <script src="javascript/home-js.js"></script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

  </body>
</html>