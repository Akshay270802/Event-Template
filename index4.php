<?php
if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password );

    if(!$con)
    {
        die("connection to this database failed due to" .
        mysqli_connect_error());
    }
    /*else{
        echo"Success connection";
    }*/
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $sql = "INSERT INTO `test`.`table6` (`name`, `email`, `subject`, `message`) 
    VALUES ('$name', '$email', '$subject', '$message');";
    

    if($con->query($sql) == true){
        //echo "Successfully Inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Events And Ideas</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/icons/line-icons.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="index.html" class="navbar-brand"><img src="" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item active">
                <a class="nav-link" href="#header-wrap">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#schedules">
                  schedules
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  Speakers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallery">
                  Gallery
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sponsors">
                  Sponsors
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#google-map-area">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9 col-sm-12">
              <div class="contents text-center">
                <div class="icon">
                  <i class="lni-mic"></i>
                </div>
                <p class="banner-info"></p>
                <h2 class="head-title">EVENT MANAGER</h2>
                <p class="banner-desc">
                  Event management includes a variety of functions for executing large-scale events, which might include conferences, concerts, festivals. </p>
                <div class="banner-btn">
                  <a href="#" class="btn btn-common">Tie Up Your Shoes and get Rollin'!</a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Count Bar Start -->
    <section id="count">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-10">
            <div class="count-wrapper text-center">
              <div class="time-countdown wow fadeInUp" data-wow-delay="0.2s">
                <div id="clock" class="time-count"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Count Bar End -->

    <!-- About Section Start -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="img-thumb">
              <img class="img-fluid" src="assets/img/about/img1.png" alt="">
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="about-content">
              <div>
                <div class="about-text">  
                  <h2>BASIC ROLE</h2>
                  <p>Event management firms are frequently hired to plan and execute large-scale company meetings and special events. 
                    While weddings and concerts are common events for an event management professional, sporting events, reunions, 
                    and large parties are also occasions that can benefit from event management.</p>
                </div>
                <ul class="stylish-list mb-3">
                  <li><i class="lni-check-mark-circle"></i>Networking Sessions</li>
                  <li><i class="lni-check-mark-circle"></i>Meet New Professional Faces</li>
                  <li><i class="lni-check-mark-circle"></i>Get Inspired by Amazing Speakers</li>
                  <li><i class="lni-check-mark-circle"></i>Raising performance standards</li>
                  <li><i class="lni-check-mark-circle"></i>Upskilling volunteers</li>
                </ul>
                <a class="btn btn-common" href="#">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Video Section Start -->
    <div class="ready-to-play">
      <video id="bgvid" class="stop" loop>
        <source src="assets/video/event.webm" type="video/mp4">
      </video>
      <div id="polina" class="video-text">
        <div class="tb-t">
            <div class="tb-c">
              <div class="polina"><button><i class='lni-play'></i></button></div>
            </div>
        </div>
      </div>
    </div>
    <!-- Video Section End -->

    <!-- Information Bar Start -->
    <section id="information-bar">
      <div class="container">
        <div class="row inforation-wrapper">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <ul>
              <li>
                <i class="lni-map-marker"></i>
              </li>
              <li><span><b>Location</b> NHITM CAMPUS</span></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <ul>
              <li>
                <i class="lni-mic"></i>
              </li>
              <li><span><b>Speakers</b> 15 Professionals</span></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <ul>
              <li>
                <i class="lni-user"></i>
              </li>
              <li><span><b>Seats</b> 100 People</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Information Bar End -->

     <!-- intro Section Start -->
    <section id="intro" class="intro section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Previously Organized In NHITM</h2>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Events planning and management is a complex, detail oriented business. 
                ???To ensure you are planning an event successfully, it???s imperative that you keep your eye on the big picture???.</p>
            </div>
          </div>
        </div>
        <div class="row intro-wrapper">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="single-intro-text mb-70">
               <i class="lni-microphone"></i>
               <h3>EVENT 1</h3>
               <p>
                  Prev event details
               </p>
               <span class="count-number">01</span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="single-intro-text">
               <i class="lni-users"></i>
               <h3 class="ts-title">EVENT 2</h3>
               <p>
                  Prev event details
               </p>
               <span class="count-number">02</span>
            </div>
            <div class="border-shap left"></div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="single-intro-text mb-70">
               <i class="lni-bullhorn"></i>
               <h3>EVENT 3</h3>
               <p>
                  Prev event details
               </p>
               <span class="count-number">03</span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="single-intro-text mb-70">
               <i class="lni-heart"></i>
               <h3>EVENT 4</h3>
               <p>
                  Prev event details
               </p>
               <span class="count-number">04</span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="single-intro-text mb-70">
               <i class="lni-cup"></i>
               <h3>EVENT 5</h3>
               <p>
                  Prev event details
               </p>
               <span class="count-number">05</span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="single-intro-text mb-70">
               <i class="lni-gallery"></i>
               <h3>EVENT 6</h3>
               <p>
                  Prev event details
               </p>
               <span class="count-number">06</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- intro Section End -->
  
    <!-- Counter Area Start-->
    <section class="counter-section section-padding">
      <div class="container">
        <div class="row">
          <!-- Counter Item -->
          <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
            <div class="counter">
              <div class="icon">
                <i class="lni-mic"></i>
              </div>
              <div class="counter-content">
                <div class="counterUp">42</div>
                <p>Spekers</p>
              </div>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
            <div class="counter">
              <div class="icon">
                <i class="lni-bulb"></i>
              </div>
              <div class="counter-content">
                <div class="counterUp">800</div>
                <p>Seats</p>
              </div>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
            <div class="counter">
              <div class="icon">
                <i class="lni-briefcase"></i>
              </div>
              <div class="counter-content">
                <div class="counterUp">24</div>
                <p>Sponsors</p>
              </div>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-lg-3 col-md-6 col-xs-12 work-counter-widget">
            <div class="counter">
              <div class="icon">
                <i class="lni-coffee-cup"></i>
              </div>
              <div class="counter-content">
                <div class="counterUp">56</div>
                <p>Sessions</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Area End-->

    <!-- Schedule Section Start -->
    <section id="schedules" class="schedule section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Schedules</h2>
              <p class="wow fadeInDown" data-wow-delay="0.2s"> <br>Moving towards event schedule we would thank our managing team, teachers and respected hod sir to help us to host all the events,
              <br>And helped during consequences.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mb-5 text-center">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#monday" role="tab" aria-controls="monday" aria-expanded="true">
                  <div class="item-text">
                    <h4>Day 01</h4>
                    <h5>14 December 2021</h5>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#tuesday" role="tab" aria-controls="tuesday">
                  <div class="item-text">
                    <h4>Day 02</h4>
                    <h5>15 December 2021</h5>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#wednesday" role="tab" aria-controls="wednesday">
                  <div class="item-text">
                    <h4>Day 03</h4>
                    <h5>16 December 2021</h5>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="thursday-tab" data-toggle="tab" href="#thursday" role="tab" aria-controls="thursday">
                  <div class="item-text">
                    <h4>Day 04</h4>
                    <h5>17 December 2021</h5>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-12">
            <div class="schedule-area row wow fadeInDown" data-wow-delay="0.3s">
              <div class="schedule-tab-content col-12 clearfix">
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="monday" role="tabpanel" aria-labelledby="monday-tab">
                    <div id="accordion">
                      <div class="card">
                        <div id="headingOne">
                          <div class="schedule-slot-time">
                            <span> 9.30 - 10.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                            </div>                     
                            <h4>Web Design Principles and Best Practices</h4>
                            <h5 class="name">Prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div id="headingTwo">
                          <div class="schedule-slot-time">
                            <span> 10.30 - 11.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                            </div>
                            <h4>15 Free Productive Design Tools</h4>
                            <h5 class="name">prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div id="headingThree">
                          <div class="schedule-slot-time">
                            <span> 11.30 - 12.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-3.jpg" alt="">
                            </div>
                            <h4>Getting Started With App</h4>
                            <h5 class="name">prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="tuesday" role="tabpanel" aria-labelledby="tuesday-tab">
                    <div id="accordion2">
                      <div class="card">
                        <div id="headingOne1">
                          <div class="schedule-slot-time">
                            <span> 1.30 - 2.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                            </div>
                            <h4>Web Design Principles and Best Practices</h4>
                            <h5 class="name">prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseOne1" class="collapse show" aria-labelledby="headingOne1" data-parent="#accordion2">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div id="headingTwo2">
                          <div class="schedule-slot-time">
                            <span> 9.30 - 10.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne1">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                            </div>
                            <h4>Web Design Principles and Best Practices</h4>
                            <h5 class="name">prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordion2">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="wednesday" role="tabpanel" aria-labelledby="wednesday-tab">
                    <div id="accordion3">
                      <div class="card">
                        <div id="headingOne3">
                          <div class="schedule-slot-time">
                            <span> 10.30 - 11.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                            </div>
                            <h4>Web Design Principles and Best Practices</h4>
                            <h5 class="name">prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseOne3" class="collapse show" aria-labelledby="headingOne3" data-parent="#accordion3">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div id="headingTwo3">
                          <div class="schedule-slot-time">
                            <span> 11.30 - 12.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                            </div>
                            <h4>Web Design Principles and Best Practices</h4>
                            <h5 class="name">prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo3" data-parent="#accordion3">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div id="headingThree3">
                          <div class="schedule-slot-time">
                            <span> 1.30 - 2.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-3.jpg" alt="">
                            </div>
                            <h4>Web Design Principles and Best Practices</h4>
                            <h5 class="name">prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordion3">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="thursday" role="tabpanel" aria-labelledby="thursday-tab">
                    <div id="accordion4">
                      <div class="card">
                        <div id="headingOne">
                          <div class="schedule-slot-time">
                            <span> 9.30 - 10.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                            </div>
                            <h4>Web Design Principles and Best Practices</h4>
                            <h5 class="name">prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseOne4" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion4">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div id="headingTwo">
                          <div class="schedule-slot-time">
                            <span> 10.30 - 11.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                            </div>
                            <h4>Web Design Principles and Best Practices</h4>
                            <h5 class="name">prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseTwo4" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion4">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div id="headingThree4">
                          <div class="schedule-slot-time">
                            <span> 11.30 - 12.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-3.jpg" alt="">
                            </div>
                            <h4>Web Design Principles and Best Practices</h4>
                            <h5 class="name">prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseThree4" class="collapse" aria-labelledby="headingThree" data-parent="#accordion4">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="friday" role="tabpanel" aria-labelledby="friday-tab">
                    <div id="accordion">
                      <div class="card">
                        <div id="headingOne">
                          <div class="schedule-slot-time">
                            <span> 9.30 - 10.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-2.jpg" alt="">
                            </div>
                            <h4>Web Design Principles and Best Practices</h4>
                            <h5 class="name">prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div id="headingTwo">
                          <div class="schedule-slot-time">
                            <span> 10.30 - 11.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-1.jpg" alt="">
                            </div>
                            <h4>Web Design Principles and Best Practices</h4>
                            <h5 class="name">prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div id="headingThree">
                          <div class="schedule-slot-time">
                            <span> 11.30 - 12.30 AM</span>
                            Workshop
                          </div>
                          <div class="collapsed card-header" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <div class="images-box">
                              <img class="img-fluid" src="assets/img/speaker/speakers-3.jpg" alt="">
                            </div>
                            <h4>Web Design Principles and Best Practices</h4>
                            <h5 class="name">prof.Name</h5>
                          </div>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            <p>Event Details</p>
                            <div class="location">
                              <span>Location:</span> Zoom Meet
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
      </div>
    </section>
    <!-- Schedule Section End -->

    <!-- Team Section Start -->
    <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Our Team</h2>
              <p class="wow fadeInDown" data-wow-delay="0.2s"></p>
            </div>
          </div>
        </div>
        <div class="row justify-content-bt">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-01.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Dipranshu Agrawal</a></h3>
                <p>Content Writer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-04.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Chinmayi Naik</a></h3>
                <p>Front-end Developer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-lg-3 col-md-6 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-06.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Sakshi Naik</a></h3>
                <p>Back-End Developer</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-lg-3 col-md-6 col-xs-12">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUp" data-wow-delay="1.4s">
              <div class="team-img">
                <img class="img-fluid" src="assets/img/team/team-07.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-google" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Nimish Poonekar</a></h3>
                <p>Lead Designer</p>
              </div>
            </div>
          </div>
        </div>
        <a href="#" class="btn btn-common mt-30 wow fadeInUp" data-wow-delay="1.9s">Meet whole team</a>
      </div>
    </section>
    <!-- Team Section End -->

    <!-- Event Slides Section Start -->
    <section id="event-up" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Upcoming Events</h2>
              <p class="wow fadeInDown" data-wow-delay="0.2s">To keep excitement raging through your nerves we are soon coming up by</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="event-item">
              <img class="img-fluid" src="assets/img/event/img1.jpg" alt="">
              <div class="overlay-text">
                <div class="content">
                  <h3>photography Event</h3>
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="event-item">
              <img class="img-fluid" src="assets/img/event/img2.jpg" alt="">
              <div class="overlay-text">
                <div class="content">
                  <h3>Dance Shows</h3>
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="event-item">
              <img class="img-fluid" src="assets/img/event/img3.jpg" alt="">
              <div class="overlay-text">
                <div class="content">
                  <h3>IT Webinar </h3>
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12">
            <div class="event-item">
              <img class="img-fluid" src="assets/img/event/img4.jpg" alt="">
              <div class="overlay-text">
                <div class="content">
                  <h3>Arijit's Live Concert</h3>
                  <a href="#">View details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-common">More Event</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Event Slides Section End -->


    <!-- Blog Section Start -->
    <section id="blog" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Latest News</h2>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Anything You Wish ToWrite Here Related To It.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
              <div class="blog-image">
                <a href="#">
                  <img class="img-fluid" src="assets/img/team/img-1.jpg" alt="">
                </a>
              </div>
              <div class="descr">
                <div class="icon">
                  <i class="lni-image"></i>
                </div>
                <h3 class="title">
                  <a href="#">
                   Christmas Eve
                  </a>
                </h3>
                <p>Text Here</p>
              </div>
              <div class="meta-tags">
                <span class="date"><i class="lni-calendar"></i> Dec 25, 2021</span> 
                <span class="comments"><i class="lni-comment-alt"></i> <a href="#"> 76 Comment</a></span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
              <div class="blog-image">
                <a href="#">
                  <img class="img-fluid" src="assets/img/team/img-2.jpg" alt="">
                </a>
              </div>
              <div class="descr">
                <div class="icon">
                  <i class="lni-arrow-right"></i>
                </div>
                <h3 class="title">
                  <a href="#">
                    Call for sponsors
                  </a>
                </h3>
                <p>text here</p>
              </div>
              <div class="meta-tags">
                <span class="date"><i class="lni-calendar"></i> Jan 20, 2022</span> 
                <span class="comments"><i class="lni-comment-alt"></i> <a href="#"> 100 Comment</a></span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="blog-item">
              <div class="blog-image">
                <a href="#">
                  <img class="img-fluid" src="assets/img/team/img-3.jpg" alt="">
                </a>
              </div>
              <div class="descr">
                <div class="icon">
                  <i class="lni-camera"></i>
                </div>
                <h3 class="title">
                  <a href="#">
                    Elon Musk joining the event
                  </a>
                </h3>
                <p>Text Here</p>
              </div>
              <div class="meta-tags">
                <span class="date"><i class="lni-calendar"></i> Feb 22, 2022</span> 
                <span class="comments"><i class="lni-comment-alt"></i> <a href="#"> 55 Comment</a></span>
              </div>
            </div>
          </div>
          <div class="col-12 text-center">
            <a href="#" class="btn btn-common">View all Blog</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Blog Section End -->

    <!-- Sponsors Section Start -->
    <section id="sponsors" class="section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Sponsors</h2>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Thank You For Sponsorship.</p>
            </div>
          </div>
        </div>
        <div class="row mb-30 text-center wow fadeInDown" data-wow-delay="0.3s">
          <div class="col-lg-12">
            <div class="sponsors-logo text-center">
               <a href=""><img src="assets/img/sponsors/logo-1.png" alt=""></a>
               <a href=""><img src="assets/img/sponsors/logo-2.png" alt=""></a>
               <a href=""><img src="assets/img/sponsors/logo-3.png" alt=""></a>
               <a href=""><img src="assets/img/sponsors/logo-4.png" alt=""></a>
               <a href=""><img src="assets/img/sponsors/logo-5.png" alt=""></a>
               <a href=""><img src="assets/img/sponsors/logo-6.png" alt=""></a>
               <a href=""><img src="assets/img/sponsors/logo-7.png" alt=""></a>
               <a href=""><img src="assets/img/sponsors/logo-8.png" alt=""></a>
               <a href=""><img src="assets/img/sponsors/logo-9.png" alt=""></a>
            </div><!-- sponsors logo end-->
         </div>
        </div>
      </div>
    </section>
    <!-- Sponsors Section End -->

    <!-- Contact Us Section -->
    <section id="contact-map" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Contact Us</h2>
              <p class="wow fadeInDown" data-wow-delay="0.2s">Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem an <br> cule dicta iriure at phaedrum.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
              <div class="form-wrapper">
                <form action="index4.php" method="post">
                  <div class="row">
                    <div class="col-md-6 form-line">
                      <div class="form-group">

                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6 form-line">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <div class="help-block with-errors"></div>
                      </div> 
                    </div>
                    <div class="col-md-12 form-line">
                      <div class="form-group">
                        <input type="tel" class="form-control" id="subject" name="subject" placeholder="Subject">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea rows="4" class="form-control" id="message" name="message"></textarea>
                      </div>
                      <div class="form-submit">
                        <button type="submit" class="btn btn-common" id="form-submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Us Section End -->

    <!-- Map Section Start -->
    <section id="google-map-area">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <section class="location">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.3674429020625!2d72.9725188145818!3d19.266380786978914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bb97393918f5%3A0x8daad21d2f9d3c8f!2sNew%20Horizon%20Institute%20of%20Technology%20%26%20Management!5e0!3m2!1sen!2sin!4v1631631741682!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               
          </section>
        </div>
      </div>
    </section>
    <!-- Map Section End -->

    <!-- Contact text Start -->
    <section id="contact-text">
      <div class="container">
        <div class="row contact-wrapper">
          <div class="col-lg-4 col-md-5 col-xs-12">
            <ul>
              <li>
                <i class="lni-home"></i>
              </li>
              <li><span>New Horizon Institute of Technology and Management,
                Anand Nagar Off Ghodbunder Road, Thane (W)- 400615.</li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-3 col-xs-12">
            <ul>
              <li>
                <i class="lni-phone"></i>
              </li>
              <li><span>022-25971778</span></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-3 col-xs-12">
            <ul>
              <li>
                <i class="lni-envelope"></i>
              </li>
              <li><span>demo@example.com</span></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact text End -->

    <footer>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="subscribe-inner wow fadeInDown" data-wow-delay="0.3s">
              <h2 class="subscribe-title">To Get New Updates</h2>
              <form class="text-center form-inline">
                <input class="mb-20 form-control" name="email" placeholder="Enter Your Email Here">
                <button type="submit" class="btn btn-common sub-btn" data-style="zoom-in" data-spinner-size="30" name="submit" id="submit">
                  <span class="ladda-label"><i class="lni-check-box"></i> Subscribe</span>
                </button>
              </form>
            </div>
            <div class="footer-logo">
              <img src="assets/img/download.jfif" alt="">
            </div>
            <div class="social-icons-footer">
              <ul>
                <li class="facebook"><a target="_blank" href="3"><i class="lni-facebook-filled"></i></a></li>
                <li class="twitter"><a target="_blank" href="3"><i class="lni-twitter-filled"></i></a></li>
                <li class="pinterest"><a target="_blank" href="3"><i class="lni-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="site-info">
              <p>Designed and Developed by <a href="http://uideck.com" rel="nofollow"></a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-chevron-up"></i>
    </a>

    <div id="preloader">
      <div class="sk-circle">
        <div class="sk-circle1 sk-child"></div>
        <div class="sk-circle2 sk-child"></div>
        <div class="sk-circle3 sk-child"></div>
        <div class="sk-circle4 sk-child"></div>
        <div class="sk-circle5 sk-child"></div>
        <div class="sk-circle6 sk-child"></div>
        <div class="sk-circle7 sk-child"></div>
        <div class="sk-circle8 sk-child"></div>
        <div class="sk-circle9 sk-child"></div>
        <div class="sk-circle10 sk-child"></div>
        <div class="sk-circle11 sk-child"></div>
        <div class="sk-circle12 sk-child"></div>
      </div>

      
    </div>

    <!-- js, Bootstrap  -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/main.js"></script>      
  </body>
</html>
