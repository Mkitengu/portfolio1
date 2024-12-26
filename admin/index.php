<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=deviece-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/font-awesome-ie7.css">
    <link rel="stylesheet" href="../css/font-awesome-ie7.min.css">
	<link href='http://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>login form</title>
</head>

<body>
<?php
	if(isset($_POST['gui'])){
		$MaTK=$_POST['MaTK'];
		$taikhoan=$_POST['taikhoan'];
		$matkhau=$_POST['matkhau'];
		
		$sql_dangky=mysqli_query("insert into admin(MaTK,taikhoan,matkhau) value ('$MaTK','$taikhoan','$matkhau')");
		    
	if($sql_dangky){
		echo '<h3 style="margin-left:5px;">Bạn đã đăng ký thành công</h3>';
		echo '<a href="?do=trangchu" style="margin:20px;text-decoration:none;">Quay lại để đăng nhập mua hàng</a>';
	}
	}
?>
   <div class="wrapper">
      <h2>Welcome</h2>
	  <form class="form-login" action="XL_DangNhap.php" method="post">
	     <div class="input-field">
		    <input type="text" id="text" name="TenTK" placeholder="Usernaem" required>
			<i class='bx bxs-user'></i>
		 </div>
		 <div class="input-field">
		    <input type="password" id="password" name="MatKhau" placeholder="Password" required>
			<div id="eye">
		       <i class="icon-eye-open"></i>
		    </div>
		 </div>
		 <a href="#" class="forgot">
		    <p>Forgot password</p>
		 </a>
		 <button type="submit" class="login">Login</a>
		 <p>Don't have an account?<a href="#" class="sign-up">sign up</a></p>
	  </form>
   </div>
   <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="showpassword.js"></script>
</body>
</html>