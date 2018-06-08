<?php
mysql_select_db('oln',mysql_connect('localhost','root',''));
//
   session_start();
   if (!$_SESSION['user']){
	header("location:../guest"); }

	    $result ="SELECT *FROM catagory_tb ";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {			
			$cat_noo=$row['cat_no'];
        }
	$cat_noo=$cat_noo+1;
if(isset($_POST['btnSave']))
{
	
	        $cat_type=$_POST['cat_name'];  
			$query = "INSERT INTO catagory_tb VALUES ('$cat_no', '$cat_type')";
             mysql_query($query);
			 $msg= $cat_type." Succesfully Added In Category List!!";
			  $result ="SELECT *FROM catagory_tb ";
		     $tt=mysql_query($result);
		       while($row = mysql_fetch_array($tt))
               {			
			    $cat_noo=$row['cat_no'];
                }
	             $cat_noo=$cat_noo+1;
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
			 <legend>&nbsp;&nbsp;<b><h3>Adding Category Form</h3></b>&nbsp;&nbsp;</legend>
		 
	<div id="nform">
	<form id="login" name="login" method="post" >
		<table border="0" cellpadding="5" cellspacing="12" align="center">
			<tr>
				<td><label for="user"><b>Catagory No : &nbsp;</b></label></td>
				<td><input type="text" class="textbox"  size="10" autofocus name="e_id" id="e_id"  readonly disabled  value="<?php echo $cat_noo;?>" /></td>
			</tr>
			
			<tr>
				<td><label for="pass"><b>Catagory Name : </b></label></td>
				<td><input type="text" class="textbox" name="cat_name" id="e_name"  size="50" placeholder="Enter Catagory Name" required="required" /></td>
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

</body>
</html>