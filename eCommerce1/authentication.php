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
if($_GET['submit2']){    
    $email = $_GET['email2'];
    $password = $_GET['password2'];
    
    if(preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $email)) {
            if (ereg('^[a-öA-Ö]+(-[a-öA-Ö]+)?$', $password)){ 
               //is_numeric check wheter the typed character is a number or not 
    
    require('dbconnect.php');
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
         
         echo "<h4>Logged in as " . $firstname." " .$lastname . "</h4>";
         //echo '<a href = "page1.php"> page 1 </a><br />';
         echo '<a href = "home.php"> Home </a>';
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
    	echo ("<h2>password should be in alphabet</h2>");
    	include ("Login.php");
    }
    	
            }else{
    	
    	echo ("<h2>email must be format</h2>");
    	include ("Login.php");
    	
    }
        
                     
   

// this is displayed if submit was not pressed
} else {
        echo "<h2>press submit button</h2>";
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