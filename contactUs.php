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
    <!-- link css -->
	<link rel="stylesheet" href="css/style-contact.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css">
    <!-- jquery cdn  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- font-awesome cdn  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- animate.css cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- vov.css cdn  -->
    <link href="https://cdn.jsdelivr.net/gh/vaibhav111tandon/vov.css@latest/vov.css" rel="stylesheet" type="text/css">

    <title>Contact</title>
    <style>
        .speak{
        border-right:1px solid black;
        }
    </style>
  </head>

   <body>
       <script>
           
   // Check if it's time to start the animation.
// takes jQuery(element) a.k.a. $('element')
function onScreen(element) {
    // window bottom edge
    var windowBottomEdge = $(window).scrollTop() + $(window).height();

    // element top edge
    var elementTopEdge = element.offset().top;
    var offset = 100;

    // if element is between window's top and bottom edges
    return elementTopEdge + offset <= windowBottomEdge;
  }

//add animation when scrolled down to that section
function checkAnimation() {
    var $workImage = $('.work-image');
    var $speakTo = $('.speak');
    var $Register = $('.register');
    var $FAQ = $('.faq');
    //ar $service = $('.inner-box');

    if (onScreen($workImage)) {
        // Start the animation
        $workImage.addClass('animate__animated animate__fadeInRight slow');
    } 

    if(onScreen($speakTo)){
        $speakTo.addClass('vov slide-in-left');
    }

    if(onScreen($Register)){
        $Register.addClass('vov slide-in-right');
    }
    
    if(onScreen($FAQ)){
        $FAQ.addClass('vov fade-in-right slower');
    }
}
$(window).on('scroll', function() {
    checkAnimation();
});

</script>
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
              <li class="nav-item">
                <a class="nav-link" href="blogs.php">BLOGS</a>
              </li>
               <li class="nav-item active">
                <a class="nav-link" href="contactUs.php">CONTACT</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- navbar code ends -->

   <a name="callus"></a>
   <div class="contactImage" style="padding:0%; margin:0%; background-width: auto; background-repeat: no-repeat;">
            <img style="height: 90vh; width: 100%;" class="vov fade-in slowest" src="https://cdn.shopify.com/s/files/1/0052/7043/7978/t/4/assets/contact_us_banner_long2.jpg?14881" style="width:100%;">
        </div> 

        <ul class="nav" style="background-color:rgba(0,0,0,0.1);">
            <li class="nav-item">
                <a style="color:black;font-family: 'Oswald', sans-serif;" class="nav-link" href="#callus">Contact</a>
            </li>
            <li class="nav-item">
                <a style="color:black;font-family: 'Oswald', sans-serif;"class="nav-link" href="#studios">Studios</a>
            </li>
            <li class="nav-item">
                <a style="color:black;font-family: 'Oswald', sans-serif;"class="nav-link" href="#faq">FAQs</a>
            </li>
            <li class="nav-item">
                <a style="color:black;font-family: 'Oswald', sans-serif;"class="nav-link" href="#work">Work with us</a>
            </li>
        </ul>
