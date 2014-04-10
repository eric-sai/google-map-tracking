<html>
	<head>
		<title> Member application</title>
	</head>
	<body>
		<h2> Event create form</h2>
		<p>
			Please your informaiton
		</p>

		<form  action="EvenCreate.php" method= "post">
			<label for="firstname"> First name:</label>
			<input type="text" id="firstname" name="firstname"/>
			<br/>
			<label for="lastname"> Last name:</label>
			<input type="text" id="lastname" name="lastname"/>
			<br/>
			<label for="email"> What is your email?</label>
			<input type="text" id="email" name="email"/>
			<br/>
			<label for="time"> Time</label>
			<input type="text" id="time" name="time"/>
			<br/>
			<label for="location"> Location: </label>
			<input type="text" id="location" name="location"/>
			<br/>
			<label for="howmany"> How many people you want to invite?</label>
			<input type="text" id="howmany" name="howmany"/>
			<br/>
			<label for="Description"> Description your party:</label>
			<input type="text" id="Description" name="Description" size="64"/>
			<br/>
			<label for="what"> What thing you want friend to bring?</label>
			<input type="text" id="what" name="what" size="64"/>
			<br/>
			<input type="submit" />
		</form>
	</body>

</html>