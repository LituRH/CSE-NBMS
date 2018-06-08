<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

<div class="del">
<?php 
	
	
	 $id=$_REQUEST['id']; 
	 $file=$_POST['file'];
	 
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("oln",$link) or die ("Cannot select the database!");
	 $query="DELETE FROM admin_details WHERE e_id='".$id."'";
		
		  if(!mysql_query($query,$link))
		  {die ("An unexpected error occured while <b>deleting</b> the record, Please try again!");}
		  else
		 {
		  echo "<script>window.location='view_member.php'</script>";
		  }
	 ?>
</div>
</body>
</html>