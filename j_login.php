<?php session_start(); mysql_select_db('oln',mysql_connect('localhost','root','')); 
if($_SESSION['user'] == 'administrator'){
	if ($_SESSION['user']){
	header("location: admin");
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
print date(" F d, Y");
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
          <div id="denied">
		<?php include "functions/login.php" ?>
	</div> <!--#denied-->
	
	<div id="formlogin">
	<fieldset>
			  <legend>&nbsp;&nbsp;<b><h3>Login Form</h3></b>&nbsp;&nbsp;</legend>
	<form method="POST" action="">
		<table border="0" cellpadding="5" cellspacing="12" align="center">
			<tr>
				<td><label for="user"><b>User ID : &nbsp;</b></label></td>
				<td><input type="text" class="textbox" autofocus name="user" id="user" /></td>
			</tr>
			<tr>
				<td><label for="pass"><b>Password : </b></label></td>
				<td><input type="password" class="textbox" name="pass" id="pass" /></td>
			</tr>
			<tr>
				<td colspan="2">
					<hr />
					<br />
					<center>
					<input type="submit" class="btnLogin" name="login" value="Login" />
					&nbsp;
					<input type="reset" class="btnLogin" name="reset" value="Reset" /> &nbsp;
                    <a href="v_login.php"><h3><br/>New Members?</h3></a>
					</center>
					<br /><br />
					<center></center>
				</td>
			</tr>
		</table>
	</form>
	</fieldset>
	</div> <!--#denied-->
</div> <!--#body-->
          </div><!-- end content -->
		</div><!-- end of tooplate_wrapper -->


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