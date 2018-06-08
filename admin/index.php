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
         <div class="scroll">
            <div class="scrollContainer">
              <div class="panel" id="home">
                <div class="content_section">
                 <h2>Welcome to CSE Department NoticeBoard</h2>
                  <img src="images/images.jpg" alt="Image 01" class="image_wrapper image_fl height="103" width="103"" />
                  <p>Welcome to online CSE department notice board. <br/>All of the notice of CSE Department Will Published Here. <br/>User Can read & download Notice from here.</p>
                </div>
                
             	<div class="panel" id="gallery">
				<div id="gallery_text">
				<h2>CatagoryWise Notices</h2>
				</div>
                <div id="gallery_container">
                  <div class="gallery_box float_l">
                    <h4>Admission</h4>
                    <a href="#"><img src="images/gallery/admission.png" alt="Project 1" /></a> </div>
                  <div class="gallery_box float_r">
                    <h4>Academic</h4>
                    <a href="#"><img src="images/gallery/Graduation.jpg" alt="Project 2" /></a> </div>
                  <div class="gallery_box float_r">
                    <h4>Department Activity</h4>
                    <a href="#"><img src="images/gallery/image_03.jpg" alt="Project 3" /></a> </div>
                  <div class="gallery_box float_l">
                    <h4>Workshop & Semineers</h4>
                    <a href="#"><img src="images/gallery/image_04.jpg" alt="Project 4" /></a> </div>
                  <div class="gallery_box float_r">
                    <h4>Presentation</h4>
                    <a href="all1.php"><img src="images/gallery/image_05.jpg" alt="Project 5" /></a> </div>
                  <div class="gallery_box float_r">
                    <h4>Others</h4>
                    <a href="page1.php"><img src="images/gallery/image_06.jpg" alt="Project 6" /></a></div>
                  <div class="cleaner"></div>
                </div>
              </div>
                </div>
              </div> <!-- end of home -->
			  
              <div class="panel" id="aboutus">
              </div> <!-- end of aboutus -->
			  
              <div class="panel" id="services">
              </div> <!-- end of services -->
			  
              
			  
              <div class="panel" id="contactus">
              </div><!-- end of contactus -->
			  
			  
            </div><!-- end of scroll -->
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