<?php
mysql_select_db('oln',mysql_connect('localhost','root',''));
//
   session_start();
   if (!$_SESSION['user']){
	header("location:../guest"); }
	
if(isset($_POST['btnSave']))
{
	
	$e_id=$_POST['e_id'];
	$name=$_POST['name'];
	
		if ($e_id == "") 
		{
			//$error=1;
			
		}
	else{
		$result ="SELECT e_id FROM admin where e_id='$e_id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {			
			$s_id=$row['e_id'];
        }
	   }
	   if($e_id==$s_id)
	   {
		   $msg="This Member Already Added In Admin Pannel";
		}
		else
		{
			$query = "INSERT INTO admin VALUES ('$e_id', '$name')";
             mysql_query($query);
			 $msg=" $name Succesfully Added In Admin Panel";
		}
}
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
               <?php include('mnm.php')?>
            </div>
		
		
	</div> <!-- end of sidebar -->  
    
        <div id="content">
		        <label><?php echo "<br /><center><h3> $msg </center></h3>";?></label>
       <fieldset>
			 <legend>&nbsp;&nbsp;<b><h3>Adding Member Form</h3></b>&nbsp;&nbsp;</legend> 
		 
	<div id="nform">
	<form id="login" name="login" method="post" >
		<table border="0" cellpadding="5" cellspacing="12" align="center">
			<tr>
				<td><label for="user"><b>Employee ID : &nbsp;</b></label></td>
				<td><input type="text" class="textbox" autofocus name="e_id" id="e_id"   placeholder="Enter Empolyee ID" required="required" /></td>
			</tr>
			
			<tr>
				<td><label for="pass"><b>Employee Name : </b></label></td>
				<td><input type="text" class="textbox" name="name" id="e_name"  placeholder="Enter Empolyee Name" required="required" /></td>
			</tr>
			<tr>
				<td colspan="2">
					<hr />
					<br />
					<center>
					<input type="submit" class="btnLogin" name="btnSave" value="Add" /></center>
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