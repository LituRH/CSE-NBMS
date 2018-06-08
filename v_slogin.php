<?php
    $e_id = $_POST['user'];
	
	if(isset($_POST['login'])){
		$e_id = $_POST['user'];
		$query = mysql_query("SELECT * FROM admin WHERE e_id='$e_id'");
		if(mysql_num_rows($query) == 0){
			echo '<br /><center><label class="error">Your Empoyee Id Could not Found !!!</label></center>';
		}else{
			$_SESSION['user'] = $e_id;
			echo "<script>window.location='register.php'</script>";
		}
	}
?>