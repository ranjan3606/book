<?php 
	require 'db.php';

	session_start();

	$username = "";
	$password = "";
	
	if(isset($_POST['admin_name'])){
		$username = $_POST['admin_name'];
	}
	if (isset($_POST['admin_pass'])) {
		$password = $_POST['admin_pass'];

	}
	
	echo $username ." : ".$password;

	$connect = 'SELECT * FROM admin WHERE admin_name=:admin_name AND admin_pass=:admin_pass';

	$query = $db->prepare($connect);

	$query->execute(array(':admin_name' => $username, ':admin_pass' => $password));


	if($query->rowCount() == 0){
		header('Location: index.php?err=1');
	}else{

		$row = $query->fetch(PDO::FETCH_ASSOC);

		session_regenerate_id();
		$_SESSION['sess_user_id'] = $row['id'];
		$_SESSION['sess_admin_name'] = $row['admin_name'];
        //$_SESSION['sess_userrole'] = $row['role'];

        header("location:admin.php");
		session_write_close();

		if( $_SESSION['sess_userrole'] == "admin"){
			header('Location: admin.php');
		}else{
			//header('Location: userhome.php');
		}
		
		
	}


?>