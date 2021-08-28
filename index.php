<!DOCTYPE html>
<html>
    <head>
    
    	
        <title>WP Eatery - Home</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        

        <?php 
		include "Header.php";
		include "Menu.php";
		include "class_lib.php";

		echo "<link href=\"css\style.css\" rel=\"stylesheet\" type=\"text/css\">";
		
		$item1 = new EventItem("","","",0);
		$item2 = new EventItem("","","",0);
		
		$item1->setEventName("St. Patty's Day Party");
		$item1->setEventDate("Tuesday August 17, 2021");
		$item1->setEventDesc("Join us for an authentic Irish four course meal, complete with shepard's pie and one fresh drink!");
		$item1->setEventPrice(35.00);
		
		$item2->setEventName("Samy's Spring Fling!");
		$item2->setEventDate("Saturday August 18, 2021");
		$item2->setEventDesc("Join us for to kick off the beginning of spring! This event will include 4 of Samy's infamous appetizers and one fresh drink!");
		$item2->setEventPrice(40.00);
		?>
    </head>
    <body>
    
            <div id="content" class="clearfix">
                <aside>
                        <?php echo("<h2> ".date("l")."'s Specials</h2>"); ?>
                        <hr>
                        <img src="images/burger_small.jpg" alt="Burger" title="Monday's Special - Burger">
                        <h3>The WP Burger</h3>
                        <p>Freshly made all-beef patty served up with homefries - $14</p>
                        <hr>
                        <img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
                        <h3>WP Kebobs</h3>
                        <p>Tender cuts of beef and chicken, served with your choice of side - $17</p>
                        <hr>
                        <h2>Private Dining</h2>
                        <img src="images/dining_room_sm.jpg" width="228" alt="Dining Room" title="The WP Eatery Dining Room">
                        <p>Call us to find out more about our private dinning options.</p>
                </aside>
                <div class="main">
                    <h1>Welcome to WP Eatery!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <h3>Upcoming Events ...</h3>
                    <p>
                    <?php echo("<strong class=\"event\">".$item1->getEventName()."</strong><br/>");?>
                    <?php echo("<strong>Date:</strong>".$item1->getEventDate()."<br/>");?>
                    <?php echo("<strong>Time:</strong> 7pm<br/>");?>
                    <?php printf("<strong>Price:</strong> %.2f <br/>", $item1->getEventPrice()); ?>
                    <?php echo($item1->getEventDesc());?>
                    </p>
                    <p>
                    <?php echo("<strong class=\"event\">".$item2->getEventName()."</strong><br/>");?>
                    <?php echo("<strong>Date:</strong>".$item2->getEventDate()."<br/>");?>
                    <?php echo("<strong>Time:</strong> 8pm<br/>");?>
                    <?php printf("<strong>Price:</strong> %.2f <br/>", $item2->getEventPrice()); ?>
                    <?php echo($item2->getEventDesc());?>
                    </p>
                    <h2>Book your Private Party!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div><!-- End Main -->
            </div><!-- End Content -->
            
        <?php 

		include "Footer.php";
		
		?>

      
    </body>
</html>
