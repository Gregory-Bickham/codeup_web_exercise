<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>
<html>


	<head>
	
		<title>my_first_form.php</title>

	</head>
	
	<body>

		<h2>User Log In</h2>

		<form method="POST" action="/my_first_form.php">
	
			<p>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="Username">
			</p>

			<p>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Password">
			</p>	

			<p>
				<button type="submit">Login</button>
			</p>

		</form>
	
	<hr><br><br>
		
	
		
		<h2>Compose an E-Mail</h2>

		<form method="POST" action="/my_first_form.php">

			<p>

				<label for="To">To:</label>
				<input id="To" name="To" type="text" placeholder="Email Recipient">

			</p>

			<p>

				<label for="From">From:</label>
				<input id="From" name="From" type="text" placeholder="Email Sender">
				
			</p>
			
			<p>

				<label for="Subjet">Subject:</label>
				<input id="Subject" name="Subject" type="text" placeholder="Subject of your E-mail">
				
			</p>
		
			<p>

				<label for="Body">Body:</label>
				<textarea id="Body" name="Body" rows="5" columns="30" type="text" placeholder="Type Your Message Here"></textarea>
				
			</p>
			<br>
			<p>

				<button type="submit">Send E-Mail</button>
			
			</p>

			<p>
				
				<label for="mailing_list">Would you like to save a copy to your sent folder?</label>
				<input type="checkbox" id="mailing_list" name="mailing_list" value="yes">

			</p>


		</form>	

	<hr><br><br>

		<h2>Multiple Choice Test</h2>

		<form>

			<p>
				<h3>What is the capital of Texas?</h3>

				<label><input type="radio" name="x" value="Houston">Houston</label>
				<label><input type="radio" name="x" value="Dallas">Dallas</label>
				<label><input type="radio" name="x" value="Austin">Austin</label>
				<label><input type="radio" name="x" value="San Antonio">San Antonio</label>
				<button type="submit">Submit</button>

			</p>

			<p>

				<h3>Which cities are in Texas?</h3>

				<label><input type="checkbox" id="x1" name="Austin" value="1">Austin</label>
				<label><input type="checkbox" id="x2" name="Boston" value="0">Boston</label>
				<label><input type="checkbox" id="x3" name="Los Angeles" value="0">Los Angeles</label>
				<label><input type="checkbox" id="x4" name="San Antonio" value="1">San Antonio</label>

				<button type="submit">Submit</button>
			</p>

			<p>

				<label for="os">What operating systems have you used?</label>
				<select id="os" name="os[]" multiple>
					<option value="-1" selected disabled>You can choose more than one:</option>
					<option value="Linux">Linux</option>
					<option value="Windows">Windows</option>
					<option value="OSX">OSX</option>
					<option value="Unix">Unix</option>

				</select>

			<button type="submit">Submit</button>

			</p>



		</form>

		<hr><br><br>

		<h2>Select Testing</h2>

		<form>

			<p>
				<label for="Alone">Are we alone?</label>
				<select id="Alone" name="Alone">
				<option value="-1" selected disabled>Choose wisely</option>
				<option value="0">No</option>
				<option value="1">Yes</option>
				</select>	
		
				<button type="submit">Submit</button>

			</p>

		</form>	













	</body>

</html>

