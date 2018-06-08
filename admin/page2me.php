<?php
 mysql_select_db('oln',mysql_connect('localhost','root','')); 
?>
<!DOCTYPE html>
<head>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
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
<link rel="stylesheet" href="css/coda-slider1.css" type="text/css" charset="utf-8" />

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
                <?php include('menumm.php')?>
            </div>
			
	
	</div> <!-- end of sidebar -->  
    
        <div id="div1" class="content1">
		
<?Php
	
	 $id=$_REQUEST['id'];
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	    mysql_select_db("oln",$link) or die ("Cannot select the database!");
	   $result ="SELECT n_id,n_title,n_pub,file,texts FROM notices where n_id='$id'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$memo=$row['n_id'];
		    $title=$row['n_title'];
			$dat=$row['n_pub'];
			$files=$row['file'];
			$texts=$row['texts'];
			
		}?>
		
     <table width="700px" height="700px" border="0" bordercolor="#99CC00" class="bod">
      <tr>
       <td valign="top" height="100px" align="center"  class="hed" bgcolor="#FFFFFF"><img src="images/images.jpg" width="100px" height="100px"></td>
     	<td colspan="2" height="100px" class="hed1" bgcolor="#FFFFFF"><br/>&nbsp; &nbsp;&nbsp; &nbsp; Dhaka University Of Engineering & Technology <br/> &nbsp; &nbsp;&nbsp; &nbsp;Department Of Computer Science & Engineering</td>
      </tr>
           <tr height="30px">
     	<td valign="top" colspan="2" align="left" class="memo"> <br/>Memo No:<?php echo $memo; ?></td>
        <td valign="top" align="center" class="dat"><br/>Date:<?php echo $dat; ?></td>
      </tr>
           <tr>
     	<td valign="top" colspan="3"> <br/><h2><u><?php echo $title; ?></u></h2><?php echo $texts; ?></td>
      </tr>
       <tr>
        <td   height="30px" align="left"colspan="1"valign="top"><b>Attach Files :</b> <?php if($files=="" || $files==" "){ echo "No Attach Files"; } else { echo "<a href='./upload/$files'> Download </a>";}?></td>
        <td valign="top" colspan="2" align="right"> <button onclick="printContent('div1')">Print Content</button></td>
      </tr>
     </table>

          </div>
         
          <!-- end content -->
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