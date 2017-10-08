<?php
include 'boilerplate.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
		<link href="css/bm.css" rel="stylesheet" type="text/css" />
		<script src="js/bm.js"></script>
	</head>

	<body>
		<?php include 'header.php'; ?>         
		<div class="pageContainer">		
			<div class="formContainer">
			  <form action="/action_page.php">

				<label for="fname">First Name</label>
				<input type="text" id="fname" name="firstname" placeholder="Your name..">

				<label for="lname">Last Name</label>
				<input type="text" id="lname" name="lastname" placeholder="Your last name..">

				<label for="country">Country</label>
				<select id="country" name="country">
				  <option value="australia">Australia</option>
				  <option value="canada">Canada</option>
				  <option value="usa">USA</option>
				</select>

				<label for="subject">Subject</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="Submit">

			  </form>		
		  </div>
		</div>
	</body>
</html>