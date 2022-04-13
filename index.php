<?php

include("includes/header.php");

?>

<body>
  <style>
    button#dropdownMenuButton {
      border: none;
      background-color: transparent;

    }

    .bg-light {

      background-color: #f8f9fa !important;
    }

    body {

      font-family: 'League Spartan', sans-serif;
    }


    .shadow-blue {
      box-shadow: 10px 10px #ffc006, 20px 20px;
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

    .hero-image {
      background-image: linear-gradient(#236273b8, #031b21), url('images/slum.jpg');
      height: 55rem;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      background-attachment: fixed;
    }

    .hero-text {
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }

    .hero-text .hero-btn {
      order: none;
      outline: 0;
      display: inline-block;
      padding: 1rem 8rem;
      border-radius: 5px;
      color: black;
      background-color: #ffc006;
      text-align: center;
      cursor: pointer;
    }

    .hero-text .hero-btn:hover {
      background-color: #555;
      color: white;
    }

    .bg-2 {


      background-color: #36343a;
      background-image: url("data:image/svg+xml,%3Csvg width='24' height='24' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Ctitle%3Ehoundstooth%3C/title%3E%3Cg fill='%2309080d' fill-opacity='0.4' fill-rule='evenodd'%3E%3Cpath d='M0 18h6l6-6v6h6l-6 6H0M24 18v6h-6M24 0l-6 6h-6l6-6M12 0v6L0 18v-6l6-6H0V0'/%3E%3C/g%3E%3C/svg%3E");
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .border-primary.text-left:after {
      -webkit-transform: translateX(0%);
      transform: translateX(0%);
    }

    .border-primary:after {
      position: absolute;
      content: "";
      bottom: 0;
      width: 80px;
      height: 3px;
      background: #ff6922;
    }
  </style>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Spartan&display=swap");

    * {
      margin: 0;
      padding: 0;
    }

    .contact-section {
      background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2044837-jpeg.jpg") center center no-repeat;
      background-size: cover;

      display: grid;
      align-items: center;
      justify-items: center;
      font-size: 12pt;

      color: #2A293E;
    }

    .contact-us {
      background: #f8f4e5;
      padding: 50px 100px;
      border-top: 10px solid #f45702;
    }

    label,
    input,
    textarea {
      display: block;
      width: 100%;
      font-size: 12pt;
      line-height: 24pt;
      font-family: "Spartan";
    }

    input {
      margin-bottom: 24pt;
    }

    .contact-us h3 {
      font-weight: normal;
      font-size: 10pt;
      line-height: 24pt;
      font-style: italic;
      margin: 0 0 0.5em 0;
    }

    .contact-us span {
      font-size: 8pt;
    }

    .contact-us em {
      color: #f45702;
      font-weight: bold;
    }

    input,
    textarea {
      border: none;
      border: 1px solid rgba(0, 0, 0, 0.1);
      border-radius: 2px;
      background: #f8f4e5;
      padding-left: 5px;
      outline: none;
    }

    input:focus,
    textarea:focus {
      border: 1px solid #6bd4b1;
    }

    textarea {
      resize: none;
    }

    button {
      display: block;
      float: right;
      line-height: 24pt;
      padding: 0 20px;
      border: none;
      background: #f45702;
      color: white;
      letter-spacing: 2px;
      transition: 0.2s all ease-in-out;
      border-bottom: 2px solid transparent;
      outline: none;
    }

    button:hover {
      background: inherit;
      color: #f45702;
      border-bottom: 2px solid #f45702;
    }

    ::selection {
      background: #ffc7b8;
    }

    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    textarea:-webkit-autofill,
    textarea:-webkit-autofill:hover,
    textarea:-webkit-autofill:focus {
      border: 1px solid #6bd4b1;
      -webkit-text-fill-color: #2A293E;
      -webkit-box-shadow: 0 0 0px 1000px #f8f4e5 inset;
      transition: background-color 5000s ease-in-out 0s;
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
      font-family: 'League Spartan', sans-serif;
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


    html,
    body {
      color: #0e3e4a;
      overflow-x: hidden;
      height: 100%;
      padding-bottom: 0px;

      ;
      scroll-behavior: smooth;
    }





    #fixed-top {
      position: relative;
      top: -100px;
      right: 0;
      bottom: 0;
      left: 0;
      margin-bottom: -100px;
    }

    #navBar {

      -webkit-transition: all ease-out .5s;
      -moz-transition: all ease-out .5s;
      -o-transition: all ease-out .5s;
      transition: all ease-out .5s;
    }


    .active-header {
      background-color: #236273 !important;
      color: black !important;
    }

    .mTop {

      top: -90px;
    }

    .pTm {
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


    .carousel-item {

      height: 40rem;

    }

    .cta-info {
      width: 60%;
      margin: 0 auto;
      text-align: center;
    }

    .section-heading.light,
    .light.section-heading-events {
      color: #FF7000;
    }


    .section-heading.light span,
    .light.section-heading-events span {
      color: #ffffff;
    }

    .section-heading span,
    .section-heading-events span {
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
      border-color: #ff7000;
    }



    .headerContent {

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


    .section-heading.center,
    .center.section-heading-events {
      text-align: center;
    }

    .section-heading,
    .section-heading-events {
      font-size: 36px;
      line-height: 1.2em;
      font-weight: 700;
      color: #333333;
      margin-bottom: 20px;
      padding-top: 20px;
      padding-bottom: 5px;
      position: relative;
    }


    .section-heading.center:after,
    .center.section-heading-events:after {
      margin-left: auto;
      margin-right: auto;
    }

    .section-heading:after,
    .section-heading-events:after {
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


    .previous-active-header {

      background-color: transparent !important;
      color: black;
    }

    .nav-linker {
      color: #FF7000 !important;
    }

    .box-gallery {
      position: relative;
      overflow: hidden;
      width: 100%;
      margin-bottom: 10px;
    }

    .box-gallery a,
    .box-gallery a img {
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
  <style>
    .icon-box {
      padding: 40px;
      border-radius: 24px;
      background: #ecf2f5;
      text-align: center;
      transition: all .35s;
      min-height: 20rem;
    }

    .icon-box:hover,
    .icon-box.active {
      border: 0;
      background: -moz-linear-gradient(180deg, rgba(255, 90, 0, 1) 0%, rgba(255, 54, 0, 1) 100%);
      background: -webkit-gradient(linear, left top, right top, color-stop(0%, rgba(255, 90, 0, 1)), color-stop(100%, rgba(1255, 54, 0, 1)));
      background: -webkit-linear-gradient(180deg, rgba(255, 90, 0, 1) 0%, rgba(255, 54, 0, 1) 100%);
      background: -o-linear-gradient(180deg, rgba(255, 90, 0, 1) 0%, rgba(255, 54, 0, 1) 100%);
      background: -ms-linear-gradient(180deg, rgba(255, 90, 0, 1) 0%, rgba(255, 54, 0, 1) 100%);
      background: linear-gradient(270deg, #30869d 0%, #206070 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff5a00', endColorstr='#ff3600', GradientType=1);
      color: #fff;
    }

    .icon-box .entry-title {
      margin-top: 28px;
      font-size: 24px;
      font-weight: 600;
      color: #262626;
    }

    .block-team-member-1 {
      padding: 30px;
      border: 1px solid #e9ecef;
    }

    .block-team-member-1 figure img {
      width: 120px;
      height: 120px;
      object-fit: cover;
    }

    .border-primary.text-left:after {
      -webkit-transform: translateX(0%);
      transform: translateX(0%);
    }

    .text-left.pb-1.border-primary.border-success.mb-4 {
      position: relative;
    }
  </style>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top previous-active-header" id="navBar">
    <a class="navbar-brand" href="#"><img src="images/cropped-PAMOJA-HOPE-LOGO....png" alt="pamoja forum logo" style="width: 150px;height: 70px;"></a>
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
    <section class="hero-image">




      <div class="hero-text w-100 mt-5">
        <h1>We are Pamoja Forum - a philanthropic organizations in Kenya</h1>
        <p class="px-lg-5">Our Mission is to establish ourselves as a knowledge and resource hub for all things related to strategic
          philanthropy in the region </p>
        <p>by supporting the sector in its various activities, initiatives and endeavours.</p>

        <a class="my-3 btn hero-btn">Learn More </a>
      </div>


    </section>





    <section class="bg-white  mb-5 p-5">


    </section>

    <div class="site-section mb-5" id="about">
      <div class="container">
        <div class="row mb-5">

          <div class="col-md-5 ml-auto mb-5 order-md-2 aos-init aos-animate rounded" data-aos="fade" style="

   
    min-height: 700px;
    background-image:url('images//Rhône.png');

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
                   position:relative; ">
            <!-- <img src="images/Rhône.png" alt="Image" class="img-fluid rounded"> -->
          </div>
          <div class="col-md-6 order-md-1 aos-init aos-animate" data-aos="fade">
            <div class="text-left pb-1 border-primary border-success mb-4">
              <h2 class="">Who we are</h2>
            </div>
            <p>Pamoja Forum- is non-for-profit membership-based platform of philanthropic organizations in Kenya, coming together under the goal 17 of UN sustainable goals, which is the key ingredient which draws all the Goals together and is essential to achieving them: Partnership.
              The Forum provides opportunities for peers to come together to discuss matters of mutual interest, learn from each other and share resources; to network, participate in a facilitated discussion, share ideas and updates, & jointly identify solutions.
              By fostering a global sense of togetherness we can ensure everyone is treated equally, invest in developing countries, reduce trade barriers, offer fair access to technology and innovation and celebrate the power of partnership
            </p>

            <div class="text-left pb-1 border-primary border-success mb-4">
              <h2 class="">Our mission</h2>
            </div>
            <p class="mb-5">
              To establish ourselves as a knowledge and resource hub for all things related to strategic philanthropy in the region by supporting the sector in its various activities, initiatives and endeavours
            </p>

            <div class="text-left pb-1 border-primary border-success mb-4">
              <h2 class=""> Our Vision</h2>
            </div>
            <p class="mb-5">
              To play a pivotal role in facilitating and spearheading initiatives around advocacy for the sector, whether on behalf of our members or in service thereof.
            </p>

          </div>

        </div>

      </div>
    </div>











    <section class="container" style=" margin-top:6rem;">
      <div class="row  ">

        <div class="col-5 rounded paralax col-md-5 mr-auto mb-5 " style="

   
    min-height: 700px;
    background-image:url('images/Oreti.png');

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
                   position:relative; "></div>




        <div class="col-6">

          <div class="text-left pb-1 border-primary border-success mb-4">
            <h2 class="">What we do</h2>
          </div>
          <p>Pamoja Forum serves as a hub for networking, knowledge sharing and capacity
            building for its members and partners. We aim to foster dialogue and collaboration
            opportunities amongst our network in order to bolster the capacity and efficacy of
            strategic philanthropic in Kenya.
            We believe that progress happens by bringing together people from all walks of life
            who have the drive and the influence to make positive change.
          </p>

          <div class="text-left pb-1 border-primary border-success mb-4">
            <h2 class="">Why we do it</h2>
          </div>
          <p class="mb-5">

            The establishment of Pamoja Forum came about as a response to the rapid increase in the
            number of philanthropic foundations in the region and from the need to create an
            infrastructure for this emerging philanthropic sector that supports a more strategic and
            effective culture of giving. </p>

          <div class="text-left pb-1 border-primary border-success mb-4">
            <h2 class=""> What makes us unique?</h2>
          </div>
          <p class="mb-5">
            We actively invite perspectives from all interested parties. We believe that the
            challenges our communities are facing can only be solved through engagement with all
            of us coming together on a common cause.
          </p>

        </div>





      </div>




      </div>

    </section>

    <section class="container my-5">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="text-black text-uppercase section-title">Our Services</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
          <div class="icon-box ">
            <figure class="d-flex justify-content-center">
              <img src="images/people-carry-box-solid.svg" style="width:3rem">
            </figure>
            <header class="entry-header">
              <h3 class="entry-title">Capacity Building</h3>
            </header>
            <div class="entry-content">
              <p>Pamoja Forum serves as a hub for capacity building for its members and partners. </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <figure class="d-flex justify-content-center">
              <img src="images/people-group-solid.svg" style="width:3rem">
            </figure>
            <header class="entry-header">
              <h3 class="entry-title">Networking</h3>
            </header>
            <div class="entry-content">
              <p>Pamoja Forum serves as a hub for networking for its members and partners. </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <figure class="d-flex justify-content-center">
              <img src="images/handshake-solid.svg" style="width:3rem" alt="">
            </figure>
            <header class="entry-header">
              <h3 class="entry-title">Knowledge Dissemination</h3>
            </header>
            <div class="entry-content">
              <p>We aim to foster dialogue and collaboration opportunities amongst our network in order to bolster the capacity and efficacy of strategic philanthropic in Kenya. </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="partners bg-white py-5  ">
      <h1 class="text-center mb-5">Our Members</h1>
      <div class="container py-5">

        <div class=" row justify-content-center">

          <div class="co1"><img src="images/WhatsApp Image 2022-04-10 at 5.21.20 PM (1).jpeg" alt="" style="    width: 12rem;"></div>
          <div class="co1 px-3">
            <img src="images/WhatsApp Image 2022-04-10 at 5.21.20 PM (2).jpeg" alt="" style="width: 12rem;">
          </div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.20 PM (3).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.20 PM (4).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.20 PM (5).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.20 PM (6).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.20 PM (7).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.20 PM (8).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.20 PM (9).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.20 PM (10).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.21 PM (1).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.21 PM (2).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.21 PM (3).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.21 PM (4).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.21 PM (5).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.21 PM (6).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.21 PM (7).jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.22.45 PM.jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.20 PM.jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.21.21 PM.jpeg" style="width: 12rem;" alt=""></div>
          <div class="col px-3 mt-5"><img src="images/WhatsApp Image 2022-04-10 at 5.22.34 PM.jpeg" style="width: 12rem;" alt=""></div>

        </div>
      </div>

    </section>
    <div class="site-section border-top">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="mb-5 text-black ">Become A Member</h2>
            <p class="mb-0"><a href="#request" class="btn btn-primary py-3 px-5 text-white text-uppercase">Download Whats Needed</a></p>
          </div>
        </div>
      </div>
    </div>
    <section class="partners bg-white py-5  ">
      <h1 class="text-center mb-5">Our Partners</h1>
      <div class="container py-5">

        <div class=" row justify-content-center">

          <div class="co1"><img src="images/millenial expedition.jpeg" alt="" style="    width: 12rem;"></div>
          <div class="co1 px-3"><img src="images/regalo.jpeg" alt="" style="    width: 12rem;"></div>
          <div class="co1 px-3"><img src="images/sweetbird.png" alt="" style="    width: 12rem;"></div>
          <div class="co1 px-3"><img src="images/wowzi.jpg" alt="" style="    width: 12rem;"></div>
        </div>
      </div>

    </section>

    <section class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7 text-center">
          <h2 class="text-black text-uppercase section-title">Our Leadership</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut corporis, eius, eos consectetur consequuntur sit. Aut, perspiciatis, reprehenderit.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 aos-init aos-animate" data-aos="fade-up">
          <div class="block-team-member-1 text-center rounded">
            <figure>
              <img src="images/team/WhatsApp Image 2022-04-13 at 2.37.56 PM.jpeg" alt="Image" class="img-fluid rounded-circle" data-pagespeed-url-hash="2612655152" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </figure>
            <h3 class="font-size-20 text-white">Abass Ahmed</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">IT Manager</span>
            <p class="px-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, repellat. At, soluta. Repellendus vero, consequuntur!</p>
            <div class="block-social-1">
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="block-team-member-1 text-center rounded">
            <figure>
              <img src="images/team/WhatsApp Image 2022-04-13 at 2.37.56 PM (1).jpeg" alt="Image" class="img-fluid rounded-circle" data-pagespeed-url-hash="2907155073" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </figure>
            <h3 class="font-size-20 text-white">Leila Ali </h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Media and Communications</span>
            <p class="px-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil quia veritatis, nam quam obcaecati fuga.</p>
            <div class="block-social-1">
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="block-team-member-1 text-center rounded">
            <figure>
              <img src="images/team/WhatsApp Image 2022-04-13 at 2.37.56 PM (3).jpeg" alt="Image" class="img-fluid rounded-circle" data-pagespeed-url-hash="3201654994" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </figure>
            <h3 class="font-size-20 text-white">Daniel Otto</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Project coordinator</span>
            <p class="px-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quidem, laudantium, illum minus numquam voluptas?</p>
            <div class="block-social-1">
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="block-team-member-1 text-center rounded">
            <figure>
              <img src="images/team/WhatsApp Image 2022-04-13 at 2.37.56 PM (4).jpeg" alt="Image" class="img-fluid rounded-circle" data-pagespeed-url-hash="3201654994" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </figure>
            <h3 class="font-size-20 text-white">Amina Ahmed</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Human resource manager</span>
            <p class="px-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quidem, laudantium, illum minus numquam voluptas?</p>
            <div class="block-social-1">
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="block-team-member-1 text-center rounded">
            <figure>
              <img src="images/team/WhatsApp Image 2022-04-13 at 2.37.56 PM (2).jpeg" alt="Image" class="img-fluid rounded-circle" data-pagespeed-url-hash="3201654994" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </figure>
            <h3 class="font-size-20 text-white">Yasmin Hussein</h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">President</span>
            <p class="px-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quidem, laudantium, illum minus numquam voluptas?</p>
            <div class="block-social-1">
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="block-team-member-1 text-center rounded">
            <figure>
              <img src="images/team/WhatsApp Image 2022-04-13 at 2.37.56 PM (5).jpeg" alt="Image" class="img-fluid rounded-circle" data-pagespeed-url-hash="3201654994" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
            </figure>
            <h3 class="font-size-20 text-white">Ifrah Hassan
            </h3>
            <span class="d-block font-gray-5 letter-spacing-1 text-uppercase font-size-12 mb-3">Secretary</span>
            <p class="px-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas quidem, laudantium, illum minus numquam voluptas?</p>
            <div class="block-social-1">
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-facebook"></span></a>
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-twitter"></span></a>
              <a href="#" class="btn border-w-2 rounded primary-primary-outline--hover"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>



    <section class="mt-5">
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
                  <button type="submit" class="btn btn-warning border-left-0" name="mail"> <i class="fa fa-paper-plane text-lg "></i></button>
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
    </section>


    <section>
      <div class="row paralax " style="

    margin-top:-3rem;
    min-height: 700px;
    background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('images/slum.jpg');

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover; 
                   position:relative; ">

        <div class="centered">

          <div class="mx-auto">






            <h6 class="text-uppercase h1"><span class="text-warning">Our </span>vision</h6>

            <p>To play a pivotal role in facilitating and spearheading initiatives around advocacy for the sector, whether on behalf of our members or in service thereof..</p>

            <h6 class="text-uppercase h1">Our<span class="text-warning"> Mission</span></h6>
            <p>To establish ourselves as a knowledge and resource hub for all things related to strategic philanthropy in the region by supporting the sector in its various activities, initiatives and endeavours</p>

          </div>
        </div>









        <div class="img-overlay" style="padding-right: 0px;
    padding-left: 0px;">




        </div>
      </div>

    </section>




    <section>

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
    </section>








    <section class="contact-section" style="margin-top:-5.7rem">

      <div class="contact-us">
        <form action="#">
          <label for="customerName">NAME <em>&#x2a;</em></label><input id="customerName" name="customerName" required="" type="text" /><label for="customerEmail">EMAIL <em>&#x2a;</em></label><input id="customerEmail" name="customerEmail" required="" type="email" /><label for="customerPhone">PHONE</label><input id="customerPhone" name="customerPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" type="tel" /><label for="customerNote">YOUR MESSAGE <em>&#x2a;</em></label><textarea id="customerNote" name="customerNote" required="" rows="4"></textarea>
          <h3>
            Please provide all the information about your issue you can.
          </h3>
          <label for="spamProtection">SPAM PROTECTION <em>&#x2a; </em><span>&nbsp;&nbsp;&nbsp;&nbsp;What day comes before July 11th?</span></label><input id="spamProtection" name="spamProtection" type="text" /><button id="customerOrder">SUBMIT</button>
        </form>
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
      background: #0e3e4a !important;
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
    $(document).ready(function($) {

      var top = jQuery(document).scrollTop();



      if (top > 50) {

        $(".navbar").addClass("active-header");
        //            
      } else {

      }

      let navbar = $("#navBar")

      //         alert("ready "+top)
      $("#navBar").addClass("active-header");

      $("body").scroll(function() {
        top = jQuery("body").scrollTop();


        if (top > 100) {
          $("#navBar").addClass("active-header");
          $("#navBar").removeClass('previous-active-header')
          let styles = {
            color: "#FF7000 !important"
          }
          $(".nav-item").addClass('.nav-linker')
        } else {
          navbar.removeClass('active-header');
          $("#navBar").addClass("previous-active-header");
          $(".nav-item").removeClass('.nav-linker')
        }


      });



    });
  </script>