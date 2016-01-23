<html>
<head>
<title>Format</title>
<link href="style.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- Save for Web Styles (Format.jpg) -->
<style type="text/css">
<!--



-->
</style>
<!-- End Save for Web Styles -->
</head>
<body style="background-color:#FAAA21;">
<!-- Save for Web Slices (Format.jpg) -->
<div id="Table_01">
	<div id="Home-01">
		<img src="images/Home_01.gif" width="900" height="20" alt="">
	</div>
	<div id="Home-02">
		<img src="images/Home_02.gif" width="900" height="136" alt="">
	</div>
	<div id="Home-03">
		<img src="images/Home_03.gif" width="900" height="35" alt="">
	</div>
	<div id="Home-04">
		<img src="images/Home_04.gif" width="158" height="111" alt="">
	</div>
	<div id="Home-btn">
		<a href="Home.php">
		<img src="images/Home_btn.jpg" width="174" height="58" alt="home"></a>
	</div>
	<div id="Home-06">
		<img src="images/Home_06.gif" width="15" height="111" alt="">
	</div>
	<div id="Product-btn">
		<img src="images/Product1.jpg" width="174" height="58" alt="product">
	</div>
	<div id="Home-08">
		<img src="images/Home_08.gif" width="15" height="111" alt="">
	</div>
	<div id="Contact-btn">
		<a href="ContactMe.php">
		<img src="images/Contact1.jpg" width="174" height="58" alt="contact">
	</div>
	<div id="Home-10">
		<img src="images/Home_10.gif" width="190" height="111" alt="">
	</div>
	<div id="Home-11">
		<img src="images/Home_11.gif" width="174" height="53" alt="">
	</div>
	<div id="Home-12">
		<img src="images/Home_12.gif" width="174" height="53" alt="">
	</div>
	<div id="Home-13">
		<img src="images/Home_13.gif" width="174" height="53" alt="">
	</div>
	<div id="Home-14">
		<img src="images/Home_14.gif" width="95" height="898" alt="">
	</div>
	<div id="Body">
	
	<table background="images/Body.gif" width="715" height="699"  border="0" cellspacing="0" cellpadding="0">
<tr align="center" valign="middle" >
          <td width="20%" style="padding-left:5px;">
          
		  
		  <!-- login menu -->
		  <table background="images/body-25.gif"  width="444" cellspacing="0" cellpadding="0">
		  <tr>
		  	<td height="25" style="padding-left:15px;" class="textBold textWhite"></td>
		  </tr>
		  <tr>
		    <td style="border-width:1px; border-style:solid; padding:12px; border-color:#848D8F" class="linkNavy">
			
			 

<?php
// <table background="images/body-25.gif" width="934" height="864"  border="0" cellspacing="0" cellpadding="0"> 
// inserting data to a database




// check wether the submit button has been pressed
if($_POST['submit']){ 
    $firstN = $_POST['firstname'];
    $lastN = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	echo " <a>".$firstN."</a> ";
    if(ereg('^[a-öA-Ö]+(-[a-öA-Ö]+)?$', $firstN)) {
	//if(preg_match('/^[a-zA-Z0-9]+([a-zA-Z0-9\._-]+)+$/', $firstN) {
	     if (ereg('^[a-öA-Ö]+(-[a-öA-Ö]+)?$', $lastN)){
            if(preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $email)) {
            if (ereg('^[a-öA-Ö]+(-[a-öA-Ö]+)?$', $password)){  
            	
            require('dbconnect.php'); // establsih connection ($dbObj comes from dbconnect_object.php)
    
    $sql = "INSERT INTO `customer` ( `ID` , `firstname` , `lastname` , `email` , `password` )
                VALUES (
                NULL , '".$firstN."', '".$lastN."', '".$email."', '".$password."');";                
                            
    if ($dbObj->query($sql)){
        
	echo "<h4>Hello,Sucessfully registered " . $firstN." " .$lastN . "</h4>";
	echo '<a href = "index.html"> Go For Shopping </a><br />';
		 //echo '<a href = "page2.php"> page 2 </a>';
		 
    }
		
   
    }else{
    	echo ("<b>password must be alphabet</b>");
    	include ("register.php");
    	
    }
    	
    }else{
    	echo ("<b>email must be in a format</b>");
    	include ("register.php");
    	
    }
    	
    }else{
    	echo ("<b>last name must be alphabet</b>");
    	include ("register.php");
    	
    }
    	
    }else{
    	echo ("<b>first name must be alphabet</b>");
    	include ("register.php");
    	
    }
    
} else {
      echo "Form not filled";
      include ("register.php");
}

?>
 </td>
		    </tr>
			<tr>
		  	<td height="11" align="center"></td>
		  </tr>
		  <tr>
		  <td><a href= "HomeRegistration.php "></a></td>
		  </tr> 			
		  </table>		  
		   <!-- end login menu -->
		  
		  <!-- left menu -->
		  
		  </table> 	
		
		
		
		
		  
	</div>
	<div id="Home-16">
		<img src="images/Home_16.gif" width="90" height="898" alt="">
	</div>
	<div id="Home-17">
		<img src="images/Home_17.gif" width="715" height="199" alt="">
	</div>
</div>
<!-- End Save for Web Slices -->
</body>
</html>