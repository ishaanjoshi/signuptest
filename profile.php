<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"type="text/css" href="style.css"/>
<title>Profile</title>
</head>

<body style="padding:0;margin:0 auto;background:#313138";>
<?php
include("connection.php");
session_start();
$q=mysqli_query($con,"select * from signupproject where email='".$_SESSION["login"]."'");
$r=mysqli_fetch_assoc($q);
?>
<?php
if(isset($_POST["submit"]))
{
	
	}
?>

    <div style="width:100%;height:20px;border:1px outset transparent;
            margin-top:-6px;position:fixed; z-index:999;background:url('image/art.png');">
         
	</div>
    <div style="height:50px;width:100%;border:0px outset transparent;background:#14181C;box-shadow:1px 1px 1px .05px
            ;position:fixed;margin-top:10px;z-Index:99;">
		<div style="float:left;margin-top:5px;">
			<h2 style="color:white;font-family:display;font-size:20px;text-indent:30px;">Blog</h2>
		</div>
		<div style="float:left;margin-top:5px;">
			<h2 style="color:white;font-family:display;font-size:20px;text-indent:30px;">How To Start A Blog</h2>
		</div> 
		<div style="float:left;margin-top:-15px;margin-left:280px;">
			<h1 style="color:white;font-family:display;font-size:35px;text-align:center;">Photography</h2>
		</div>
		
		<div style="float:right;">
			<a href="https://www.facebook.com"target="_new"><img style="float:right;height:25px;width:25px;margin-top:15px;
					   margin-right:30px;"src="image/facebook.png"/></a>
			<a href="https://www.twitter.com"target="_new"><img style="float:right;height:25px;width:25px;margin-top:15px;
					   margin-right:30px;"src="image/twitter.png"/></a>
			<a href="https://www.instagram.com"target="_new"><img style="float:right;height:25px;width:25px;margin-top:15px;
					   margin-right:30px;"src="image/instagram.png"/></a>        
		</div>       
   </div>
   <div style="width:500px;height:500px;border:1px outset white;margin-top:150px;position:absolute;">
   <form action="profile.php"method="post">
     <table width="232" height="262" border="1">
       <tr>
         <td width="40">first name</td>
         <td width="144"><input type="text" name="firstname" id="firstname" value="<?php  echo $r["email"]; ?>" /></td>
       </tr>
       <tr>
         <td>last name</td>
         <td><input type="text" name="last name" id="last name" /></td>
       </tr>
       <tr>
         <td>phone number</td>
         <td><input type="text" name="phone number" id="phone number" /></td>
       </tr>
       <tr>
         <td>gender</td>
         <td>
         <input type="radio" name="radio" id="gender" value="gender" />male
           <input type="radio" name="radio" id="gender2" value="gender" />
         <label for="gender2">female</label></td>
       </tr>
       <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
       </tr>
       <tr>
         <td>about yourself</td>
         <td><textarea name="about yourself" id="about yourself" cols="45" rows="5"></textarea></td>
       </tr>
       <tr>
         <td colspan="2"><input type="submit" name="submit" id="submit" value="Submit" /></td>
       </tr>
     </table>
</form>
   </div>
   
</body>       
</html>