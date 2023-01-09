<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood bank Management System</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
  <style type="text/css">
  #color{
	  border-style:solid;
	  border-width:20px;
	  border-color:blue red green gold;
  }
  
 #grad{ background-image:linear-gradient(hotpink,yellow);}
  
#grad1{
	height:100px;
	background-color:red;
	background:linear-gradient(hotpink,coral);
}
</style>
  </head>

<body>
<div id="color">
 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
			<div id="color">
			<h1><a href="index.php"><img src="Images/l.png" width ="10000px" height="200px" alt=""></a></h1>
</div>
		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
<div id="grad1">

		<?php require('header.php');?>
	<div>

        </div>

          <div class="h_btm_bg">
<div class="wrap">
<div class="h_btm">
	<div class="header-para">
		<img src="Images/h.png"/>		
		<p><h1>Importance of blood donation</h1> 
		<div id="grad">
Blood is the most essential thing for human life. It is an inhuman body fluid that delivers necessary substances such as nutrients and oxygen to the cells. Technically, blood is a transport liquid pumped by the heart (or an equivalent structure) to all parts of the body, after which it is returned to the heart to repeat the process. To donate blood or platelets, you must be in good general health, weigh at least 110 pounds, and be at least 16 years old. Parental consent is required for blood donation by 16-year-olds; 16-year-olds are NOT eligible to donate platelets. No parental consent is required for those who are at least 17 years old.a donate?

Every adult human being (male or female) has 5 to 6 litres of blood. 

*Any person between 18 and 60 years, weighing 45 kg or more can safely donate one unit of blood, that is, 350 ml once every three months.
</p></div>
	</div>  
	
	<div class="clear"></div>
</div>
</div>
</div>
<div class="h_btm">
<div class="wrap">
<div class="header-para">
 <p>
<h1>Why is blood important? </h1>
<div id="grad">
Blood brings oxygen and nutrients to all the parts of the body so they can keep working. Blood carries carbon dioxide and other waste materials to the lungs, kidneys, and digestive system to be removed from the body. Blood also fights infections and carries hormones around the body.
</p> </div>
               
        </div>
      
	
	   <div class="clear"></div>
</div>
	<div>
	<br/>               <br />
     
                   
                
				 
				</div>	
			
			
	</div>
	<div class="clear"></div>
	</div>
</div>
</div>
</div>

        </div>
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li class="active"><a href="index.php">Home</a></li>			
			<li><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			<li><a href="admimlogin.php">Admin</a></li>
			
			
            </ul>
	</div>
</div>
	<div class="copy">
			<p class="title">© All Rights Reserved </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>

</div>
</body>
</html>