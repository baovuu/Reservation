<?php
	session_start();
	$_SESSION['post-data'] = $_POST;
	$_SESSION['equipment'] = $_POST['equipment'];
?>	
<html>
<body>
	<form method="post" action="creditcard.php">
		<fieldset>
			<legend>Credit Card Information</legend>
				<p>The credit cards we accept are MasterCard, Visa, AmericanExpress</p>
				
				<p>Enter your credit card number (16 digits with "-" between digit groups)
					<input type="text" name="cardNumber" />
				</p>

				<p>Security Code
					<input type="text" patern="[0-9]*" name="securityCode" style="width: 40px" />
				</p>

				<p>
				Expiration Date:
					<select name="expireMonth">
						<option value="01">Jan</option>
						<option value="02">Feb</option>
						<option value="03">Mar</option>
						<option value="04">Apr</option>
						<option value="05">May</option>
						<option value="06">Jun</option>
						<option value="07">Jul</option>
						<option value="08">Aug</option>
						<option value="09">Sep</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
					</select>
					<select name="expireYear">
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
					</select>
				</p>
				
		</fieldset>
		<fieldset>		
			<legend>Billing Address</legend>
				<p>Card Holder Name:
					<input type="text" name="user" />
				</p>

				<p>Street Address:
					<input type="text" name="address" />
				</p>

				<p>City:
					<input type="text" name="city" style="width: 100px" />
				</p>

				<p>State:
					<select name="state">
						<option value="AK">AK</option>
						<option value="AL">AL</option>
						<option value="FL">FL</option>
						<option value="GA">GA</option>
						<option value="KY">KY</option>
						<option value="MS">MS</option>
						<option value="NC">NC</option>
						<option value="OH">OH</option>
						<option value="SC">SC</option>
						<option value="TN">TN</option>
					</select>
				</p>

				<p>Zipcode:
					<input type="text" patern="[0-9]*" name="zip" style="width: 50px" />
				</p>
		</fieldset>
		<p><input type="submit" value="Confirm"/></p>
	</form>
	
</body>
</html>
