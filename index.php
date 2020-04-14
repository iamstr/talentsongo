<?php

include("includes/header.php");

?>

<style>

    button#dropdownMenuButton {
    border: none;
    background-color: transparent;
/*    color: #3265b9;*/
}
    .dropdown:hover>.dropdown-menu {
  display: block;
}
    
    .btn-dark {
    color: #fff;
    background-color: transparent;
    border-color: black;
}
    
    .btn-dark:hover {
    color: black;
       transition: 1.2s; 
    background-color: white;
    border-color: black;
}
    
    
    
    .bg-2{
        
        
    background-color: #36343a;
    background-image: url("data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Ctitle%3Ehoundstooth%3C/title%3E%3Cg fill='%2309080d' fill-opacity='0.4' fill-rule='evenodd'%3E%3Cpath d='M0 18h6l6-6v6h6l-6 6H0M24 18v6h-6M24 0l-6 6h-6l6-6M12 0v6L0 18v-6l6-6H0V0'/%3E%3C/g%3E%3C/svg%3E");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
    }

    
    
</style>



<style>
    @media only screen and (max-width:600px) {

        .about {
            font-size: 40px;

        }

        .paralax {

            background-attachment: scroll;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    }

    .about-us {

        text-transform: uppercase;

        margin-bottom: 2rem;
        font-family: 'Open Sans Condensed', sans-serif;
        font-size: 64px;
        font-weight: 700;
        line-height: 1.1;
        color: inherit;
        color: maroon;
    }



    .container-fluid {
        width: 100%;
        padding-right: 0;
        padding-left: 0;
        margin-right: auto;
        margin-left: auto;
    }


    .img-overlay {


        position: relative;


    }



    .centered {
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;




    }

    /*
    .center-btn {


        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);

    }
*/

    html,
    body {

        overflow-x: hidden;
        height: 100%;
/*        background-color: #bfbfbf;*/
/*        color: #232b2b;*/
        padding-bottom: 0px;
        
        background-image: url("images/bg-gallery.png");
    }
    
    
    
    
    
.content-slider {
  width: 100%;
  height: 360px;
}

.slider {
  height: 320px;
  width: 680px;
  margin: 40px auto 0;
  overflow: visible;
  position: relative;
}

.mask {
  overflow: hidden;
  height: 320px;
}

.slider ul {
  margin: 0;
  padding: 0;
  position: relative;
}

.slider li {
  width: 680px;
  height: 320px;
  position: absolute;
  top: -325px;
  list-style: none;
}

.slider .quote {
  font-size: 40px;
  font-style: italic;
}

.slider .source {
  font-size: 20px;
  text-align: right;
}

.slider li.anim1 {
  -moz-animation: cycle 15s linear infinite;
  -webkit-animation: cycle 15s linear infinite;
  animation: cycle 15s linear infinite;
}

.slider li.anim2 {
  -moz-animation: cycle2 15s linear infinite;
  -webkit-animation: cycle2 15s linear infinite;
  animation: cycle2 15s linear infinite;
}

.slider li.anim3 {
  -moz-animation: cycle3 15s linear infinite;
  -webkit-animation: cycle3 15s linear infinite;
  animation: cycle3 15s linear infinite;
}

.slider li.anim4 {
  -moz-animation: cycle4 15s linear infinite;
  -webkit-animation: cycle4 15s linear infinite;
  animation: cycle4 15s linear infinite;
}

.slider li.anim5 {
  -moz-animation: cycle5 15s linear infinite;
  -webkit-animation: cycle5 15s linear infinite;
  animation: cycle5 15s linear infinite;
}

.slider:hover li {
  -moz-animation-play-state: paused;
  -webkit-animation-play-state: paused;
  animation-play-state: paused;
}

@-moz-keyframes cycle {
  0% {
    top: 0px;
  }
  4% {
    top: 0px;
  }
  16% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  20% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  21% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  92% {
    top: -325px;
    opacity: 0;
    z-index: 0;
  }
  96% {
    top: -325px;
    opacity: 0;
  }
  100% {
    top: 0px;
    opacity: 1;
  }
}

@-moz-keyframes cycle2 {
  0% {
    top: -325px;
    opacity: 0;
  }
  16% {
    top: -325px;
    opacity: 0;
  }
  20% {
    top: 0px;
    opacity: 1;
  }
  24% {
    top: 0px;
    opacity: 1;
  }
  36% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  40% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  41% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@-moz-keyframes cycle3 {
  0% {
    top: -325px;
    opacity: 0;
  }
  36% {
    top: -325px;
    opacity: 0;
  }
  40% {
    top: 0px;
    opacity: 1;
  }
  44% {
    top: 0px;
    opacity: 1;
  }
  56% {
    top: 0px;
    opacity: 1;
  }
  60% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  61% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@-moz-keyframes cycle4 {
  0% {
    top: -325px;
    opacity: 0;
  }
  56% {
    top: -325px;
    opacity: 0;
  }
  60% {
    top: 0px;
    opacity: 1;
  }
  64% {
    top: 0px;
    opacity: 1;
  }
  76% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  80% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  81% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@-moz-keyframes cycle5 {
  0% {
    top: -325px;
    opacity: 0;
  }
  76% {
    top: -325px;
    opacity: 0;
  }
  80% {
    top: 0px;
    opacity: 1;
  }
  84% {
    top: 0px;
    opacity: 1;
  }
  96% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  100% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
}

@-webkit-keyframes cycle {
  0% {
    top: 0px;
  }
  4% {
    top: 0px;
  }
  16% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  20% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  21% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  50% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  92% {
    top: -325px;
    opacity: 0;
    z-index: 0;
  }
  96% {
    top: -325px;
    opacity: 0;
  }
  100% {
    top: 0px;
    opacity: 1;
  }
}

@-webkit-keyframes cycle2 {
  0% {
    top: -325px;
    opacity: 0;
  }
  16% {
    top: -325px;
    opacity: 0;
  }
  20% {
    top: 0px;
    opacity: 1;
  }
  24% {
    top: 0px;
    opacity: 1;
  }
  36% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  40% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  41% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@-webkit-keyframes cycle3 {
  0% {
    top: -325px;
    opacity: 0;
  }
  36% {
    top: -325px;
    opacity: 0;
  }
  40% {
    top: 0px;
    opacity: 1;
  }
  44% {
    top: 0px;
    opacity: 1;
  }
  56% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  60% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  61% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@-webkit-keyframes cycle4 {
  0% {
    top: -325px;
    opacity: 0;
  }
  56% {
    top: -325px;
    opacity: 0;
  }
  60% {
    top: 0px;
    opacity: 1;
  }
  64% {
    top: 0px;
    opacity: 1;
  }
  76% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  80% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
  81% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
  100% {
    top: -325px;
    opacity: 0;
    z-index: -1;
  }
}

@-webkit-keyframes cycle5 {
  0% {
    top: -325px;
    opacity: 0;
  }
  76% {
    top: -325px;
    opacity: 0;
  }
  80% {
    top: 0px;
    opacity: 1;
  }
  84% {
    top: 0px;
    opacity: 1;
  }
  96% {
    top: 0px;
    opacity: 1;
    z-index: 0;
  }
  100% {
    top: 325px;
    opacity: 0;
    z-index: 0;
  }
}
    
   
    #fixed-top {
    position: relative;
    top: -100px;
    right: 0;
    bottom: 0;
    left: 0;
     margin-bottom: -100px;
}
    
    #navBar{
        
        -webkit-transition: all ease-out .5s;
  -moz-transition: all ease-out .5s;
  -o-transition: all ease-out .5s;
  transition: all ease-out .5s;
    }
    
 
    .active-header {
  background-color: rgba(255,255,255,0.8) !important;
        color:black !important;
}
    .mTop{
        
            top: -90px;
    }
    
    .pTm{
        margin: 0 0 20px 0;
    }
    
    
    .section-heading {
    font-size: 36px;
    line-height: 1.2em;
    font-weight: 700;
    color: #333333;
    margin-bottom: 20px;
    padding-top: 20px;
    padding-bottom: 5px;
    position: relative;
}
    
    
    .carousel-item{
        
        height:40rem;
        
    }
    
    .cta-info {
    width: 60%;
    margin: 0 auto;
    text-align: center;
}
    
    .section-heading.light, .light.section-heading-events {
    color: #FF7000;
}
    
    
    .section-heading.light span, .light.section-heading-events span {
    color: #ffffff;
}

.section-heading span, .section-heading-events span {
    color: #FF7000;
}
    
    .color-primary {
    color: #FF7000;
}
    
    .spacer-10 {
    height: 10px;
}
    
    .btn-light:hover {
    background-color: #333333;
    color: #ffffff;
    border-color: transparent;
}
.btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5;
}
.btn:hover {
    color: #212529;
    text-decoration: none;
}
a:hover {
    color: #FF7000;
    text-decoration: none;
}
a:hover {
    color: #0056b3;
    text-decoration: underline;
}
.margin-btn {
    margin-left: 10px;
    margin-right: 10px;
}
.btn-light {
    background-color: #ffffff;
    color: #FF7000;
    border: 1px solid #ffffff;
}
    
    .btn-primary {
    background-color: #FF7000;
    color: #ffffff;
}
    
    .headerContent{
        
            content: '';
    display: block;
    vertical-align: bottom;
    width: 30px;
    height: 1px;
    background: #FF7000;
    margin-bottom: 10px;
    margin-top: 20px;
    }
    
    .content-wrap {
    padding: 80px 0;
}
    
    
    .section-heading.center, .center.section-heading-events {
    text-align: center;
}
.section-heading, .section-heading-events {
    font-size: 36px;
    line-height: 1.2em;
    font-weight: 700;
    color: #333333;
    margin-bottom: 20px;
    padding-top: 20px;
    padding-bottom: 5px;
    position: relative;
}
    
    
    .section-heading.center:after, .center.section-heading-events:after {
    margin-left: auto;
    margin-right: auto;
}
.section-heading:after, .section-heading-events:after {
    content: '';
    display: block;
    vertical-align: bottom;
    width: 30px;
    height: 1px;
    background: #FF7000;
    margin-bottom: 10px;
    margin-top: 20px;
}
    
    .subheading {
    margin-top: -20px;
    margin-bottom: 80px;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    color: #999;
}
    
    
    
    .testimonial-1 {
    position: relative;
    margin-bottom: 30px;
}
    
    
    .testimonial-1 .media {
    float: left;
    margin: 0 30px 30px 0;
    width: 125px;
    height: 125px;
    display: block;
    position: relative;
    background-color: #ffffff;
    border: 5px solid #F8F8F8;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
}
.media {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
}
    
    .testimonial-1 .media img {
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    -webkit-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    transform: scale(1, 1);
    -webkit-transition: 0.4s all linear;
    transition: 0.4s all linear;
    }
    
    .testimonial-1 .title {
    color: #FF7000;
    font-weight: 700;
    font-size: 16px;
}
    
    .testimonial-1 .title:before {
    content: '\2014 \00A0';
}
    
    .testimonial-1 .company {
    margin-bottom: 20px;
}
    
    
    .previous-active-header{
        
        background-color:transparent!important;color:black;
    }
    
    .nav-linker {
	color:#FF7000 !important;
}
    
    .box-gallery {
    position: relative;
    overflow: hidden;
    width: 100%;
    margin-bottom: 10px;
}
    
    .box-gallery a, .box-gallery a img {
    display: block;
    max-width: 100%;
    -webkit-transform: scale(1, 1);
    -ms-transform: scale(1, 1);
    transform: scale(1, 1);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
    -webkit-transition-duration: 250ms;
    transition-duration: 250ms;
    cursor: pointer;
    -webkit-transition: 0.4s all linear;
    transition: 0.4s all linear;
}
    
    
    .box-gallery .project-info {
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
    bottom: 0px;
    background: rgba(0, 0, 0, 0.5);
    padding-top: 50%;
    text-align: center;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    -webkit-transition: all ease .25s;
    transition: all ease .25s;
}
    
    
    .box-gallery .project-info .project-icon {
    position: relative;
    top: -120px;
    opacity: 0;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    -webkit-transition: all ease .25s;
    transition: all ease .25s;
    width: 100%;
    color: #FF7000;
    }
    
</style>
<nav class="navbar navbar-expand-md navbar-dark fixed-top previous-active-header" style="" id="navBar">
        <a class="navbar-brand" href="#">Carousel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Our Programmes</a>
                </li>
                
                 <li class="nav-item">
                    <a class="nav-link" href="#">Our Projects</a>
                </li>
           
                <li class="nav-item">
                    <a class="nav-link " href="#">Our Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Join Our Cause</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Blog Post</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link " href="#">Become A Volunteer</a>
                </li>
                
                
            </ul>
            
        </div>
    </nav>
    
    <main id="fixed-top">
<section >
        
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/IMG-20190119-WA0008.jpg" style=" height:40rem;object-fit:cover;" alt="First slide">
       <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/IMG-20180809-WA0019.jpg" style=" height:40rem;object-fit:cover;" alt="Second slide">
       <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/IMG-20190223-WA0051.jpg"  style=" height:40rem;object-fit:cover;" alt="Third slide">
       <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="images/IMG-20180730-WA0130.jpg"  style=" height:40rem;object-fit:cover;" alt="Third slide">
       <div class="carousel-caption d-none d-md-block">
    <h5>...</h5>
    <p>...</p>
  </div>
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
   
  
        
    </section>



<section>
    <div class="row paralax mTop" style="

    /* Set a specific height */
    min-height: 500px;
    background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('images/parallax4.jpg');

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
                   position:relative; ">

        <div class="centered">

            <div class="mx-auto">






                <h6 class="text-uppercase h1">Become a Volunteer</h6>




                <blockquote class="blockquote">
                    <p class="mb-0" style="color:white; font-size:30px;">"Part of being a person is about helping others."</p>
                    <footer class="blockquote-footer" style="color:white;">Regis Murayi <cite title="Source Title">Source Title</cite></footer>
                </blockquote>


                <form action="#" id="newsletter-form">
                    <div class="input-group mb-3 mx-0">
                        <input type="email" placeholder="Your Email Address" aria-label="Your Email Address" class="form-control  border-secondary border-right-0">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary border-left-0"> <i class="fa fa-paper-plane text-lg "></i></button>
                        </div>
                    </div>
                </form>


                <div class="col-md-6"></div>
            </div>



        </div>


        <div class="img-overlay" style="padding-right: 0px;
    padding-left: 0px;">




        </div>
    </div>

</section>













<section>
    <div class="row paralax mTop" style="

    /* Set a specific height */
    min-height: 500px;
    background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('images/bg-pattern.jpg');

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
                   position:relative; ">

        <div class="centered">

            <div class="mx-auto">






                <h6 class="text-uppercase h1">Become a Volunteer</h6>



                <div class="row" style="flex-wrap: nowrap;!important">
                    
                    <div class="col-md-3">
                        
                        <a href=""><img src="http://fakeimg.pl/365x365/" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3">
                         <a href=""><img src="http://fakeimg.pl/365x365/" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3">
                         <a href=""><img src="http://fakeimg.pl/365x365/" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3">
                         <a href=""><img src="http://fakeimg.pl/365x365/" class="img-responsive"></a>
                    </div>
                </div>
                
                
                
                <div class="row mt-3" style="flex-wrap: nowrap;!important">
                    
                    <div class="col-md-3">
                         <a href=""><img src="http://fakeimg.pl/365x365/" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3">
                         <a href=""><img src="http://fakeimg.pl/365x365/" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3">
                         <a href=""><img src="http://fakeimg.pl/365x365/" class="img-responsive"></a>
                    </div>
                    <div class="col-md-3">
                         <a href=""><img src="http://fakeimg.pl/365x365/" class="img-responsive"></a>
                    </div>
                </div>
                

                
            </div>



        </div>


        <div class="img-overlay" style="padding-right: 0px;
    padding-left: 0px;">




        </div>
    </div>

</section>



<section class="mb-5">
    <div class="container">
        <div class="row">
            
            <div class="mx-auto mb-5 pb-3"style="width:300px;">
                
                <img src="images/Capture.PNG" style="margin:0 auto;" alt="">
            </div>
            
             
            
            
        </div>
        
        <div class="row my-5 py-5">
            
         <div class="col-md-6"><img src="images/IMG_9871.jpg" style="width:600px;height:600px;object-fit: cover;" alt="" ></div>
         <div class="col-md-6">
          
          <h2 style="color:orange;" class="section-heading">Who we are?</h2>
           
           <p class="pTm">Talents on Go is a community based organization established in 2018 to be a source of inspiration to the
                youth in Kenya. The premise on which the organization is founded was to seek and contribute towards
                    activities which aim to achieve its strategic objectives of helping the most affected in the community.</p>
           <p class="pTm">We believe by developing, mentoring and empowering the communities through teaching and facilitating
                entrepreneurial and life skills, mentorship in creativity, innovation, giving role models and support as a source
                    of sustainable livelihood. We also hope to create employment by harnessing the potential that exists in the
                        youths channeling them to productive activities, new opportunities and a better diverse community.</p>
                        
                        <p class="pTm">Talents on Go is upbeat about change and that change begins now</p>
                        
                        
                        <a href="#" class="btn btn-primary py-3">MEET OUR TEAMS</a>
           </div>
            
            
        </div>
        
       
        
    </div>
    </section>
    <section>
    <div class="row paralax " style="

    /* Set a specific height */
    min-height: 500px;
    background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('images/slum.jpg');

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
                   position:relative; ">

        <div class="centered">

            <div class="mx-auto">






                <h6 class="text-uppercase h1"><span style="color: #FF7000;">Our </span>vision</h6>
                
<p>To transform communities by inspiring people to create opportunities for themselves and others.</p>

<h6 class="text-uppercase h1">Our<span style="color: #FF7000;"> Mission</span></h6>
<p>To empower the community for a better future</p>

 </div>
</div>
               
                
           



        


        <div class="img-overlay" style="padding-right: 0px;
    padding-left: 0px;">




        </div>
    </div>

</section>
    
    




<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Our <span>Volunteers</span> Says
						</h2>
						<p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="testimonial-1">
		              		<div class="media">
	              				<img src="images/volunteer-1.jpg" alt="" class="img-fluid">
	              			</div>
			              	<div class="body">
			                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
			                	<div class="title">John Doel</div>
			                	<div class="company">Businessman</div>
			              	</div>
			            </div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="testimonial-1">
		              		<div class="media">
	              				<img src="images/volunteer-2.jpg" alt="" class="img-fluid">
	              			</div>
			              	<div class="body">
			                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
			                	<div class="title">Raisa Doel</div>
			                	<div class="company">House Keeper</div>
			              	</div>
			            </div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="testimonial-1">
		              		<div class="media">
	              				<img src="images/volunteer-3.jpg" alt="" class="img-fluid">
	              			</div>
			              	<div class="body">
			                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
			                	<div class="title">Josh Doel</div>
			                	<div class="company">Contractor</div>
			              	</div>
			            </div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="testimonial-1">
		              		<div class="media">
	              				<img src="images/volunteer-4.jpg" alt="" class="img-fluid">
	              			</div>
			              	<div class="body">
			                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
			                	<div class="title">Sasha Doel</div>
			                	<div class="company">Freelance</div>
			              	</div>
			            </div>
					</div>

				</div>
			</div>
		</div>








<div class="content-wrap">
			<div class="container">
				<div class="row mb-5 pb-5">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Our <span>Gallery</span>
						</h2>
						<p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
					</div>

					<div class="row popup-gallery gutter-5">
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/bg-events.jpg" title="Gallery #1">
									<img src="images/bg-events.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/bg-events.jpg" title="Gallery #2">
									<img src="images/bg-events.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/bg-events.jpg" title="Gallery #3">
									<img src="images/bg-events.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/bg-events.jpg" title="Gallery #4">
									<img src="images/bg-events.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/bg-events.jpg" title="Gallery #5">
									<img src="images/bg-events.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/bg-events.jpg" title="Gallery #6">
									<img src="images/bg-events.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						
					</div>

				</div>
			</div>
		</div>



<section>
    <div class="row paralax mTop" style="

    /* Set a specific height */
    min-height: 500px;
    background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('images/IMG_9871.JPG');

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
                   position:relative; ">

        <div class="centered">

            <div class="mx-auto">






                <h6 class="text-uppercase h1">Become a Volunteer</h6>




                <blockquote class="blockquote">
                    <p class="mb-0" style="color:white; font-size:30px;">"Part of being a person is about helping others."</p>
                    <footer class="blockquote-footer" style="color:white;">Regis Murayi <cite title="Source Title">Source Title</cite></footer>
                </blockquote>


                <form action="vendor/send.php" id="newsletter-form" method="post">
                    <div class="input-group mb-3 mx-0">
                        <input type="email" placeholder="Your Email Address" aria-label="Your Email Address" class="form-control  border-secondary border-right-0" name="volunteer">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary border-left-0" name="mail"> <i class="fa fa-paper-plane text-lg "></i></button>
                        </div>
                    </div>
                </form>


                <div class="col-md-6"></div>
            </div>



        </div>


        <div class="img-overlay" style="padding-right: 0px;
    padding-left: 0px;">




        </div>
    </div>

</section>








<section id="footer" class="section ">
    <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Our Programmes</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Our Projects</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Our Partners</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6">
                <h5>Quick links</h5>
                <ul class="list-unstyled quick-links">
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Join Our Cause</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Blog </a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                    <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Fund our course</a></li>
                    <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                <ul class="list-unstyled list-inline social text-center">
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>

                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
            <hr>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
                <p class="h6">&amp;copy All right Reversed.Talents On Go</p>
            </div>
            <hr>
        </div>
    </div>







</section>

</main>

<style>
    .section {
        padding: 60px 0;
    }

    .section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #footer {
        background: maroon !important;
        margin-top: -90px;
    }

    #footer h5 {
        padding-left: 10px;
        border-left: 3px solid #eeeeee;
        padding-bottom: 6px;
        margin-bottom: 20px;
        color: #ffffff;
    }

    #footer a {
        color: #ffffff;
        text-decoration: none !important;
        background-color: transparent;
        -webkit-text-decoration-skip: objects;
    }

    #footer ul.social li {
        padding: 3px 0;
    }

    #footer ul.social li a i {
        margin-right: 5px;
        font-size: 25px;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }

    #footer ul.social li:hover a i {
        font-size: 30px;
        margin-top: -10px;
    }

    #footer ul.social li a,
    #footer ul.quick-links li a {
        color: #ffffff;
    }

    #footer ul.social li a:hover {
        color: #eeeeee;
    }

    #footer ul.quick-links li {
        padding: 3px 0;
        -webkit-transition: .5s all ease;
        -moz-transition: .5s all ease;
        transition: .5s all ease;
    }

    #footer ul.quick-links li:hover {
        padding: 3px 0;
        margin-left: 5px;
        font-weight: 700;
    }

    #footer ul.quick-links li a i {
        margin-right: 5px;
    }

    #footer ul.quick-links li:hover a i {
        font-weight: 700;
    }

    @media (max-width:767px) {
        #footer h5 {
            padding-left: 0;
            border-left: transparent;
            padding-bottom: 0px;
            margin-bottom: 10px;
        }
    }




    .header {
        text-align: center;
        padding: 32px;
    }

    .row1 {
        display: -ms-flexbox;
        /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap;
        /* IE10 */
        flex-wrap: wrap;
        padding: 0 4px;
    }

    /* Create four equal columns that sits next to each other */
    .column1 {
        -ms-flex: 25%;
        /* IE10 */
        flex: 25%;
        max-width: 25%;
        padding: 0 4px;
    }

    .column1 img {
        margin-top: 8px;
        vertical-align: middle;
    }

    /* Responsive layout - makes a two column-layout instead of four columns */
    @media screen and (max-width: 800px) {
        .column1 {
            -ms-flex: 50%;
            flex: 50%;
            max-width: 50%;
        }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
        .column1 {
            -ms-flex: 100%;
            flex: 100%;
            max-width: 100%;
        }
    }
