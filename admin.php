<?php 
    require_once 'etc/config/website.settings.php';
    require_once 'etc/modules/user/user.lib.php';
    $user = new User();
	$user->start_session();
if($user->isUserLogin('admin')){
?>
<!DOCTYPE html>
<html>
<head>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Box</title>
<script src="static/js/jquery.js"></script>
<link rel="stylesheet" href="static/css/home.css" type="text/css" />
<link rel="stylesheet" href="static/css/admin.css" type="text/css" />
</head>
<body>
<div id="container">
    <div id="regs-box">
    <a href="index.php" class="logo"><img src="static/img/logo.png" ></a>
        <p>Welcome to Cheapo Mail where you can send email to other cheapo users. Please Enter the following fields to add a new user </p>
 <form class="logreg" name="register" autocomplete="off">
    <label class="fields" ><span>First Name:</span><input name="first_name" required class="form-login" type="text" /></label>
    <label class="fields" ><span>Last Name:</span><input name="last_name" required class="form-login" type="text" /></label>
    <label class="fields" ><span>Username:</span><input name="username" required class="form-login" type="text" id="email"  /></label>
    <label class="fields" ><span>Password:</span><input name="pass" type="password" class="form-login" id="pass" /></label>
    <label class="fields" ><span></span><input name="conpass" required class="form-login" type="password" id="cpass" placeholder="Confirm Passowrd" /></label>
     <input class="regsign regs" type="submit" value="register" />
</form>
        <script src="static/js/admin.js" ></script>
</div>
</div>
    
</body>    
</html>   
<?php }else{
	?>
    <script>
    	window.location.assign('index.php?do=home');
    </script>
    <?php	
}?> 
    