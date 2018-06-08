<?php include 'functions/conn.php'; 
session_start();
$eid=$_SESSION['user'];
if (!$_SESSION['user']){
	header("location:../guest"); } 
	?>
    	 <?php 
			  $result ="SELECT *FROM admin_details Where e_id='$eid' ";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
           {			
			$name=$row['name'];	
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
print "<p style=\"color:black;  padding-top:10px;text-align:left;padding-left:22px;font-weight:bold\">\n";
print date("F d, Y");
print "<br>\n";
//print date("h:i:s A T");
print "</p>\n";
?>
            <div id="header">
                <h1><img src="images/logonotice.jpg" title="Notice Board - Department of CSE" alt="Notebook free html template" /></h1>
            </div>    
			
            <div id="menu">
                 <?php include('menumm.php')?>
            </div>
		
		
	</div> <!-- end of sidebar -->  
    
        <div id="content">
         
		<div id="welcome">
<?php

		echo '<center><h2>Welcome To&nbsp; &nbsp;'.$name.' !!<br/><br/>Online Notice Management System!</h2></center>';
		echo '
			<br><fieldset>
			  <legend><b><h2>&nbsp;&nbsp;About Member&nbsp;&nbsp;</h2></b></legend>
					<font size="3" color="black">
					<p>This Is The Member Homepage.
					The member can access 
			this site after the permission of the admin.
			After completting registration process, 
			member can access the site.</p></font>
			</fieldset><br/><br/>	
			';
			
		echo '
			<fieldset>
			 	  <legend><b><h2>&nbsp;&nbsp;What Can Member Do?&nbsp;&nbsp;</h2></b></legend>
			 <ul><font size="3" color="black">
			 <li>Member Can View Those Notices That He Upload.</li></br>
			 <li>Member Can Upload Any Notices.</li></br>
			  <li>Member Can Update Those Notices That He Uploaded.</li></br>
			  <li>Member Can Delete Those Notices That He Uploaded</li></br>
		 </ul></br>
			</fieldset>';
	?>
	</div> <!--#welcome-->
		  
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