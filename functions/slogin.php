<?php
	if(isset($_POST['login'])){
		$username = $_POST['user'];
		$password = $_POST['pass'];
		//$enc_pass = md5($pass);
		
		$query = mysql_query("SELECT * FROM admin_details WHERE username='$username' AND password='$password'");
		if(mysql_num_rows($query) == 0){
			echo '<br /><center><label class="error">Incorrect Username or Password</label></center>';
		}else{
			$_SESSION['user'] = $username;
			echo "<script>window.location='admin/indexmember.php'</script>";
		}
	}
?>