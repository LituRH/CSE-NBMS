<?php
 mysql_select_db('oln',mysql_connect('localhost','root','')); 
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Welcome to NoticeBoard </title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />
<link href="csstooplate_style.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="style1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/coda-slider.css" type="text/css" charset="utf-8" />


</head>
<body>
	
<div id="slider">
	<div id="tooplate_wrapper">
        <div id="tooplate_sidebar">
		<?php
print "<p style=\"color:black; padding-left:75px; text-align:left; font-weight:bold\">\n";
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
       <div id ="searchs"><center>
        <form name="srch" action="search_notice.php" method="post">
		Catagory:
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
         
        <input type="submit" name="sname" value="Search"  size="8px"/>
        

</form></center>
        
        </div>
          <?Php
require "config.php";          
$page_name="index.php";
$start=$_GET['start'];
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}


$eu = ($start - 0); 
$limit = 10;                                
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 
$nume = $dbo->query("select count(n_id) from notices")->fetchColumn();
echo "<TABLE class='t1'>";
echo  "<tr><th>Memo No</th><th>Title</th><th>Catagory</th><th>Published Date</th><th>Details</th></tr>";

$query=" SELECT * FROM notices ORDER BY id DESC   limit $eu, $limit ";

foreach ($dbo->query($query) as $row) {
$m=$i%2; // required for alternate color of rows matching to style class 
$i=$i+1;   //  increment for alternate color of rows
echo "<tr class='r$m'><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[4]</td><td><a href=page2.php?id=$row[0]>Click Here</a></td></tr>";
}
echo "</table>";

////<a href=admin/upload/$row[5] target='_blank'>

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