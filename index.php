<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="bhimart">
	<title>Bhimart | Login </title>
	<link rel="shortcut icon" href="https://www.bhimart.com/images/favicon.ICO">
	<!-- <meta name="viewport" content="width=device-width,initial-scale=1"> -->
		   <link rel="stylesheet" href="Login.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
	<script src="login.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<!-- <link rel="stylesheet" type="text/css" href="css/my-login1.css"> -->
</head>


    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="logo.jpg" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="text" name="text" class="form-control" placeholder="User Name" required autofocus>
                <input type="password" id="Password" name="password" class="form-control" placeholder="Password" required>
               
                 <div id="remember" class="checkbox">
                    <!-- <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label -->
                </div>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Sign in</button>
            </form>
        </div>
    </div>
					<div class="footer">
						© 2018 BHIMART. ALL RIGHTS RESERVED
						<a href="#" style="text-transform: uppercase;font-size: 12px;font-weight: bolder;">contact@bhimart.com</a>
					</div>
			
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/my-login.js"></script>
</body>
</html>
<?php
session_start();
$conn=mysqli_connect('localhost','root','','final data');
//Getting Input value
if(isset($_POST['login'])){
  $username=mysqli_real_escape_string($conn,$_POST['text']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  if(empty($username)&&empty($password)){
  $error= 'Fileds are Mandatory';
  }else{
 //Checking Login Detail
 $result=mysqli_query($conn,"SELECT * FROM user_master  WHERE User_Name='$username' AND User_Pwd='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);
 if($count==1){
   $_SESSION['name'] = $data['User_Name'];
      $_SESSION['user']=array(
   'username'=>$row['User_Name'],
   'password'=>$row['User_Pwd'],

   'role'=>$row['User_Role']
   );
   $role=$_SESSION['user']['role'];
   //Redirecting User Based on Role
    switch($role){
  case 'Editor':
  header('location:editorhome.php');
  break;
  case 'Reviewer':
  header('location:reviewerhome.php');
  break;
  case 'Approver':
  header('location:approverhome.php');
  break;
 }
 }else{
echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='index.php';</script>";
 }
}
}
?>