<br><br>

        <!--/* location of the studios */-->
        <a name="studios"></a>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="vov slide-in-left studios" style="font-family: 'Oswald', sans-serif;color:maroon;">Rapid Dance Arena </h1><br>
                    <p style="font-family:'Open sans' sans-serif"class="vov slide-in-left ">Rapid Dance Network Pvt Ltd<br>
                    Dhan Mill Compound, 100 Ft Road, Chattarpur, Near Qutab Minar Metro Station
                    </p>
                </div>

                <div class="col-sm-6">
                <div style="filter:drop-shadow(0 0 0.55rem #222222);"class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe vov slide-in-right" style="animation-duration:2s;"frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=530&amp;height=334&amp;hl=en&amp;q=Big Dance Arena&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fnfgo.com/">Friday Night Funkin Mods</a></div><style>.mapouter{position:relative;text-align:right;width:530px;height:334px;}.gmap_canvas {overflow:hidden;background:none!important;width:530px;height:334px;}.gmap_iframe {width:530px!important;height:334px!important;}</style></div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-6">
                <h1 class="vov slide-in-left slower " style="font-family: 'Oswald', sans-serif;color:maroon;">Bandra Suburb </h1><br>
                    <p style="font-family: 'Open sans', sans-serif;" class="vov slide-in-left slower ">Rhythmic Dance Network Pvt Ltd<br>
                    Dhan Mill Compound, 100 Ft Road, Chattarpur, Near Qutab Minar Metro Station
                    </p>
                </div>

                <div class="col-sm-6">
                <div style="filter:drop-shadow(0 0 0.55rem #222222);"class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe vov fade-in-right"style="animation-duration:2s;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=530&amp;height=334&amp;hl=en&amp;q=stancedance&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fnfgo.com/">Friday Night Funkin Mods</a></div><style>.mapouter{position:relative;text-align:right;width:530px;height:334px;}.gmap_canvas {overflow:hidden;background:none!important;width:530px;height:334px;}.gmap_iframe {width:530px!important;height:334px!important;}</style></div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-6">
                <h1 class="vov slide-in-left slowest"style="font-family: 'Oswald', sans-serif;color:maroon;">Mumbai Andheri</h1>
                    <p style="font-family: 'Open sans', sans-serif;" class="vov slide-in-left slowest">Big Dance Network Pvt Ltd<br>
                    Commerce Centre Basement, Plot No B-27, Near Morya House,Off Link Road, Andheri(W)
                    </p>
                </div>

                <div class="col-sm-6">
                <div style="filter:drop-shadow(0 0 0.55rem #222222);"class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe vov fade-in-right" style="animation-duration:2s;"frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=530&amp;height=334&amp;hl=en&amp;q=mumbai andheri&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fnfgo.com/">Friday Night Funkin Mods</a></div><style>.mapouter{position:relative;text-align:right;width:530px;height:334px;}.gmap_canvas {overflow:hidden;background:none!important;width:530px;height:334px;}.gmap_iframe {width:530px!important;height:334px!important;}</style></div></article>
                </div>
            </div>
            <br><br>
            <hr style="width:40%;margin:auto;color:maroon;font-weight:bolder;">
            <br><br>
        </div>

     <!--end of the locations section--> 
    

     <!--faq section begins--> 

    <a name="faq"></a>
    <div class="container">
    <div class="row">
    <h1 class="faq" style="font-family: 'Oswald', sans-serif;color:maroon;">FAQs</h1>
    </div>
    <br>
    <div class="row">
    <h5 style="font-family:'Open sans', sans-serif; word-spacing:3px;font-size:16px;">
    It is a multi-activity center which aims to promote various dances styles and other different performing art forms. We provide a<br>several professional certified
    and intensive training programs for students who are an enthusiastic about dance and want to and<br>enrich their skills and make a career in the field of dance
    dances styles and other different performing art forms.This is towards<br>
    It is a multi-activity center which aims to promote various dances styles and other different performing art forms. We provide a<br>several professional certified
    and intensive training programs for students who are an enthusiastic about dance and want to and<br>enrich their skills and make a career in the field of dance
    dances styles and other different performing art forms.
    </div>
    </div>
    <br><br>
    
    <div class="container">
    <button class="accordion">What is the monthly package for classes and how many classes will i get in a month?</button>
    <div class="panel">
    <p>Rs 2400/- + GST for 8 classes in a month</p>
    </div>

    <button class="accordion">Can we change our dance form for another before the completion of an 8-class package?</button>
    <div class="panel">
    <p>No. The classes are not transferable among different batches. Only after you are done with one batch</p>
    </div>

    <button class="accordion">What kind of classes do you teach?</button>
    <div class="panel">
    <p>We teach western dance forms like Jazz, Contemporary, Belly Dancing, Bboying, Urban Choregraphy, Hip-Hop etc</p>
    </div>

    <button class="accordion">If I am dancing for the first time, what would be the best class for me?</button>
    <div class="panel">
    <p>To start with, any form of dance can be taken up on the beginner level. Whichever beginner batch you choose to join, you will be taught the basics of that particular form, irrespective of your previous experience in dance.   If you are still unsure, Hip Hop could be one option for you, because it is one form that will get your body used to a basic sense of rhythm while ensuring you have fun in the process. Jazz is another option, because understanding the basics of Jazz will help you get into the more complex dance forms like Ballet and Contemporary, if you wish to learn them later.</p>
    </div>

    <button class="accordion">What is the minimum and maximum age group to join classes?</button>
    <div class="panel">
    <p>A child has to be at least 5 years old to be able to join our classes. We have no upper age limit to dancing with us.</p>
    </div>

    <button class="accordion">Who is going to be my instructor?</button>
    <div class="panel">
    <p>Different instructors teach classes of different dance styles. If you would like to learn from a particular teacher, do contact us via telephone or e-mail so we can give you more details.</p>
    </div>

    <button class="accordion">Do i get a discount if I get more people to join?</button>
    <div class="panel">
    <p>We already have a fee structure that comes with a discount and so we don't offer any extra discounts on classes.</p>
    </div>

    <button class="accordion">Do i get a discount if I get more people to join?</button>
    <div class="panel">
    <p>We already have a fee structure that comes with a discount and so we don't offer any extra discounts on classes.</p>
    </div>

    <button class="accordion">Can we get a free trial for more than one class?</button>
    <div class="panel">
    <p>No we dont give FREE trial classes however we have a drop-in class system.</p>
    </div>

    <button class="accordion">If i miss a class, will I get compensated for the same?</button>
    <div class="panel">
    <p>Unfortunately, the classes you miss don't get carried forward nor do we provide refunds.</p>
    </div>

    <button class="accordion">In how much time can I become a dancer?</button>
    <div class="panel">
    <p>Every dancer is different and it entirely depends upon your own potential and dedication to dance.</p>
    </div>

    <button class="accordion">Can I join in as an instructor?</button>
    <div class="panel">
    <p>Certainly. Please send us your profile and we will review it.</p>
    </div>
    </div>

    <script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
        } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        } 
    });
    }
    </script>
    <br><br>
    <hr style="width:80%;color:maroon;margin:auto;">
    <br><br><br>

    <a name="work"></a>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <h1 style="color:maroon;font-family: 'Oswald', sans-serif;">Work With Us<br></h1>
            <p>&nbsp;</p>
            <h3 style="font-family: 'Open sans', sans-serif;">Want a rewarding career in the field of Dance</h3>
            <p>&nbsp;</p>
            <h5 style="font-family: 'Open sans', sans-serif;">Call us at 8899340340 or mail us at <a style="color:maroon;" href="mailto:info@rapidRhythms" target="_blank" class="pageLink">info@rapidRhythms.com</a></h5>
            <p>&nbsp;</p>
            <!-- <h2 class="subheading">&nbsp;</h2>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p> -->
        </div>
        <div class="col-sm-6 text-center">
            <img class="work-image" src="https://content.jdmagicbox.com/comp/kolkata/q8/033pxx33.xx33.190313091004.h4q8/catalogue/nrityanjali-traditional-kathak-institution-bhawanipur-kolkata-dance-classes-1r1qyldy4f.jpg?clr=" style="height:300px;">
        </div>
    </div>
</div>
<br><br><br><br><br>

<!-- registration -->

<div class="container">
    <div class="row row-divided text-center">
        <div class="col-sm-6 speak">
            <h2 style="font-family: 'Oswald', sans-serif;">Speak To Our Experts</h2>
            <br>
            <button style="font-family: 'Open sans', sans-serif;"type="button" class="btn btn-danger"><h5>8934528124</h5></button>
        </div>
        <div class="col-sm-6 register">
            <h2 style="font-family: 'Oswald', sans-serif;">Register Yourself Fast</h2>
            <br>
            <button style="font-family: 'Open sans', sans-serif;" type="button" class="btn btn-danger"><a style="text-decoration:none;color:white;"><h5>REGISTER</h5></a></button>
        </div>
    </div>
</div>

<!-- register section ends -->

<br><br><br><br><br>
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
                <div class="copyright">&copy; <a style="font-family: 'Oswald', sans-serif;"href="#">RAPID RHYTHMS DANCE STUDIO</a> 2021. All Rights Reserved. </div>
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

   
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</body>
</html>