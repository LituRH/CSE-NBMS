<?php
	if(isset($_POST['login']))
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		//$enc_pass = md5($pass);
		
		$query = mysql_query("SELECT * FROM core_admin WHERE username='$user' AND password='$pass'");
		if(mysql_num_rows($query) == 0){
			//ss
					$query = mysql_query("SELECT * FROM admin_details WHERE username='$user' AND password='$pass'");
					if(mysql_num_rows($query) == 0){
					echo '<br /><center><label class="error">Incorrect Username or Password</label></center>';
					}
					else
					{
						$_SESSION['user'] = $username;
						echo "<script>window.location='admin/indexmember.php'</script>";
					}
		}
		else{
			$_SESSION['user'] = $username;
			echo "<script>window.location='admin/indexadmin.php'</script>";
		}
			//ed
			
	}
?>