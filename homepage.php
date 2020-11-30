<?php
$conn = new mysqli("localhost","root","","bms");
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
session_start();
$bool = false;
?>
<html>
    <meta content="Book My Show allows you to book tickets for your favorite movies at different theaters in Mumbai at affordable prices. The prices vary according to the timings."></meta>
    <title> The Hudson Shows</title>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
</head>

<style>
body {
 /* background: url('background.gif') no-repeat center center fixed;*/
 background-size: cover;
 margin: 0px;
 /*overflow : hidden;*/
 opacity : 0.8;
}
#opaquebox{
background-color: black;

padding: 0px;
margin: 0px;
height: 100%;
width: 100%;
opacity: 0.9;
;
}
.p1{
position: absolute;
margin-left: 37%;
margin-top: 23%;
  
  font-family: 'Parchment';
  font-size: 60px;
  }
.navbar {
    /*overflow: hidden;*/
    background-color: black;
    font-family: "Bookman Old Style";
    }

.navbar a {
    float: left;
    font-size: 16px;
    color: #343a40;
    text-align: left;
    padding: 30px 50px;
    text-decoration: none;
  
}
.navbar abcde{
    float: left;
    font-size: 16px;
    color: white;
    text-align: left;
    padding: 30px 50px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
  width : 250px;
  text-align:left;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: gray;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: gray;
    width: 250px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  height: 100%;
  
}
/*
body{
  width: 100%;
  height:auto;
  scroll-behavior: all;
}*/


.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    
}

.dropdown-content a:hover {
    background-color: gray;
  color:black;
}

.dropdown:hover .dropdown-content {
    display: block;
}
footer{
padding-top: 10px;
font-size: 12px;
margin-left: 9px;
text-align:left;
 }


li {
    float: left;
}

li a {
    
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
  }
  
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: yellow;
  border: none;
  color:black;
  text-align: center;
  font-size: 15px;
 font-family: "Bookman Old Style";
  font-weight: 500;
  width: 200px;
  height: 30px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  margin-left: 570px;
  margin-top: 350px;
  
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.submit  {
    background: rgba(255,255,255,0.0);
  
  border: none;
    color: white;
    
    text-decoration: none;
    position: relative;
  left: -60px;
  top: 8px;
    cursor: pointer;
    font-size: 16px;
  font-family: "Bookman Old Style";
}
.submit:hover  {
color: black;
}
.logout{
     text-align: center;
     font-size: 15px;
     font-family: "Bookman Old Style";
     color: white;
     background-color: black;
      display: inline-block;
        border: none;
     
}

/*.img1{
  margin-right: 50px;
  margin-top: 10px;
  width: 100%;
 
/*}*/
.img{
  padding left:  30px;
  margin-top: 10px;
  width: 100%;

 }
/*.container-fluid{
  width: 100%;
}*/
.fluid{
  width: 600px;
  height: 200px;
}
.fluid2{
  padding-left: 40px;
}
.fluid1{
  padding-left: 120px;

}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio : 2) {
/* Styles */

}

.site-footer
{
  background-color:#ffff;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#ffff;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}
.site-footer .social-icons
{
  text-align:right
}
.site-footer .social-icons a
{
  width:40px;
  height:40px;
  line-height:40px;
  margin-left:6px;
  margin-right:0;
  border-radius:100%;
  background-color:#33353d
}
.copyright-text
{
  margin:0

}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}
.social-icons
{
  padding-left:0;
  margin-bottom:0;
  list-style:none
}
.social-icons li
{
  display:inline-block;
  margin-bottom:4px
}
.social-icons li.title
{
  margin-right:15px;
  text-transform:uppercase;
  color:#96a2b2;
  font-weight:700;
  font-size:13px
}
.social-icons a{
  background-color:#eceeef;
  color:#818a91;
  font-size:16px;
  display:inline-block;
  line-height:44px;
  width:44px;
  height:44px;
  text-align:center;
  margin-right:8px;
  border-radius:100%;
  -webkit-transition:all .2s linear;
  -o-transition:all .2s linear;
  transition:all .2s linear
}
.social-icons a:active,.social-icons a:focus,.social-icons a:hover
{
  color:#fff;
  background-color:#29aafe
}
.social-icons.size-sm a
{
  line-height:34px;
  height:34px;
  width:34px;
  font-size:14px
}
.social-icons a.facebook:hover
{
  background-color:#3b5998
}
.social-icons a.twitter:hover
{
  background-color:#00aced
}
.social-icons a.linkedin:hover
{
  background-color:#007bb6
}
.social-icons a.dribbble:hover
{
  background-color:#ea4c89
}
@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #26272b;
  position: relative;
}
.footer-cta {
  border-bottom: 1px solid #373636;
}
.single-cta i {
  color: #ffff;
  font-size: 15px;
  float: left;
  margin-top: 8px;
}
.cta-text {
  padding-left: 15px;
  display: inline-block;
}
.cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #ffff;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
      color: #7e7e7e;
  line-height: 28px;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.google-bg{
  background: #DD4B39;
}
.footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #ff5e14;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
}
.footer-widget ul li a:hover{
  color: #ff5e14;
}
.footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #ff5e14;
    padding: 13px 20px;
    border: 1px solid #ff5e14;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #202020;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: #ff5e14;
}
.footer-menu li a {
  font-size: 14px;
  color: #878787;
}
/*__________________*/

body {
    background: #D0D8DB;
   
    padding-bottom: 20px;
}

