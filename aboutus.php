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
  </head>
<style type="text/css">
  #color{
	  border-style:solid;
	  border-width:20px;
	  border-color:blue red green gold;
  }
  
  #grad1{
	height:100px;
	background-color:red;
	background:linear-gradient(hotpink,coral);
}
  </style>

<body>
<div id="color">

<?php include('admin/function.php'); ?>

 <div class="h_bg">
<div class="wrap">
<div class="header">
		<div class="logo">
<div id="color">
	<h1><a href="index.php"><img src="Images/l.png" width ="10000px" height="200px" alt=""></a></h1>
</div>		</div>
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
<div id="grad1">

		<?php require('header.php');?>
	</div>
  
   
<div style="height:500px;">
     <form method="post" enctype="multipart/form-data">
<div class="s_bg">
<div class="wrap">
<div class="cont_main">
	<div class="content">
		<img src="Images/au.png" width="700px" height="270px"  />
<div style="background-colore:coral;">

		<h4><span class="bold">Why you should donate blood </span></h4>
			<p>  <img src="Images/ab1.png" width="550px" height="500px" style ="margin-left: 100px" class="tableborder" />
      </a>
Blood is differentiated  into different group:


Blood is differentiated into types of A, B, O, AB groups. These blood types were discovered by Karl Landsteiner in 1900 and his birthday June 14 has been celebrated as blood donation day.
In many situations, blood transfusion has been important. blood is usually transfused to replace red blood cells that carry oxygen in various situation necessitate transfusion blood loss due to bleeding, surgery or a medical procedure medical conditions that prevent the body from producing new blood cells medical conditions such as anaemia, kidney disease, cancer, leukaemia, chemotherapy, chronic disease may prevent the production of new blood cells. Transfusion may be necessary until the body is able to produce its own blood cells.

Haemophilia is a rare disorder in which your blood doesn’t clot normally because it lacks sufficient blood. Clotting proteins and use to bleed for longer and that patient will be treated by plasma.
The average adult has about  10points  of blood in his body. Roughly 1 point is given during a situation. A healthy donor may donate red blood cells every 56 days. All donated blood is screened for the laboratory tests.

Age:


You are aged between 18 and 65.

* In some countries national legislation permits 16–17 year-olds to donate provided that they fulfil the physical and haematological criteria required and that appropriate consent is obtained.

* In some countries, regular donors over the age of 65 may be accepted at the discretion of the responsible physician. The upper age limit in some countries is 60.


Weight:

You weigh at least 50 kg.    

* In some countries, donors of whole blood donations should weigh at least 45 kg to donate 350 ml ± 10%.


Health: 


You must be in good health at the time you donate.

You cannot donate if you have a cold, flu, sore throat, cold sore, stomach bug or any other infection.

If you have recently had a tattoo or body piercing you cannot donate for 6 months from the date of the procedure.  If the body piercing was performed by a registered health professional and any inflammation has settled completely, you can donate blood after 12 hours.

If you have visited the dentist for a minor procedure you must wait 24 hours before donating; for major work wait a month.

You must not donate blood If you do not meet the minimum haemoglobin level for blood donation</p>
			<p class="top">Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.
We remind every visitor that we have the empowerment to save lives and let’s do that – right now, right here. If you are eligible for blood donation, please register yourself as a blood donor now!</p>
			<p class="top">We also take this opportunity to thank our whole team for all your ideas, commitment and hard-ship in making this dream a reality. We would also like to thank our friends and well-wishers for all your support and encouragement throughout this project. It is now reasonably safe to say that together we have made this society a slightly better and safer place to live.</p>
		<p class="top">Thank you and Happy Blood donating!</p>	
        <p class="top">Vaishnavi Jande </p>
<p>Ramchandra</p>
<p>Vishnu</p>
        <p class="top">Promoters,</p>
<p>Blood Bank India.</p>
       
	</div>
	<div class="sidebar">
			<div>  
<br /><br /><br /><br /><br />
			       <div>
						<br />
                 </div>       
				 			 
					 <div class="clear"></div>	
				</div>	
	</div>
	
</div>
</div>
		
</form>
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
			<li><a href="admin/admimlogin.php">Admin</a></li>
			
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


<?php
if(isset($_POST["sbmt"])) 
{
	
	$cn=makeconnection();			

			$s="insert into contacts(name,email,mobile,subj) values('" . $_POST["t1"] ."','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"]   ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Record Save');</script>";
	}
	else
	{ 
echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?> 
</div>
</body>
</html>