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

// check if submit was pressed

require('dbconnect.php');
if($_GET['submit2']){    
    $email = $_GET['email2'];
    $password = $_GET['password2'];
    
    if(preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $email)) {
            if (ereg('^[a-öA-Ö]+(-[a-öA-Ö]+)?$', $password)){ 
               //is_numeric check wheter the typed character is a number or not 
    
    
    // if the fields contain only letters
        
    
    // fetch password from db
    $query="SELECT password FROM `customer` WHERE email = '$email';";
    $dbObj->query($query); // perform the query
    
    // put pass to array
    $return = $dbObj->fetchArray();
        $password_db = $return['0'];
        
        

    // check if submitted password is same with pass in database
    // then all info is displayed
    if ($password_db === $password) 
    {
        $query="SELECT ID,firstname,lastname FROM `customer` WHERE email = '$email';";
        $dbObj->query($query);
        // name and lastname assigned to variable
        $return = $dbObj->fetchArray();
        $firstname = $return['1'];
        $lastname = $return['2'];
        
        // assign name and lastname values to session
         $_SESSION['firstname'] = $firstname;
        $_SESSION['lastname'] = $lastname;
        $_SESSION['logged'] = TRUE;
         
         echo "<b>Logged in as " . $firstname." " .$lastname . "</b>";
         //echo '<a href = "page1.php"> page 1 </a><br />';
         echo '<a href = "Home.php"> Home </a>';
         }else {
        
        echo ("<h2>hello user! Please login</h2>");
        include ("Login.php");
        
        // this is displayed just for teachers comfort
        //echo ("<h3>possible users:</h3>");
        //echo ( "<ul> <li>nesh_06@hotmail.com  :  password </li>" .
                // "<li>dinesh5674@yahoo.com  :  password</li></ul>");
        echo("<a href='home.php'>Home</a>");
         }
    }else{
    	echo ("<b>password should be in alphabet</b>");
    	include ("Login.php");
    }
    	
            }else{
    	
    	echo ("<b>email must be format</b>");
    	include ("Login.php");
    	
    }
        
                     
   

// this is displayed if submit was not pressed
} else {
        echo "<b>press submit button</b>";
        include ("Login.php");
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