textarea {
    resize: none;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  white-space: nowrap;
}

@charset "UTF-8";

.svg-inline--fa {
  vertical-align: -0.200em;
}

.rounded-social-buttons {
  text-align: center;
}

.rounded-social-buttons .social-button {
  display: inline-block;
  position: relative;
  cursor: pointer;
  width: 2.125rem;
  height: 2.125rem;
  border: 0.125rem solid transparent;
  padding: 0;
  text-decoration: none;
  text-align: center;
  color: #fefefe;
  font-size: 1.5625rem;
  font-weight: normal;
  line-height: 2em;
  border-radius: 1.6875rem;
  transition: all 0.5s ease;
  margin-right: 0.25rem;
  margin-bottom: 0.25rem;
}

.rounded-social-buttons .social-button:hover, .rounded-social-buttons .social-button:focus {
  -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
          transform: rotate(360deg);
}

.rounded-social-buttons .fa-twitter, .fa-facebook-f, .fa-linkedin, .fa-youtube, .fa-instagram {
  font-size: 25px;
}

.rounded-social-buttons .social-button.facebook {
  background: #3b5998;
}

.rounded-social-buttons .social-button.facebook:hover, .rounded-social-buttons .social-button.facebook:focus {
  color: #3b5998;
  background: #fefefe;
  border-color: #3b5998;
}

.rounded-social-buttons .social-button.twitter {
  background: #55acee;
}

.rounded-social-buttons .social-button.twitter:hover, .rounded-social-buttons .social-button.twitter:focus {
  color: #55acee;
  background: #fefefe;
  border-color: #55acee;
}

.rounded-social-buttons .social-button.linkedin {
  background: #007bb5;
}

.rounded-social-buttons .social-button.linkedin:hover, .rounded-social-buttons .social-button.linkedin:focus {
  color: #007bb5;
  background: #fefefe;
  border-color: #007bb5;
}

.rounded-social-buttons .social-button.youtube {
  background: #bb0000;
}

.rounded-social-buttons .social-button.youtube:hover, .rounded-social-buttons .social-button.youtube:focus {
  color: #bb0000;
  background: #fefefe;
  border-color: #bb0000;
}

.rounded-social-buttons .social-button.instagram {
  background: #F56040;
}

.rounded-social-buttons .social-button.instagram:hover, .rounded-social-buttons .social-button.instagram:focus {
  color: #F56040;;
  background: #fefefe;
  border-color: #F56040;;
}
.copy{
  color: #ffff;
}

</style>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="#"><strong>The Hudson Shows</a></strong>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">

      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php"><strong>About us</a></strong>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="movies.php"> <strong>Trending Movies</a></strong>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bookingform.php"> <strong>Book Now</a></strong>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php"><strong>Contact us</a></strong>
      </li>
       <li class="pull-right">
         <?php
            if(isset($_SESSION["userid"])){
                $v=$_SESSION["userid"];
                $sql = "SELECT username FROM user WHERE uid='$v'";
                                  $result = $conn->query($sql);
                                    while($row = mysqli_fetch_assoc($result)){
                                    $name = $row['username'];
                                    }
            // echo "<div class='abc'><ul>";
                echo "<li><a>Welcome $name</a></li>";
                echo "<li><a href='logout.php'><button name='log' class='logout'>Logout</button></a></li>";
            // echo "</ul>";
            // echo "</div>";
            }
            else 
            {
                // echo "<div class='abc'><ul>";
                // echo "<li><a>Welcome user !</a></li>";
                echo "<strong><li><a href='login.php'>Login</a></li></strong>";
                echo "<strong><li><a href='signup.php'>Signup</a></li></strong>";
                // echo "</ul>";
                // echo "</div>";
            }


            ?>

        </li>
  </ul>
  </div>
</nav>



<div class="container-fluid">
  <!-- <img  class ="img"src="home.jpg" class="d-block w-100" alt="...">   -->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="home2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="home3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="home4.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</section>
<div class="card">
<div class="card-header">
  <center><h1>We Are Back Now🔥</h1></center>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p><center><h3>We Are Back With Saftey Guidelines.Your Saftey Is Our Priority</h3></center></p>
      </blockquote>
</div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-6">
      <img src="social-distancing.jpg"class="img-fluid fluid fluid1" alt="Responsive image">
    </div>
    <div class="col-6">
     <img src="social-distance2.jpg"class="img-fluid fluid fluid2" alt="Responsive image">
     <br><br><br>

    </div>
    <div class="container-fluid"><center>
<button type="button" class="btn btn-light"><a href="movies.php">Book Movies</button></a>
</center>
<br><br><br>

</div>

  </div>
</div>

  <!-- Site footer -->
  <!--   <footer class="site-footer">
      <div class="container">
        <div class="row">
          

          
          <div class="col-xs-6 col-md-3">
            
          </div>
        </div>
        <hr>
      </div> -->

      <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Find us</h4>
                    <p><h6><i>B block </p>
                    <p>Hudson Embassy Business Park</p>
                    <p>White Field Road</p>
                    <p>Bangalore - 560066</p></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Call us</h4>
                                <span><i>+91 6366018699</span></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Mail us</h4>
                                <span><i>contact@hudsonservices.com</span></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copy">Copyright &copy; 2020 All Rights Reserved by 
         <a href="homepage.php">The Hudson Shows</a>.
            </p>
          </div>

         <div class="rounded-social-buttons">
                    <a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
</footer>
</body>
</html>