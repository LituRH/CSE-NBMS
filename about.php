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
                <?php include('mn.php')?>
            </div>
			
	
	</div> <!-- end of sidebar -->  
    
        <div id="content">
	<fieldset>
			  <legend><h3> &nbsp; &nbsp;ABOUT DUET &nbsp;</h3></legend>	
<p><font color="black">Dhaka University of Engineering & Technology, Gazipur is one of the reputed universities for the study in Bangladesh. The University originated in 1980 as a Faculty of Engineering under the University of Dhaka offering four years ' Bachelor degree in Civil ,Electrical and Electronic and Mechanical Engineering ' to help meet the growing need for advanced engineering education in Bangladesh. With new technologies appearing faster than developing countries can absorb them, the technology gap between developing and industrialized nations continue to widen at an alarming rate. A major reason for this widening gap is the lack of skilled engineers capable of integrating new technologies into existing, systems and networks. To alleviate this situation by educating engineers with the ability to plan, administer and manage the latest technologies, in June, 1986, under its name of Bangladesh Institute of Technology, Dhaka, the Institute became an autonomous institution empowered to award degrees. From 1st September 2003, the Institute has started its journey as a full-fledged University named as Dhaka University of Engineering and Technology, Gazipur. Till today, it has produced around 5856 graduates in different branches of engineering and has established a good reputation all over the world for the quality of its graduates. The curricula of DUET,Gazipur address the regions' practical needs, present and future, through undergraduate and graduate programs.</p>
         </font></fieldset><br>
		 <fieldset>
			  <legend><h3> &nbsp; &nbsp;ABOUT CSE DEPARTMENT &nbsp;</h3></legend>	
<p> <font color="black">In order to prepare potential and productive persons in industry and academia, as well as in government sector, in the undergraduate and graduate programs of the Department of CSE of DUET an excellent environment of teaching, learning, and research in computing and IT has been maintained from the very past. In particular, we aim:

    To produce highly qualified and all-rounded graduate possessing fundamental knowledge of computing and information technology who can provide leadership and service to Bangladesh and the world.
    To pursue creative research and new innovations in Computer Science and Engineering and across disciplines in order to serve the needs of industry, government, society, and the scientific community by expanding and contributing to the body of knowledge in the field.
    To develop strong partnerships with industrial and government and non-government agencies, professional societies, and local communities.</b></p>   </fieldset>
		 </font> 
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