</style>
<?php


include("includes/footer.php");

?>



<script>
    
//    window.onscroll = function() {scrollFunction()};
//
//function scrollFunction() {
//  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//    document.getElementById("navBar").style.backgroundColor = "white";
//       document.getElementById("navBar").style.color = "black";
//      alert('true')
//  } else {
//    document.getElementById("navBar").style.backgroundColor = "transparent!important";
//       document.getElementById("navBar").style.color = "black";
//      alert('not true')
//  }
//}
//    if(window.onscroll){
//        
//    
//    
//    alert('loaded'+document.body.scrollTop)
//    }
    
   
        $(document).ready(function($){

            var top = jQuery(document).scrollTop();
              
            console.log('Event Fired');
            
            if(top > 50) {
            
            			$(".navbar").addClass("active-header");
//            
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           
//            alert("true dat "+$(window).scrollTop())
        }
            
          let navbar= $("#navBar")

//         alert("ready "+top)
           $("#navBar").addClass("active-header"); 
            
            $("body").scroll(function () {
		top = jQuery("body").scrollTop();
                
		          console.log(top);
		if ( top > 100 ) {
			$("#navBar").addClass("active-header");
           $("#navBar").removeClass('previous-active-header')
            let styles={color:"#FF7000 !important"}
            $(".nav-item").addClass('.nav-linker')
		}else {
			navbar.removeClass('active-header'); 
			$("#navBar").addClass("previous-active-header");
            $(".nav-item").RemoveClass('.nav-linker')
		}
		

	});
    

            
        });

        
        
      
</script>
