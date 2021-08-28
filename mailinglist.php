<?php

session_start();
ob_start();
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
                    <h1>Customers information</h1>
                    
                   <?php

                        require "config.php";
                        
                        
                        try {
                            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            //echo "Connected successfully" . "</br>";
                            
                            $sqlQuery = "SELECT * FROM mailinglist";
                            
                            $result = $pdo->query( $sqlQuery );
                            
                            $rowCount = $result->rowCount();
                            
                            if($rowCount == 0)
                            {
                                echo "There are no customers in database";
                            }
                                
                            else{
                                echo "<br><strong>Customers List</strong<br><br><br><br>";
                                
                                echo "<table style=\"border:1px solid #FFFFFF;border-collapse:collapse;\">";
                                echo "<tr>";
                                echo "<th style=\"width:40%;text-align:left;border:1px solid #FFFFFF;\">Full Name</th>";
                                echo "<th style=\"width:30%;text-align:left;border:1px solid #FFFFFF;\">Email Address</th>";
                                echo "<th style=\"width:30%;text-align:left;border:1px solid #FFFFFF;\">Phone</th>";
                                echo  "<tr>";
                                
                                for($i=0; $i<$rowCount; ++$i){
                                    $row = $result->fetch();
                                    echo"<tr><td>" . $row['firstName'] ." ".$row['lastName']. "</td><td>" . $row['emailAddress'] . "</td><td>". $row['phoneNumber'] . "</td></tr>";
                                }
                                echo"</table>";
                                
                            }    
                        }
                        
                        catch(PDOException $e) {
                            echo "Connection failed: " . $e->getMessage();
                        }
                        
                    ?>
                    

            	</div><!-- End Main -->
            	
          </div><!-- End Content -->

        <?php 

		include "Footer.php";
		
		?>
            
      </body>

</html>

