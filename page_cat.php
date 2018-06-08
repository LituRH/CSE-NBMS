<?php
 mysql_select_db('oln',mysql_connect('localhost','root','')); 
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
                <ul class="navigation">
                    <li><a href="index.php" class="selected menu_01">Home</a></li>
                    <li><a href="" class="menu_02">About</a></li>
                    <li><a href="#" class="menu_03">Addmission</a></li>
                    <li><a href="#" class="menu_04">Academic</a></li>
					<li><a href="#" class="menu_05">Department Activity</a></li>
					<li><a href="#" class="menu_01">Presentation</a></li>
					<li><a href="#" class="menu_02">Messages</a></li>
                    <li><a href="#" class="menu_03">Contact</a></li> 
                    <li><a href="j_login.php" class="menu_02">Login</a></li> 
                </ul>
            </div>
			
	
	</div> <!-- end of sidebar -->  
    
        <div id="content">
       <div id ="searchs"><center>
        <form name="srch" action="" method="post">
		Memo No:<input type="text" name="mname" size="8px" required="required" />
        <button type="submit"  name="sname" size="10px">Search</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Catagory:
        <select>
          <option  selected value="select">Select Catagory </option>
            <option  value="aca">Academic </option>
              <option  value="dactivity">Department Activity </option>
                <option  value="present">Presentation</option>
                <option  value="work">Workshop & semineers</option>
                <option  value="other">Others</option>
        </select>
        <input type="submit" name="sname" value="Search"  size="8px" required="required" />
        

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
echo  "<tr><th>Memo No</th><th>Title</th><th>Catagory</th><th>Text</th><th>Published Date</th></tr>";

$query=" SELECT * FROM notices ORDER BY id DESC   limit $eu, $limit ";

foreach ($dbo->query($query) as $row) {
$m=$i%2; // required for alternate color of rows matching to style class 
$i=$i+1;   //  increment for alternate color of rows
echo "<tr class='r$m'><td>$row[0]</td><td><a href=admin/upload/$row[5] target='_blank'>$row[1]</a></td><td>$row[2]</td><td><a href=page2.php?id=$row[0]>Details</a></td><td>$row[3]</td></tr>";
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