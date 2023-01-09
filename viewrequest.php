
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
</style>

  <style>
#grad{
/*	background-image:linear-gradient(to right,rgba(255,0,0,0),rgba(255,0,0,1)); */
height:100px;
	background-color:red;
	background:linear-gradient(hotpink,coral);
}

  </style>
</head>

<body>
<div id="color">
			<?php include('admin/function.php'); ?>

 <div class="h_bg">
<div class="wrap">
<div class="header">
<div id="color">
		<div class="logo">

			<div id="color"> <h1><a href="index.php"><img src="Images/l.png" width ="10000px" height="200px" alt=""></a></h1>  </div>			
</div>	 </div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
<div id="grad">

		<?php require('header.php');?>
	</div>
</div>
/*
<div style="height:1100px; width:1100px; margin:auto; background:linear-gradient(pink,yellow); border:2px solid red; box-shadow:4px 1px 40px black;">
*/
<div style="widht:1100px; height:1100px;  background:linear-gradient(to right,rgba(255,0,0,0),rgba(255,0,0,1));
margin:auto; margin-top:10px; margin-bottom:10px; background-color:#ffff00; border:2px solid red; box-shadow:4px 1px 20px black;">
     <form method="post" enctype="multipart/form-data">
 <table cellpadding="10" cellspacing="10" width="1000px" height="500px"  style="margin:auto" >

   <tr><td colspan="7" align="center"><img src="Images/br.png" width:"90px" height:"700px" /></td></tr>

   <tr><td>&nbsp;</td><td>&nbsp;</td></tr>   
 <tr style="background-color:bisque" align="center" class="bold">            
             <td class="bold" style="color:red"  >Blood Group</td><td align="center">Name</td><td align="center">Gender</td><td align="center">Age</td><td align="center">Mobile No</td><td align="center">Email</td>
<td align="center">bg id</td>           
		   
        </tr>




<?php

	
$cn=mysqli_connect("localhost","root","","bloodbank");
$s="select * from requestes";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
				echo"<tr><td  style=' padding-left:50px'>$data[0]</td><td  style=' padding-left:10px'>$data[1]</td><td  style=' padding-left:20px'>$data[2]</td><td  style=' padding-left:30px'>$data[3]</td><td  style=' padding-left:50px'>$data[4]</td><td  style=' padding-left:50px'>$data[5]</td> <td  style=' padding-left:60px'>$data[6]</td> ";
			}
			mysqli_close($cn);
			?>


</table>
</form>
        </div>
          
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
	
		<ul>
<div id="grad1"> 
	<li class="active"><a href="index.php">Home</a></li>			
			<li><a href="donar.php">Donor</a></li>
            <li><a href="login.php">log In</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
             	</div>
				
            </ul>
	</div>

</div>
</div>
</div>




		<table>
		<tr>
 <h4>O+  13</h4>   
 <h4>O-   14</h4>
 <h4>AB+  15</h4>
 <h4>AB- 16</h4>
 <h4>A+   17</h4>
 <h4>A-  18</h4>
 <h4>B+  19</h4>
 <h4>B-   20</h4>
 </tr>
               </table>    			
		<div class="copy">
			<p class="title">© All Rights Reserved by Vaishnavi Jande</p>
		</div>
	<div class="clear"></div>
			   </div>		

</div>	
</body>
</html>