<?php include 'functions/conn.php'; 
    session_start();
	if (!$_SESSION['user']){
	header("location:../guest"); }
	
	$member_id=$_SESSION['user'];
	 ?>
    <?php
	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	   $id=$_REQUEST['id']; 
	   $result ="SELECT n_id,n_title,n_cat,n_cat_no,n_pub,n_by,file,texts FROM notices WHERE n_id='".$id."'";
		$tt=mysql_query($result);
		while($row = mysql_fetch_array($tt))
        {
			$id=$row['n_id'];
			$title=$row['n_title'];
			$cat_name=$row['n_cat'];
			$cat_no=$row['n_cat_no'];
			$date=$row['n_pub'];
			$p_by=$row['n_by'];
			$file=$row['file'];
			$texts=$row['texts'];
        }	
	?>
    <?php
if(isset($_POST['btnUpdate']))
{
	    $nid=$_POST['n_no'];
		$title=$_POST['title'];
		$cat_no=$_POST['cat_no'];
		$p_by=$_POST['up_by'];
		$file=$_POST['file'];
		$texts=$_POST['texts'];
		$to = date("Ymd");
	    $fg=0;
		
			$result ="SELECT cat_name FROM catagory_tb WHERE cat_no='$cat_no' ";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
           {			
			$cat_name=$row['cat_name'];	
		   }
			
	//for File Upload start
	$filename = $_FILES["file"]["name"];
	$file_basename = substr($filename, 0, strripos($filename, '.')); // get file extention
	$file_ext = substr($filename, strripos($filename, '.')); // get file name
	$filesize = $_FILES["file"]["size"];
	$allowed_file_types = array('.doc','.docx','.rtf','.pdf','.jpeg','.jpg','.png');	
	if (in_array($file_ext,$allowed_file_types) && ($filesize < 2000000000000))
	{	
		// Rename file
		//$newfilename = md5($file_basename) . $file_ext;
		// $fname=($nid.$to.$e_id);
		$newfilename = rand(1,9999).$file_ext;
		//$newfilename = $fname.$file_ext;
		if (file_exists("upload/" . $newfilename))
		{
			// file already exists error
			echo "You have already uploaded this file.";
			$fg=1;
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"], "upload/". $newfilename);
		
			//echo "File uploaded successfully.";		
		}
	}
	   //for File Upload End
	   
	   if($fg==0)
	   {		
		$q1=mysql_query("UPDATE notices SET n_id='$nid',n_title='$title',n_cat='$cat_name',n_cat_no='$cat_no',n_by='$p_by',file='$newfilename',texts='$texts' WHERE n_id ='$nid'");
		if($q1)
		{
		$msg="Record Successfully Updated";
		}
		else
		{

		$msg="Not Update Your Record" ;
		}

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
		<?php echo "<br><center><h3> $msg </center></h3>";?>
 <fieldset>
			  <legend>&nbsp;&nbsp;<b>Update Notice</b>&nbsp;&nbsp;</legend>
		<div id="nform">
	<form id="login" name="login" method="post" enctype="multipart/form-data" >
  
		<table border="0" cellpadding="5" cellspacing="12" align="center">
			<tr>
				<td><label for="user"><b>Memo No : &nbsp;</b></label></td>
				<td><input type="text" class="textbox" autofocus name="n_no" value="<?php echo $id; ?>"  readonly/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>
			
			<tr>
				<td><label for="pass"><b>Title : </b></label></td>
				<td><input type="text" class="textbox" name="title" value="<?php echo $title; ?>" /></td>
			</tr>
			<tr>
            <td><label for="pass"><b>Catagory : </b></label></td>
	    	<td><select class="textbox" name="cat_no" id="pass">
             <option value="<?php echo $cat_name; ?>"><?php echo $cat_name;?></option>
            <?php 
			
			 $result ="SELECT *FROM catagory_tb ";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
           {			
			$cat_no=$row['cat_no'];
			$cat_name=$row['cat_name'];	
	    	echo "<option value='$cat_no'>$cat_name</option>";
			}
		
			?>
           
            </select>
		</td>
			</tr>

			<tr>
            
				<td><label for="pass"><b>Upload By : </b></label></td>
				<td><input type="text" class="textbox" name="up_by" required="required" id="e_id" value="<?php echo $p_by ?>"  readonly/></td>
			</tr>
            <tr>
				<td><label for="pass"><b>Contents: </b></label></td>
				<td>
                <textarea cols="50" rows="10" name="texts" /> <?php echo $texts; ?> </textarea>
                </td>
			</tr>
			<tr>
				<td><label for="pass"><b>File : </b></label></td>
				<td><?php echo $file;?><input type="file"  name="file"  size="70" id="pass"  /></td>
			</tr>
			
						<tr>
				<td colspan="2">
            </select>
					<hr />
					<br />
					<center>
					<input type="submit" class="btnLogin" name="btnUpdate" value="Update" />
					</center>
				</td>
			</tr>
		</table>
	</form>
	 </fieldset>
	</div>
		  
		  
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