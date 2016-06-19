<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"type="text/css" href="style.css"/>
<title>Blogspot</title>
</head>

<body style="padding:0;margin:0 auto;background:#19191B";>
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
			<h1 style="color:white;font-family:display;font-size:40px;text-align:center;">Photography</h2>
       </div>             
      <div style="float:right;">
				<a href="https://www.facebook.com"target="_new"><img style="float:right;height:25px;width:25px;margin-top:15px;
					   margin-right:30px;"src="image/facebook.png"/></a>
				<a href="https://www.twitter.com"target="_new"><img style="float:right;height:25px;width:25px;margin-top:15px;
					   margin-right:30px;"src="image/twitter.png"/></a>
				<a href="https://www.instagram.com"target="_new"><img style="float:right;height:25px;width:25px;margin-top:15px;
					   margin-right:30px;"src="image/instagram.png"/></a>        
       </div>       
   </div></br></br></br></br></br>
   <hr style="border:1px dotted white;"/>

   <div id="slider" >
           <a href="#" style="z-Index:1;" class="control_next">>></a>
  			<a href="#" style="z-Index:1;" class="control_prev"><<</a>
 			<ul style="margin-top:10px;">
    			<li><img src="image/1.jpg" width="1200" height="500"/></li>
    			<li><img src="image/2.jpg" width="1200" height="500"/></li>
    			<li><img src="image/3.jpg" width="1200" height="500"/></li>
    			<li><img src="image/4.jpg" width="1200" height="500"/></li>
           </ul>  
                
   </div>
   <?php
		if(isset($_POST["s"]))
		 {
			include("connection.php");
			mysqli_query($con,"insert into signupproject(email,password)values('".$_POST["e"]."','".$_POST["p"]."')");
			$path="uploads/";
		    mkdir($path.$_POST["e"],600);
		    $p2="uploads/".$_POST["e"];
		    mkdir($p2."/profile",600);
		    mkdir($p2."/doc",600);
			$q=mysqli_query($con,"select email,password from signupproject where email='".$_POST["e"]."' and 
			password='".$_POST["p"]."'");
			$r=mysqli_num_rows($q);
			if($r>=1)
			{
				session_start();
				$_SESSION["login"]=$_POST["e"];
				header("location:profile.php");
			}
			else
			{
				echo "invalid email/password";
			}
			
		 }
		 ?>
         <?php
			if(isset($_POST["sb"]))
			{
				include("connection.php");
			mysqli_query($con,"insert into signupproject(email,password)values('".$_POST["u"]."','".$_POST["pw"]."')");
			$path="uploads/";
		    mkdir($path.$_POST["e"],600);
		    $p2="uploads/".$_POST["e"];
		    
			$q=mysqli_query($con,"select email,password from signupproject where email='".$_POST["u"]."' and 
			password='".$_POST["pw"]."'");
			$r=mysqli_num_rows($q);
			if($r>=1)
			{
				session_start();
				$_SESSION["login"]=$_POST["u"];
				header("location:profile.php");
			}
			else
			{
				echo "invalid email/password";
			}
			}
				
			?>
   <div style="width:100%;height:700px;border:2px outset inset;background:#333;margin:0 auto;"><br/><br/>
        <div style="width:90%;height:600px;border:2px outset white;margin:50px auto auto auto;
                    top:20px;botoom:20px;background:url('image/bg.jpg');background-size:cover;">
          <div style="width:600px;height:300px;border:0px outset white;background:rgba(0,0,0,0);top:150px;
                                margin:150px auto auto auto;">
                                <h1 align="center"style="font-family:display;">Remember Everything</h1>
                                <p align="center"style="font-family:display1;color:white;">
                                          A Camera is save button for mind's eye</p>
                                <form action="blog.php"method="post">         
                                  <p>
                                    <input style="width:250px;height:30px;border-radius:5px;"type="text"
                                             placeholder="Email"name="e"required/>            	
                                    <input style="width:250px;height:30px;border-radius:5px;
                                             margin-left:50px;"type="password"placeholder="Password"
                                             name="p"required/><br/><br/>
                                    <input style="width:450px;height:50px;border-radius:0px;
                                              background:rgb(250, 178, 58);
                                             margin-left:60px;color:black;
                                             font-weight:bold;border:0px;"type="submit"
                                             name="s"value="Sign Up For Free"/>
                                 
                      </form> 
                                 </p>
            <table width="600" height="37" border="0">
                                    <tr>
                                      <td width="251"><hr /></td>
                                      <td width="32"><span style="color:white;font-weight:900;">&nbsp;OR</span></td>
                                      <td width="295"><hr /></td>
                                    </tr>
                        </table>
                        <fieldset>
                          <legend>login here</legend>
                          <form action="blog.php"method="post">
                          <label for="email">email:</label>
                          <input type="text" name="u" id="email" />
                          <label for="password">password:</label>
                          <input type="password" name="pw" id="password" />
                          <input type="submit"name="sb"value="click here to login"/> 
                          </form>                         
                                    
            </fieldset>
            
                                                     
                                             
            </div>
                    
                    
        </div>
        
        
           <!--<div style="margin-left:150px;margin-top:130px;width:400px;height:400px;border:1px outset white;
                       box-shadow:1px 1px 1px 0.75px;float:left;border-radius:70px;">
             <h2 style="text-align:center;color:white;">Already A Member</h2>
                <h3 style="text-align:center;font-family:dispaly1;">
                <p style="color:white;">Login Here
                </h2></br> 
                </p>
                <form action="blog.php"method ="post">
                <table width="399" border="0">
                  <tr>
                    <td width="146"><h2 style="font-family:display1;color:white;">Email:</h2></td>
                    <td width="237"><input type="text"name="e1"required/></td>
                  </tr>
                  <tr>
                    <td><h2 style="font-family:display1;color:white;">Password:</h2></td>
                    <td><p>&nbsp;
                      </p>
                      <p>
                        <input type="password"name="p1"required/>
                      </p>
                    <p>&nbsp; </p></td>
                  </tr>
                  <tr>
                  <td colspan="2" align="center">
                  <input style="width:200px;height:35px;background:rgb(250, 178, 58);
                                box-shadow:2px 2px 2px .75px;color:black; font-weight:bold;border:0px;
                                "type="submit"name="sub"/></td>
                  </tr>
                </table>
             </form>                
     </div>
           <div style="margin-right:150px;margin-top:55px;width:400px;height:500px;border:1px outset white;
                       box-shadow:1px 1px 1px 0.5px;float:right;border-radius:100px;">
              <h2 style="text-align:center;color:white;">Create Your Account</h2> 
             <p>&nbsp;</p>
             <table width="397" height="309" border="0">
             <tr>
                 <td width="142"><h2 style="font-family:display1;color:white;">UserName:</h2></td>
                 <td width="245"><label for="UserName">
                   <input type="text" name="UserName" id="UserName" />
                 </label></td>
               </tr>
               
               <tr>
                 <td><h2 style="font-family:display1;color:white;">Email:</h2></td>
                 <td><label for="Email">
                   <input type="text" name="Email" id="Email" />
                 </label></td>
               </tr>
               <tr>
                 <td><label for="Password"><h2 style="font-family:display1;color:white;">Password:</h2></label></td>
                 <td><input type="text" name="Password" id="Password" /></td>
               </tr>
               <tr><td height="121" colspan="3"></br><br>
                 <div align="center">
                   <input style="width:200px;height:35px;background:rgb(250, 178, 58);
                       box-shadow:2px 2px 2px .75px;color:black;text-align:center;font-weight:bold;border:0px;
                       type="submit" name="Submit" id="Submit" value="Submit" />
                 </div>
               </tr>
             </table>
             <p>&nbsp;</p>
           </div>-->
           
           
   </div>
   </br>
   <div style="height:20px;border:1px outset transparent;box-shadow:1px 1px 1px .05px;">
         <img style="width:100%;height:20px;" src="image/art.png"/>
   </div>
   <h1 style="text-align:center;text-transfrom:uppercase;font-style:italics;color:white;font-family:display1;"> 
           Join with our subscribers and get access to forums, group chat and much more!!!!!</h1>
   <div style="float:left;margin-top:40px;">          
         <input style="margin-left:300px;width:400px;height:30px;"type="text"placeholder="Your Email Address...."/> 
         <input style="width:200px;height:35px;background:rgb(250, 178, 58);box-shadow:1px 1px 1px .75px;color:black;
                       font-weight:bold;border:0px;"type="submit"value="SUBSCRIBE ME"/> 
   </div>
   <div style="float:left;">              
   <img style="width:150px;height:110px;"src="image/envelopes.png"/>  
   </div>
   </br></br></br></br></br></br>
   <div style="font-family:display1;">                   
       <hr style="border:1px outset #4a547a;"/> 
       <a href="#"target="_parent"style="height:50px;color:white;text-decoration:none;margin-left:350px;">HOME</a>&nbsp;&nbsp;&nbsp;
       <a href="#"target="_parent"style="height:50px;color:white;text-decoration:none;">ABOUT</a>&nbsp;&nbsp;&nbsp;
       <a href="#"target="_parent"style="height:50px;color:white;text-decoration:none;">AUTHORS</a>&nbsp;&nbsp;&nbsp;
       <a href="#"target="_parent"style="height:50px;color:white;text-decoration:none;">NEWSLETTER</a>&nbsp;&nbsp;&nbsp;
       <a href="#"target="_parent"style="height:50px;color:white;text-decoration:none;">WRITE FOR US</a>&nbsp;&nbsp;&nbsp;
       <a href="#"target="_parent"style="height:50px;color:white;text-decoration:none;">LEGAL</a>&nbsp;&nbsp;&nbsp;
       <a href="#"target="_parent"style="height:50px;color:white;text-decoration:none;">CONTACT</a>&nbsp;&nbsp;&nbsp;
   </div>
   </br>
   <div style="margin-left:500px;color:white;font-family:display1;">
      &copy;2010-2016 ALL RIGHTS RESERVED
   </div> 
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="javaquery.js"></script>  
</div>                              
</body>
</html>
