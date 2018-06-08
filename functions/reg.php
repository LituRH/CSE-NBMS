<?php
	if(isset($_POST['btnSave']))
	{
		 $eid=$_POST['e_id'];
		$name=$_POST['name'];
		$deg=$_POST['deg'];
		$username=$_POST['user'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		if($password!=$cpassword)
			{
			echo '<br /><center><h3>Missmatch Password!!!!!</h3></center>';
			}
			else
			{
			//check duplicate start
			       $query = mysql_query("SELECT * FROM admin_details WHERE e_id='$eid'");
					if(mysql_num_rows($query) == 0){
						 $query = "INSERT INTO admin_details VALUES ('$e_id', '$name','$deg','$username','$cpassword')";
           				  mysql_query($query);
						 echo '<br /><center><h3>Succesfully Added</h3></center>';
						  	$_SESSION['user'] = $username;
						echo "<script>window.location='admin/indexmember.php'</script>";
					}
					else
					{
						 echo '<br /><center><h3>Already Exist!!!!!</h3></center>';
					}
			}
			//check duplicate end
			
}
		
?>