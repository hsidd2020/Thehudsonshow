<?php
$err = array("","");
if(isset($_POST["submit"])){
    $check = false;
if (empty($_POST["email"])) { $err[0] = "* Email is required"; } else { $email = $_POST["email"];}
if (empty($_POST["pass"])) { $err[1] = "* Password is required"; } else { $pass = $_POST["pass"];}
	for($i=0;$i<2;$i++)
	if($err[$i] != "")
	{
	    $check = true;
	    break;
	}
if($check == false)
{
	$conn = new mysqli("localhost","root","","bms");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 
	$sql = "SELECT * FROM user WHERE email = '$email'";
	$result = $conn->query($sql);
	if($result){
    $row = mysqli_fetch_assoc($result); 
        $uid = $row['uid'];
        $name = $row['username'];
		$password = $row['password'];
	if($pass != $password)
	{
	    $err[1] = "* Wrong Password. Please try again.";
	}
	else
	{
	$conn->close();
	session_start();
	$_SESSION["userid"] = $uid;
	header('Location: homepage.php');	
	}
	}
	else{
	$err[0] = "* No user found";
	}
}
}
?>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <style>
   body {
  background: url("https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_1280.jpg")
    no-repeat bottom fixed #000;
  background-size: cover;
}

#hero-img {
  height: 100vh;
}

#login-form {
  background: linear-gradient(rgba(0, 0, 0, 0.3) 100%, rgba(0, 0, 0, 0.3) 100%);
}


.hero-text {
  font-family: "Roboto Slab", serif;
  font-size: 8rem;
}

.fas,
.fa-user {
  color: #f8f8f8;
  display: flex;
  align-items: center;
  margin: auto;
  font-size: 4.5rem;
}

.card {
  background: linear-gradient(rgba(0, 0, 0, 0.7) 100%, rgba(0, 0, 0, 0.7) 100%);
}

.btn {
  border-color: #2473bd;
  color: #2473bd;
}

.btn:hover {
  border-color: #094f91;
  color: #094f91;
  background: #094f91;
  color: #fff;
}

.btn:active {
  border-color: #094f91;
  color: #094f91;
  background: #094f91;
  color: #fff;
}

@media (max-width: 992px) {
  #hero-img {
    height: 0vh;
  }

  #login-form {
    height: 100vh;
  }
}

 img{
    height: 50px;
    width: 50px;
    }
    </style>
  <meta charset="UTF-8">
  <title>Login Form</title>

      <link rel="stylesheet" href="css/style.css">

  
</head>

 
	<br><br><br>
	<center>
<a href="homepage.php"><img src="home.png">
<a href="homepage.php"> Go HomePage</a>


 <div class="container-fluid">
    <div class="row">
      <div id="hero-img" class="col img-fluid d-flex align-items-center justify-content-center">
        <h1 class="hero-text text-light d-none d-lg-block ">The Hudson Shows</h1>
      </div>
      <div id="login-form" class="col-lg d-flex align-items-center justify-content-center">

        <form class="w-75" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
          <!-- Not to sure about the line below, d-flex alone centered the icon in the circle. ask about this 7-20-2020 -->
          <div class="d-flex"><i class="fas fa-user">Login</i></div>
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label for="email"></label>
                <input type="text" class="form-control" name="email" id="user" aria-describedby="emailHelp" placeholder="Email Address">
                <small id="emailHelp" class="form-text text-white">We'll never share your email with
                  anyone.</small>
              </div>
              <div class="form-group">
                <label for="password"></label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="check">
                <label class="form-check-label text-light" for="check">Remember me</label>
              </div>
              <button type="submit" id="btn" name="submit" class="btn btn-block">Submit</button>
            </div>
            <a href="signup.php" class="ml-4 mb-3 text-light">Sign Up</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

 		</center>
		</body>
		</html>