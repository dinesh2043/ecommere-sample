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
    if(ereg('^[a-öA-Ö]+(-[a-öA-Ö]+)?$', $firstN)) {
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