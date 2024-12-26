<?php
	session_start();
	ob_start();
   	include ('../ketnoi.php');	
	$TenTK=$_POST['TenTK'];
	$MatKhau=$_POST['MatKhau'];
	
	//$sql =  "Select * from nhanvien where TenTK= '$user' and MatKhau='$pass'";
	$sql =  "Select * from `admin` where taikhoan='$TenTK' and matkhau=md5('$MatKhau') ";
	//$sql =  "Select * from tabuser where TenTK= 'khoiminh' and MatKhau=md5('khoiminh')";


	$result = mysqli_query($connect,$sql);
	$row = mysqli_fetch_array($result);

		if ($row>=1)
		{
		
			//$_SESSION["MaTK"] = $row['MaTK'];
			$_SESSION["TenTK"] = $row['taikhoan'];
			$_SESSION["MatKhau"] = $row['matkhau'];
			$_SESSION["Quyen"] = $row['quyen'];
			$_SESSION['islogin'] = "1";	
			if(isset($_POST['name']))
			{
				setcookie('user',$TenTK,time()+3600,'/','',0,0);
				setcookie('pass',$MaKhau,time()+3600,'/','',0,0);
			}
			
			header("location: chont/index.php");			
		}
		else
		{
?>
	<script type="text/javascript">
		window.location = "..//index.php";
		alert("Đăng nhập không thành công");
    </script>
    
<?php	}  ?>
		
		
