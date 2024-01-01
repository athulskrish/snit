<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SNIT Kollam</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Mentor
    Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <style type="text/css">
    .slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
#scroll-container {
  /* border: 1px solid grey; */
  border-radius: 5px;
  height: 200px;
  overflow: hidden;
  /* margin-left: 50px;
  margin-right: 50px; */
  background-color: aliceblue;
  color: black;
  box-shadow: #717171;
  /* width: 25%; */
  align-items: center;
  font-weight: bolder;

}

#scroll-text {
  height: 100%;
  text-align: center;
  
  /* animation properties */
  -moz-transform: translateY(100%);
  -webkit-transform: translateY(100%);
  transform: translateY(100%);
  
  -moz-animation: my-animation 5s linear infinite;
  -webkit-animation: my-animation 5s linear infinite;
  animation: my-animation 5s linear infinite;
}

/* for Firefox */
@-moz-keyframes my-animation {
  from { -moz-transform: translateY(100%); }
  to { -moz-transform: translateY(-100%); }
}

/* for Chrome */
@-webkit-keyframes my-animation {
  from { -webkit-transform: translateY(100%); }
  to { -webkit-transform: translateY(-100%); }
}

@keyframes my-animation {
  from {
    -moz-transform: translateY(100%);
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
  }
  to {
    -moz-transform: translateY(-100%);
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%);
  }
}


/* /// struck */
/* .stuck {
    position: fixed;
    top: 10%;
    left: 10px;
    bottom: 10%;
    width: 30%;
    overflow-y: scroll;
} */
  </style>
</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <center><img style="width:510px; height: 90px;"src="img/logo.jpg"></center>
         <!-- <a class="navbar-brand" href="index.html">SNiT <span>Kollam</span></a> --><!--Men<span>tor</span> --> 
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#annoucement"> Announcements</a></li>
         
          <li><a href="#organisations">Clubs</a></li>
          <li><a href="pdf/2022Admission.pdf">2022 Admission List</a></li>
          <li><a href="pdf/prospectus.pdf">Prospectus</a></li>
          <li><a href="pdf/mandatory_disclosure_ANNEXURE_2022.pdf">Mandatory disclosure</a></li>
          <li><a href="#courses">Gallery</a></li>
         
          <li><a href="#feature">Academics</a></li>
          <li><a href="#footer">Contact Us</a></li> <!-- class="btn-trial" -->
       <!--   <li> <div class="dropdown show">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown link
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div></li>
 -->          <li class="btn-trial"><a href="#" data-target="#login" data-toggle="modal">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->