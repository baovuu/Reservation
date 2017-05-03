<?php
	session_start();
	$_SESSION['post-data2'] = $_POST;
?>
<html>
<body>
	<fieldset>
	<legend>Confirmation</legend>
<?php
	echo "Airport Code: " . $_SESSION['post-data']['airport'] . "<br />";	
	echo "Pickup Date: " . $_SESSION['post-data']['pickMonth'] . "/" . $_SESSION['post-data']['pickDay'];
	echo " " . $_SESSION['post-data']['pickuptime'] . "<br />";
	
	//Validating Pick up and Drop-off date
	if ($_SESSION['post-data']['dropMonth'] >  $_SESSION['post-data']['pickMonth']) {
		if (($_SESSION['post-data']['dropDay'] <  $_SESSION['post-data']['pickDay']) or ($_SESSION['post-data']['dropDay'] >=  $_SESSION['post-data']['pickDay'])) {
				echo "Drop-off Date: " . $_SESSION['post-data']['dropMonth'] . "/" . $_SESSION['post-data']['dropDay'];
			}
	} else if ($_SESSION['post-data']['dropMonth'] =  $_SESSION['post-data']['pickMonth']) {
				if ($_SESSION['post-data']['dropDay'] >  $_SESSION['post-data']['pickDay']) {
					echo "Drop-off Date: " . $_SESSION['post-data']['dropMonth'] . "/" . $_SESSION['post-data']['dropDay'];
			 	} else {
					echo "Drop-off Date: <b>Invalid! Drop off date must be later than pickup date</b>";
				}
	} else {
		echo "Drop-off Date: <b>Invalid! Drop off date must be later than pickup date</b>";
	}
	
	echo " " . $_SESSION['post-data']['dropofftime'] . "<br />";
	
	//validating rental class	
	if (isset($_SESSION['post-data']['class'])){
		echo "Rental Class: " . $_SESSION['post-data']['class'] . "<br />";
	} else {
			echo "Rental Class: <b>Please select rental class</b>" . "<br />";
	}
		
	echo "Equipment Option: ";
?>	
		
	<p><ul>
	<?php
		foreach($_SESSION['equipment'] as $equipt) {
			print "<li> $equipt";
		}
	?>
	</ul></p>

<?php
	//Validating credit card number
	if (preg_match('/^\d{4}-\d{4}-\d{4}-\d{4}$/', $_SESSION['post-data2']['cardNumber'])) {
		echo "Credit Card Number: " . $_SESSION['post-data2']['cardNumber'] . "<br />";
	} else {
		echo "Credit Card Number: <b>Please enter credit card numbers as xxxx-xxxx-xxxx-xxxx</b>" . "<br />";
	}
	
	//Validating security code
	if (preg_match('/^[0-9]{3,4}$/', $_SESSION['post-data2']['securityCode'])) {
		echo "Security Code: " . $_SESSION['post-data2']['securityCode'] . "<br />";
	} else {
		echo "Security Code: <b>Please enter 3 or 4 digit number</b>" . "<br />";
	}
	
	echo "Expiration Date: " . $_SESSION['post-data2']['expireMonth'] . "/" . $_SESSION['post-data2']['expireYear'] . "<br />";
	
	//strip the tag of card holder name and street address
	echo "Card Holder Name: " . strip_tags($_SESSION['post-data2']['user']) . "<br />";
	echo "Street Address: " . strip_tags($_SESSION['post-data2']['address']) . "<br />";
	
	echo "City: " . $_SESSION['post-data2']['city'] . "<br />";
	
	//Validating state
	if (isset($_SESSION['post-data2']['state'])) {
		echo "State: " . $_SESSION['post-data2']['state'] . "<br />";
	}
	
	//Validating zipcode
	if (preg_match('/^[0-9]{5}$/', $_SESSION['post-data2']['zip'])) {
		echo "Zipcode: " . $_SESSION['post-data2']['zip'] . "<br />";
	} else {
		echo "Zipcode: <b>Please enter a numeric zipcode</b>" . "<br />";
	}
?>
	</fieldset>
</body>
</html>
