<?php

require "config.php";
$error0 = "";
$error2 = "";
$error3 = "";
$error4 = "";
$error5 = "";
$error6 = "";
$error7 = "";


if(
    !isset($_POST["customerfName"]) || !isset($_POST["customerlName"])  || !isset($_POST["phoneNumber" ]) || !isset($_POST["emailAddress"]) || !isset($_POST["username"]) || !isset($_POST["referral"]))                                                                                                                             
   
{

}//end if

else 
    
{
  
    if( $_POST["customerfName"] == ""  || $_POST["customerlName"] == "" || $_POST["phoneNumber"] == ""  || $_POST["emailAddress"] == "" || $_POST["username"] == ""  || $_POST["referral"] == "Select referer")
                                                                                                                                    
    {  
    if($_POST["customerfName"] == "")
    {
        
        $error2 = "PLease enter your first name". "</br>";
    }
    
    if($_POST["customerlName"] == "")
    {
        
        $error3 = "PLease enter your last name". "</br>";
    }
    
    if($_POST["phoneNumber"] == "")
    {
        
        $error4 = "PLease enter your phoneNumber". "</br>";
    }
    
    if($_POST["emailAddress"] == "")
    {
        
        $error5 = "PLease enter your emailAddress". "</br>";
    }
    
    if($_POST["username"] == "")
    {
        
        $error6 ="PLease enter your username". "</br>";
    }
    
    if($_POST["referral"] == "Select referer")
    {
        
        $error7 = "PLease select how did you hear about us". "</br>";
    }
    }

    else 
    
    {
    
        try {
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully" . "</br>";
            
            $sqlQuery = "SELECT emailAddress FROM mailinglist WHERE emailAddress ='".$_POST["emailAddress"]."'";
            
            
            $result = $pdo->query( $sqlQuery );
            
            $rowCount = $result->rowCount();
            
            if( $rowCount>0){
                
                $error5 = "Email address already esists. Please use a new email address" . "</br>";
            }
            else
            {
                
                $sqlQuery = "INSERT INTO mailinglist (firstName, lastName, phoneNumber, emailAddress, username, referrer) VALUES('".$_POST["customerfName"]."', '".$_POST["customerlName"]."', '".$_POST["phoneNumber"]."', '".$_POST["emailAddress"]."', '".$_POST["username"]."', '".$_POST["referral"]."')";
            
            try {
                $result = $pdo->query( $sqlQuery );
                $error0 = "Account Successfully Created". "<br>";

            }
            catch(PDOException $e) {
                echo "Account Could not be Created:  " . $e->getMessage();
            }
            
            $pdo = null;
        }
        

        }
        catch(PDOException $e) 
        {
            $error0 = "Connection failed:  " . $e->getMessage();
            
        }
               
    
}
}

?>


<html>
    <head>
        <title>WP Eatery - Contact Us</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Fugaz+One|Muli|Open+Sans:400,700,800' rel='stylesheet' type='text/css' />
        <link href="css/style.css" rel="stylesheet" type="text/css">
        
        <?php 
		include "Header.php";
		include "Menu.php";
		?>
		
    </head>
    <body>
       
            <div id="content" class="clearfix">
                <aside>
                        <h2>Mailing Address</h2>
                        <h3>1385 Woodroffe Ave<br>
                            Ottawa, ON K4C1A4</h3>
                        <h2>Phone Number</h2>
                        <h3>(613)727-4723</h3>
                        <h2>Fax Number</h2>
                        <h3>(613)555-1212</h3>
                        <h2>Email Address</h2>
                        <h3>info@wpeatery.com</h3>
                </aside>
                <div class="main">
                    <h1>Sign up for our newsletter</h1>
                    <p>Please fill out the following form to be kept up to date with news, specials, and promotions from the WP eatery!</p>

                    <form name="frmNewsletter" id="frmNewsletter" method="post" action="contact.php">
                        <table>
                       		 <tr><td colspan='2' style="color:green"><strong><?php echo$error0;?></strong></td></tr>
                        	<tr><td colspan='2' style="color:red"><?php echo$error2;?></td></tr>
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="customerfName" id="customerfName" size='40'   value="<?php if(isset($_POST["customerfName"]) && $_POST["customerfName"] != ""){echo $_POST["customerfName"];}?>"   ></td>
                            </tr>
                            <tr><td colspan='2' style="color:red"><?php echo$error3;?></td></tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="customerlName" id="customerlName" size='40'  value="<?php if(isset($_POST["customerlName"]) && $_POST['customerlName']!=""){echo $_POST['customerlName'];}?>"></td>
                            </tr>
                            <tr><td colspan='2' style="color:red"><?php echo$error4;?></td></tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="text" name="phoneNumber" id="phoneNumber" size='40'     value="<?php if(isset($_POST["phoneNumber"]) && ($_POST['phoneNumber'])!=""){echo $_POST['phoneNumber'];}?>"></td>
                            </tr>
                            <tr><td colspan='2' style="color:red"><?php echo$error5;?></td></tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="emailAddress" id="emailAddress" size='40'     value="<?php if(isset($_POST["emailAddress"]) && ($_POST['emailAddress'])!=""){echo $_POST['emailAddress'];}?>">
                            </tr>
                            <tr><td colspan='2' style="color:red"><?php echo$error6;?></td></tr>
                             <tr>
                                <td>Username:</td>
                                <td><input type="text" name="username" id="username" size='20'   value="<?php if(isset($_POST["username"]) && ($_POST['username'])!=""){echo $_POST['username'];}?>">
                            </tr>
                             <tr><td colspan='2' style="color:red"><?php echo$error7;?></td></tr>
                            <tr>
                               
                                <td>How did you hear<br> about us?</td>
                                <td>
                                   <select name="referral" size='1'>
                                      <option>Select referer</option>
                                      <option value="newspaper" <?php if( isset($_POST["referral"]) && $_POST["referral"] =="newspaper") {echo "selected";}?>>Newspaper</option>
                                      <option value="radio" <?php if( isset($_POST["referral"]) && $_POST["referral"] =="radio") {echo "selected";}?>>Radio</option>
                                      <option value="tv" <?php if( isset($_POST["referral"]) && $_POST["referral"] =="tv") {echo "selected";}?>>Television</option>
                                      <option value="other" <?php if( isset($_POST["referral"]) && $_POST["referral"] =="other") {echo "selected";}?>>Other</option>
                                   </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;<input type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
                            </tr>
                        </table>
                    </form>
                </div><!-- End Main -->
            </div><!-- End Content -->
            


        <?php 

		include "Footer.php";
		
		?>
    </body>

