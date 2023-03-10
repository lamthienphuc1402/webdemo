<?php
session_start();
require_once('inc/dbconnection.php');

//Code for Registration 
if(isset($_POST['signup']))
{
	$fname=$_POST['fname'];
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$enc_password=$password;
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
	echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
	$msg=mysqli_query($con,"insert into users(fname,email,password) values('$fname','$email','$enc_password')");

if($msg)
{
	echo "<script>alert('Register successfully');</script>";
}
}
}
if (isset($_POST['guest'])) {
  $password = '123@1';
  $dec_password = $password;
  $useremail = 'guest@gmail.com';
  $ret = mysqli_query($con, "SELECT * FROM users WHERE email='$useremail' and password='$dec_password'");
  $num = mysqli_fetch_array($ret);
  if ($num > 0) {
    $extra = "index.php";
    $_SESSION['login'] = 'guest@gmail.com';
    $_SESSION['id'] = 11;
    $_SESSION['name'] = 'guest';
    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("location:http://$host$uri/$extra");
    exit();
  }
  
}
// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT * FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="index.php";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
  $_SESSION['action1']="*Invalid username or password";
  $extra="wrongpass.php";
  echo "<script>window.location.href='".$extra."'</script>";
  exit();
}
}

//Code for Forgot Password

if(isset($_POST['send']))
{
$femail=$_POST['femail'];

$row1=mysqli_query($con,"select email,password from users where email='$femail'");
$row2=mysqli_fetch_array($row1);
if($row2>0)
{
$email = $row2['email'];
$subject = "Information about your password";
$password=$row2['password'];
$message = "Your password is ".$password;
mail($email, $subject, $message, "From: $email");
echo  "<script>alert('Your Password has been sent Successfully');</script>";
}
else
{
echo "<script>alert('Email not register with us');</script>";	
}
}
include('inc/login-header.php');
?>
  <a href="https://front.codes/" class="logo" target="_blank">
    <img src="https://assets.codepen.io/1462889/fcy.png" alt="">
  </a>

  <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
            <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
                    <div class="section text-center">
                    <form name="login" action="" method="post" autocomplete="off">
                    <h4 class="mb-4 pb-3">Log In</h4>
                    <p style="color:white; padding-top:20px;" align="center">
                    <?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
                    <div class="form-group">
								<input type="text" class="form-style" name="uemail" value="" placeholder="Your Email" autocomplete="off" ><i class="input-icon uil uil-at"></i>
                    </div>
                    <div class="form-group mt-2">
								<input type="password" class="form-style" value="" name="password" placeholder="Your Password" autocomplete="off"><i class="input-icon uil uil-lock-alt"></i>
                    </div>
								
									<input type="submit" class="btn mt-2" name="login" value="LOG IN" >
                  <input type="submit" class="btn mt-2" name="guest"  value="guest" >
									<div class="clear"> </div>
								</div>

							</form>
                </div>
                </div>
                <div class="card-back">
                  <div class="center-wrap">
                    <div class="section text-center">
                      <h4 class="mb-4 pb-6">Sign Up</h4>
                      
                      <form name="registration" method="post" action="" enctype="multipart/form-data" autocomplete="off">
                      <div class="form-group">
								<input type="text" class="form-style" placeholder="Your Full Name" value=""  name="fname"  >
                      </div>
                <div class="form-group mt-2">
								<input type="text" class="form-style" placeholder="Your Email" value="" name="email"  >
                </div>
								<div class="form-group mt-2">
								<input type="password" class="form-style" value="" placeholder="Your Password" name="password" >
								</div>
									<input type="reset" class="btn mt-2" value="Clear">
									<input type="submit" class="btn mt-2" name="signup"  value="Sign Up" >
									<div class="clear"> 
								</div>
							</form>
                        <!-- <input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname"
                          autocomplete="off">
                        <i class="input-icon uil uil-user"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail"
                          autocomplete="off">
                        <i class="input-icon uil uil-at"></i>
                      </div>
                      <div class="form-group mt-2">
                        <input type="password" name="logpass" class="form-style" placeholder="Your Password"
                          id="logpass" autocomplete="off">
                        <i class="input-icon uil uil-lock-alt"></i>
                      </div>
                      <a href="#" class="btn mt-4">submit</a> -->
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

<?php
include('inc/footer.php');
?>