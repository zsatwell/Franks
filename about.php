<!DOCTYPE html>
<html>
	<head>
		<!----- Meta Tags ----->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Jaxon's Jewelry Website" />
		<!----- Page Stlyes ----->
		<!--- CSS --->
		<style><?php include "styles.inc" ?></style>
		<!--- Fonts --->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Cookie&family=Yellowtail&display=swap" rel="stylesheet">
	</head>
	
	<body>
		<!----- Header Area ----->
		<?php include "header.inc"; ?>
		<!----- Main Content Area ----->
		<main>
			<div class="aboutHeader">
				<div class="centered">
					<h1 class="pageTitle">About Us</h1>
				</div>
			</div>
			<div>
				<p>
					Jaxon's Jewelry is a prestigious and long time family owned jewelry store that prides itself on the exceptional customer service, and high quality jewelry that it provides to its customers. Jaxon's Jewelry gets its namesake from Jax Jones, who founded the store in the early 1970s. The store was later passed on to his son, Jaxon Jones who is the current owner. 
				</p>
				<p>
					Our goal is to provide you, the customer, with the high quality handcrafted artisan jewelry that will compliment your style perfectly.
				</p>
			</div>
			<div class="businessHours">
				<h3>Business Hours</h3>
				<ul class="aboutUl">
					<li><strong>Come visit us!</strong></li>
					<li>Monday: 8:00AM - 7:00PM</li>
					<li>Tuesday: 8:00AM - 7:00PM</li>
					<li>Wednesday: 8:00AM - 7:00PM</li>
					<li>Thursday: 8:00AM - 7:00PM</li>
					<li>Friday: 8:00AM - 7:00PM</li>
					<li>Saturday: 8:00AM - 7:00PM</li>
					<li>Sunday: Closed</li>
				</ul>
			</div>
			<div class="aboutForm">
				<h3>Have a question? Send us a message!</h3>
				<!--- Form --->
				<form action="jaxon_form.php" method="get">
					<p>Name: <input type="text" name="name"/></p>
					<p>Email: <input type="text" name="email"/></p>
					<p>Your message: <input type="text" name="message" /></p>
					
					<input type="submit" value="Submit" class="formButton">
					<input type="reset" class="formButton">
				</form>
			</div>
		</main>
		<!----- Footer Area ----->
		<?php include "footer.inc"; ?>
		
	</body>
</html>