<?php include "functions/conn.php";
  session_start();
  $fg=0;
  if (!$_SESSION['user']){
  header("location:../guest"); }
  
	$e_id=$_SESSION['user']; 
	$n_cat_no=$_POST['n_cat_no'];
	$sdat=$_POST['sdat'];
	?>
	<?php 
			$result ="SELECT *FROM admin_details Where e_id='$e_id' ";
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
    
        <div id="content">
                  <div id ="searchs"><center>
        <form name="srch" action="" method="post">
		<b>Catagory:</b>
       <select class="textbox" name="n_cat_no" id="pass">
            <?php 
			  $result ="SELECT *FROM catagory_tb ";
	       	$tt=mysql_query($result);
	       	while($row = mysql_fetch_array($tt))
           {			
			$cat_no=$row['cat_no'];
			$cat_name=$row['cat_name'];	
	    	echo "<option value='$cat_no'>$cat_name</option>";}
			?>
            </select>
         
        <input type="submit" name="sname" value="Search"  size="8px" required="required" />
        
&emsp; &emsp; &emsp; &emsp;&emsp;<b>Pick a Date:</b> <input type="text" id="datepicker" name="sdat" placeholder="Mon/Day/Year(11/20/2015)" /><input type="submit"  value="Search"  size="8px"/>   
</form></center>
        
        </div><br>
		  <?Php
require "config.php";          
$page_name="view_notice.php";
$start=$_GET['start'];
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}


$eu = ($start - 0); 
$limit = 30;                                
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 
$nume = $dbo->query("select count(n_id) from notices")->fetchColumn();
echo "<TABLE class='t1'>";
echo  "<tr><th>Memo No</th><th>Title</th><th>Catagory</th><th>Published Date</th><th>Published By</th><th>Action</th></tr>";

if($n_cat_no==1)
  {
	 $searchid=$sdat ; 
	$query=" SELECT * FROM notices WHERE n_pub='$searchid' AND n_by='$e_id' ORDER BY id DESC limit $eu, $limit ";

	}
	else 
	{
	  $searchid=$n_cat_no ;
	  $query=" SELECT * FROM notices WHERE n_cat_no='$searchid' AND n_by='$e_id' ORDER BY id DESC limit $eu, $limit ";
	}

foreach ($dbo->query($query) as $row) {
$m=$i%2; // required for alternate color of rows matching to style class 
$i=$i+1;   //  increment for alternate color of rows
echo "<tr class='r$m'><td>$row[0]</td><td><a href=page2me.php?id=$row[0]>$row[1]</a></td><td>$row[2]</td><td>$row[4]</td><td>$name</td><td><a href=deletenotice_member.php?id=$row[0]>Delete</a>/<a href=updatenotice_mem.php?id=$row[0]>Update</a></td></tr>";
}

echo "</table>";

if($nume > $limit ){ 
echo "<table align = 'center' width='50%'><tr><td  align='left' width='30%'>";
if($back >=0) { 
print "<a href='$page_name?start=$back'><font face='Verdana' size='2'>PREV</font></a>"; 
} 
echo "</td><td align=center width='30%'>";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
echo " <a href='$page_name?start=$i'><font face='Verdana' size='2'>$l</font></a> ";
}
else { echo "<font face='Verdana' size='4' color=red>$l</font>";}       
$l=$l+1;
}

echo "</td><td  align='right' width='30%'>";
if($this1 < $nume) { 
print "<a href='$page_name?start=$next'><font face='Verdana' size='2'>NEXT</font></a>";} 
echo "</td></tr></table>";

}
?>
		  
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