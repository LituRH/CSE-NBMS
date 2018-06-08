<?php session_start(); include "functions/conn.php";
$e_id=$_SESSION['user'];
//echo $e_id;
$result ="SELECT name,e_id FROM admin where e_id='$e_id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$sname=$row['name'];
			$s_id=$row['e_id'];
        }
?>

<?php
/*
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
			$msg="Password not Match ?";

			}
			//check duplicate start
			       $query = mysql_query("SELECT * FROM admin_details WHERE e_id='$eid'");
					if(mysql_num_rows($query) == 0){
						 $query = "INSERT INTO admin_details VALUES ('$e_id', '$name','$deg','$username','$cpassword')";
           				  mysql_query($query);
						  $msg="Succesfully Added";
					}
					else
					{
						 $msg="Already Exist";
					}
			//check duplicate end
			
}
*/

?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Welcome to NoticeBoard </title>
<meta name="keywords" content="" />
<meta name="description" content="" />



 
        <link rel="stylesheet" type="text/css" href="js1/default.css">
		<link rel="stylesheet" type="text/css" href="js1/component.css">
<link href="tooplate_style1.css" rel="stylesheet" type="text/css" />
<link href="csstooplate_style.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="style1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/coda-slider.css" type="text/css" charset="utf-8" />

<link rel="stylesheet" href="dat/jquery-ui.css" />
<script src="dat/jquery-1.9.1.js"></script>
<script src="dat/jquery-ui.js"></script>
<script src="dat/script.js"></script>
<link rel="stylesheet" href="dat/runnable.css" />
</head>
<body>
	
<div id="slider">
	<div id="tooplate_wrapper">
        <div id="tooplate_sidebar">
	<?php
print "<p style=\"color:black; padding-top:10px; text-align:left;padding-left:22px;font-weight:bold\">\n";
print date("F d, Y");
print "<br>\n";
//print date("h:i:s A T");
print "</p>\n";
?>	
            <div id="header">
                <h1><img src="images/logonotice.jpg" title="Notice Board - Department of CSE" alt="Notebook free html template" /></h1>
            </div>    
			
            <div id="menu">
              <?php include('mn.php')?>
            </div>
		
		
	</div> <!-- end of sidebar -->  
    
        <div id="content">
         
		<div id="head">
		
	</div> <!--#head-->
	
	<div id="denied">
		<?php include "functions/reg.php" ?>
	</div> <!--#denied-->
	<fieldset>
			   <legend>&nbsp;&nbsp;<b><h3>Registration Form</h3></b>&nbsp;&nbsp;</legend>
	<div id="nform">
	<form id="login" name="login" method="post" >
      <?php echo $msg;?>
		<table border="0" cellpadding="5" cellspacing="12" align="center">
			<tr>
				<td><label for="user"><b>Employee ID : &nbsp;</b></label></td>
				<td><input type="text" class="textbox" autofocus name="e_id" id="e_id"  readonly required="required" value="<?php echo $e_id ?>"/></td>
                <td><img src="images/right.png" align="right"></td>
			</tr>
			
			<tr>
				<td><label for="pass"><b>Employee Name : </b></label></td>
				<td><input type="text" class="textbox" name="name" id="e_name" value="<?php echo $sname;?>"  readonly /></td>
                <td><img src="images/right.png" align="right"></td>
			</tr>
            <tr>
				<td><label for="pass"><b>Designation : </b></label></td>
				<td><select class="textbox" name="deg" id="pass">
				<option value="">Select Designation</option>
		<option value="System Analyst">System Analyst</option>
		<option value="Maintanance Officer">Maintanance Officer</option>
		<option value="Office Stuff">Office Stuff</option>
		<option value="Others">Others</option>
		</select></td>
			</tr>
			<tr>
				<td><label for="pass"><b>Username : </b></label></td>
				<td><input type="text" class="textbox" name="user"  id="e_id"  value="<?php echo $e_id ?>" readonly required="required" /></td>
                <td><img src="images/right.png" align="right"></td>
			</tr>
			<tr>
				<td><label for="pass"><b>Password : </b></label></td>
				<td><input type="password" class="textbox" name="password"  required="required"id="pass" /></td>
			</tr>
			<tr>
				<td><label for="pass"><b>Confirm Password :  </b></label></td>
				<td><input type="password" class="textbox" required="required" name="cpassword" id="pass" /></td>
			</tr>
			<tr>
				<td colspan="2">
					<hr />
					<br />
					<center>
					<input type="submit" class="btnLogin" name="btnSave" value="SAVE" />		
				</td>
			</tr>
		</table>
	</form>
	</fieldset>
	</div> <!--#denied-->
		  
          </div><!-- end content -->
		</div><!-- end of tooplate_wrapper -->
    </div> <!-- end of content -->
</div>

<div id="footer">
    
	<div id="social_box">
		
    </div>
    
    <div id="footer_left">
		
		2015 © CSE Department,DUET<br />
           </div>
	
    <div class="cleaner"></div>
</div>

<!--   Free Website Template by t o o p l a t e . c o m   -->
</body>
</html>