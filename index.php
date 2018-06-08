<?php
 mysql_select_db('oln',mysql_connect('localhost','root','')); 
?>
<!DOCTYPE html>
<head>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>     <!-- link to the jQuery library (see http://jquery.com) -->
	
	<!-- you can use these links, but better you have a link to the versions you need -->
    <!-- usage of folder "current" is not recommended -->
    <!-- see http://beaverslider.com/how-to-setup/docs/general for more info -->
    <script src="http://beaverslider.com/code/current/beaverslider.js"></script>         <!-- link to a framework -->
	<script src="http://beaverslider.com/code/current/beaverslider-effects.js"></script> <!-- link to a set of effects -->
	
	<!-- if you want to make styling link some css files -->
    

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Welcome to NoticeBoard </title>
        <link rel="stylesheet" type="text/css" href="js1/default.css">
		<link rel="stylesheet" type="text/css" href="js1/component.css">
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="tooplate_style1.css" rel="stylesheet" type="text/css" />
<link href="csstooplate_style.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="style1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/coda-slider1.css" type="text/css" charset="utf-8" />

		<script src="js1/ga.js" async="" type="text/javascript"></script><script src="js1/modernizr.js"></script>
		<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-7243260-2']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
	<link href="demoadpacks.css" type="text/css" rel="stylesheet"><script src="js1/C6AILKT.json" type="text/javascript" id="_carbonads_projs"></script>

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
               <?php include('mn.php')?>
          </div>
			
	
	</div> <!-- end of sidebar -->  
    
        <div id="content">
         <div class="scroll">
            <div class="scrollContainer">
              <div class="panel" id="home">

                <div class="content_section">
                 <script>
	
	$(function(){
      var slider = new BeaverSlider({
        structure: {
          container: {
            id: "my-slider",
            width: 400,
            height: 220
          }
        },
        content: {
          images: [
            "img/15a.jpg",
            "img/7a.jpg",
			"img/17a.jpg",
			"img/11a.jpg",
			"img/5a.jpg",
			"img/13a.jpg",
			"img/1a.jpg",
            "img/3a.jpg",
			"img/9a.jpg"
          ]
        },
        animation: {
          effects: effectSets["slider: big set 2"],
          interval: 600
        }
      });   
	});
	
	</script>
	
	<div id="my-slider"></div>
                </div><div class="last_section">
				<h3><b>Welcome to CSE Department NoticeBoard</b></h3><hr/>
                  <p>Welcome to online notice board of CSE department.
					Here, user can view all of notices that have been
					published from CSE department or alternatively 
					only those notices that fall within a particular
					category.
					User can read the notice & also
					enable to download/print the notice.</p>
				</div>

			 
             	<div class="panel" id="gallery">
				<div id="gallery_text">
				<h2><b><center>CategoryWise Notices</center></b></h2>
				</div>
                <div id="gallery_container">
                <div id="vi">
                <table border="0" bgcolor="#FFFFFF" cellspacing="0px" cellpadding="0px" height="360">
                	<tr>
                    	<td><ul class="grid cs-style-5">
				<li>
					<figure>
						<img src="img/4.jpg" alt="img03">
						<figcaption>
                        <?php echo "<a href='catbynotice.php?id=2' class='alinks'>All Academic Notices</a>"?>
							
						</figcaption>
                        <?php echo "<a href='catbynotice.php?id=2' class='alinks'>Academic Notices->></a>"?>
                    
					</figure>
                    
				</li></ul></td>
                        <td><ul class="grid cs-style-5">
				<li>
					<figure>
						<img src="img/33.jpg" alt="img03">
						<figcaption>
                         <?php echo "<a href='catbynotice.php?id=3' class='alinks'>Department Activity Notices</a>"?>
						</figcaption>
                         <?php echo "<a href='catbynotice.php?id=3' class='alinks'>Department Activity->></a>"?>        
					</figure>
				</li></ul></td>
                <td><ul class="grid cs-style-5">
				<li>
					<figure>
						<img src="img/11.jpg" alt="img03">
						<figcaption>
                         <?php echo "<a href='catbynotice.php?id=4' class='alinks'>Addmission Notices</a>"?>	
						</figcaption>
                        <?php echo "<a href='catbynotice.php?id=4' class='alinks'>Addmission Notices-->></a>"?>
					</figure>
				</li></ul></td>
                    </tr>
                    <tr>
                    	<td><ul class="grid cs-style-5">
				<li>
					<figure>
						<img src="img/6.jpg" alt="img03">
						<figcaption>
                         <?php echo "<a href='catbynotice.php?id=5' class='alinks'>WorkShop & Seminars</a>"?>
						</figcaption>
                            <?php echo "<a href='catbynotice.php?id=5' class='alinks'>WorkShop & Seminars-->></a>"?>
					</figure>
				</li></ul></td>		
                        <td><ul class="grid cs-style-5">
				<li>
					<figure>
						<img src="img/5.jpg" alt="img03">
						<figcaption>
							<?php echo "<a href='catbynotice.php?id=6' class='alinks'>Thesis & Project Presentation</a>"?>
						</figcaption>
                        	<?php echo "<a href='catbynotice.php?id=6' class='alinks'>All Presentation-->> PresentationProject</a>"?>
					</figure>
				</li></ul></td>
                <td><ul class="grid cs-style-5">
				<li>
					<figure>
						<img src="img/22.jpg" alt="img03">
						<figcaption>
							<a href="page1.php">All Notices</a>
						</figcaption>
                        <a href="page1.php" class="alinks">All Notices-->></a>
					</figure>
				</li></ul></td>
                    </tr>
            
				
				</table>
				</div>	
              </div>
			  </div><!-- end of home -->
              </div> 
			  
             
            
			  
            </div><!-- end of scroll -->
			
          </div><!-- end content -->
		  <div id="bottomend"><h3><u><center>Important Links</center></u></h3>
				<table border="0" height="10" width="700">
				
				<tr>
				 <td><a href="http://duet.ac.bd/index.php">DUET</a></td>
				 <td><a href="http://www.duetbd.com/eregistration/">DUET Online Registration</a></td>
				 <td><a href="http://duet.ac.bd/index.php?page=lib">DUET Central Library</a></td>
				 <td><a href="http://duet.ac.bd/index.php?page=cc_head">DUET Computer Society</a></td>
				 <td><a href="http://duet.ac.bd/index.php?page=more1_news">Form Download</a></td>
				
				</tr>
				
				</table>
	
		  
		</div><!-- end of tooplate_wrapper -->
		
    </div> <!-- end of slider -->
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