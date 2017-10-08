<?php
include 'boilerplate.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Special+Elite" rel="stylesheet">
		<link href="css/bm.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	  <script src="js/bm.js"></script>
	</head>

	<body>
		<?php include 'header.php'; ?>         
		<div class="pageContainer">		
			<h2>Purchase</h2>
			<div class="tabBtnBar">
				  <button id="btn1" class="tabBtn tablink activeStep" onclick="openStep('step1', event)"><span class="step">STEP </span><span class="stepNum">1</span>
					</button>
				  <button id="btn2"  class="tabBtn tablink" onclick="openStep('step2', event)"><span class="step">STEP </span><span class="stepNum">2</span></button>
				  <button id="btn3" class="tabBtn tablink" onclick="openStep('step3', event)"><span class="step">STEP </span><span class="stepNum">3</span></button>
				  <button id="btn4"  class="tabBtn tablink" onclick="openStep('step4', event)"><span class="step">STEP </span><span class="stepNum">4</span></button>
			</div>
			<div id="step1" class="purchaseStep">
				<h3 class="stepDesc">Choose Your Model</h3>
				<div class="galleryDiv">
					<button class="galleryBtn">
						<div class="modelBtn model1"></div>
					</button>
					<button class="galleryBtn">
						<div class="modelBtn model2"></div>
					</button>
					<button class="galleryBtn">
						<div class="modelBtn model3"></div>
					</button>
					<button class="galleryBtn">
						<div class="modelBtn model4"></div>
					</button>
					<div class="modelBottomBtns">
						<a href="models.php" class="bottomBtns left">Learn More about our Models</a>
						<a href="#" onclick="step('btn2')" class="bottomBtns right nextBtn">Next <i class="material-icons">forward</i></a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div id="step2" style="display:none" class="purchaseStep">
				<h3 class="stepDesc">Enter a Message</h3>
				<div class="galleryDiv">
					<textarea class="purchaseTA" placeholder="Your personalized message..."></textarea>
					<div>
						<h3 class="stepDesc">Would You Like to Leave Your Name?</h3>
						<div>
							<div class="column messageForm">First Name:  <input type="text" placeholder="Your name..."></input></div>
							<div class="column messageForm">Last Name:  <input type="text" placeholder="Your last name..."></input></div>
						</div>
						<div>
							<h3 class="stepDesc">Any Special Instructions? (ie colors, drawings, props, etc)</h3>
							<textarea class="purchaseTA" placeholder="Special instructions..."></textarea>
						</div>
					</div>
					<div class="modelBottomBtns">
						<a href="#" onclick="step('btn3')" class="bottomBtns right nextBtn">Next <i class="material-icons">forward</i></a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div id="step3" style="display:none" class="purchaseStep">
				<h3 class="stepDesc">Enter Payment Details</h3>
			</div>
			<div id="step4" style="display:none" class="purchaseStep">
				
				<h3 class="stepDesc">Confirmation</h3>
			</div>
		</div>	
	</body>
</html>