<?php
	session_start();//nabil
	include('koneksi.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query =mysqli_query($koneksi, "select * from user where username = '$username' and password ='$password'");
	
	$cek = mysqli_num_rows($query);
	
	if ($cek== TRUE){
		$_SESSION['username']=$username;
		header ("location:home.php");
	}
	
	else{
    ?>
        <script language="JavaScript">
            alert('Oops! Username atau Password tidak sesuai ...');
            document.location='./';
        </script>
    <?php
    }
?>