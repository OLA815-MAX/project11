<?php

include('./dbc.php');
if (isset($_POST['add'])) {
	$user=$_POST['full'];
	$name=$_POST['user-name'];
	$mail=$_POST['email'];
$pwd=$_POST['password'];
	if(!empty($user)&&!empty($name)&&!empty($mail)&&!empty($pwd))
{$sql="INSERT into admns(full,name,email,password)VALUES('$user','$name','$mail','$pwd')
	
	";
	$conn->exec($sql);
	echo "add";
	}}?>


<?php
session_start();
$msg="";
if (isset($_POST['log'])) {
  $name=$_POST['user'];
  $password=$_POST['pwd'];
  {$expire=time()+(86400*30);
    setcookie('admin',$name,$expire,"/");
  $msg="welcome".$_COOKIE['admin'];
 }
  
}?>




<!DOCTYPE html>


<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>News Admin | Login/Register</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action='./index.php'>
              <h1>Login Form</h1>
              <h2><?php echo $msg;?><h2>
          <div>
                <input type="text" class="form-control" name="user" placeholder="Username" required="required" />
              </div>
              <div>
                <input type="password" class="form-control"name="pwd" placeholder="Password" required="required" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit"  name="log">login</button>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-newspaper-o"></i></i> News Admin</h1>
                  <p>©2016 All Rights Reserved. News Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Fullname" required="" name="full"/>
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="user-name" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" name="email" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password"/>
              </div>
              <div>
                <button type="submit" class="btn btn-default submit" name="add">Submit</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-newspaper-o"></i></i> News Admin</h1>
                  <p>©2016 All Rights Reserved. News Admin is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
