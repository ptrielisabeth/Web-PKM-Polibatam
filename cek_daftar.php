<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: daftar.php?error=Nama pengguna wajib diisi&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: daftar.php?error=Password wajib diisi&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: daftar.php?error=Konfirmasi Password wajib diisi&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: daftar.php?error=Nama wajib diisi&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: daftar.php?error=Konfirmasi kata sandi tidak sesuai&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: daftar.php?error=Nama pengguna sudah digunakan&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: daftar.php?success=Akun Anda telah berhasil dibuat");
	         exit();
           }else {
	           	header("Location: daftar.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: daftar.php");
	exit();
}