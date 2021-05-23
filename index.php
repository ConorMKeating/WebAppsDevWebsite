<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<title>Musical World Homepage</title>
</head>

<style>

				/* Styling for slideshow container */
	.imageContainer {
		height: 600px;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	
				/* Sets the maximum width of image in container. Shrinks to fit. */
	img {
		max-width: 100%;
	}

				/* Sets background image properties, overall height, text position and border */
	.jumbotron {
		height: 500px;
		background-image: url(Images/Notes3.png);
		background-color: lightgoldenrodyellow;
		text-align: right;
		background-size: 100% 100%;
	}

				/* Justifies the description text which is placed into element from database */
	.card-text {
		text-align: justify;
	}

				/* Sets the width of quantity input box next to Add to Cart button */
	.qtyWidth {
		width: 50px;
	}

</style>

<body style="background-color: lightgoldenrodyellow;">

		<!--	Navbar copied from getbootstrap. Sticky-top applied to remain visible while scrolling.
				Collapse button added for burger button to display on smaller screens.
				Cart and login buttons are visible at first, logout becomes visible after logging in.
		-->
	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
		<a class="navbar-brand" href="index.php"><img src="Images/Notes.png" height="50">MusicalWorld</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<span>
			<button id="myCart" class="btn btn-outline-success my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#cartModal">Cart: 0 items</button>
			<button id="myLogin" class="btn btn-outline-success my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#loginModal">Login</button>
			<button id="myLogout" class="btn btn-outline-success my-2 my-sm-0" type="submit" hidden="true" onClick="logoutNow()">Logout</button>
			</span>
		</div>
	</nav>


		<!--	Very simple jumbotron taken from getbootstrap. Styled in CSS above.
		-->
	<div class="jumbotron">
		<h1 class="display-4"><b><b>Welcome to<br>Musical World</b></b></h1>
	</div>
	
		<!--	Container formed aroung a row with slideshow in the left columns and text in the right.-->
	<div class="container-fluid">
		<div class="row" style="background-color: white;">
			<div class="imageContainer col-xl-7 col-lg-7 col-md-7">
				<img class="slideShowImages" id="mySlide">
			</div>
			<div class="col_xl_5 col-lg-5 col-md-5">
				<br>
				<br>
				<br>
				<br>
				<h2>Take a look at our fantastic products below!</h2>
				<br>
				<p>We guarantee your items to be of the highest quality and if you're not happy with any purchase from us, we are happy to offer a full refund minus shipping costs. And don't forget to ask us anything about your new purchases. We have many expert instrumentalists with the answers to your queries.</p>
				<br>
				<br>
				<p>For this week only, we are offering <strong>free shipping</strong> within Ireland for all purchases over €20,000.<br>Isn't that a bargain!<br>
				<br>
				<img src="Images/Animated-fireworks-changing-colors.gif">
			</div>
		</div>
	</div>
	
	<br>

		<!--	Container for card deck.-->
	<div class="container ">
			<!--	From getbootstrap, each card deck element has two cards.-->
		<div class="card-deck">
				<!--	Card sets the image on top, and uses variables stored from php for filling data from database.-->
			<div class="card text-center">
				<img src="Images/DW_3.jpg" class="card-img-top" alt="Image of Drums">
				<div class="card-body">
					<h5 id="titleVar" class="card-title"></h5>
					<p id="descVar" class="card-text"></p>
							<!--	Card footer adds text, price variable, qty input box and add to cart button which call JS function-->
					<div class="card-footer">
						<h3 style="float:left">Price: € </h3>
						<h3 id="priceVar" style="float:left"></h3>
						<button style="float:right" onClick="addToCart(document.getElementById('titleVar').innerHTML, document.getElementById('priceVar').innerHTML, document.getElementById('qtyIn').value)">Add to Cart</button>
						<input class="qtyWidth" id="qtyIn" type="number" placeholder="0" min="0" style="float:right">
					</div>
				</div>
			</div>

				<!--	Card sets the image on top, and uses variables stored from php for filling data from database.-->
			<div class="card text-center">
				<img src="Images/Roland50_4.jpg" class="card-img-top" alt="Image of eDrums">
				<div class="card-body">
					<h5 id="titleVar2" class="card-title"></h5>
					<p id="descVar2" class="card-text"></p>
							<!--	Card footer adds text, price variable, qty input box and add to cart button which call JS function-->
					<div class="card-footer">
						<h3 style="float:left"> Price: € </h3>
						<h3 id="priceVar2" style="float:left"></h3>
						<button style="float:right" onClick="addToCart(document.getElementById('titleVar2').innerHTML, document.getElementById('priceVar2').innerHTML, document.getElementById('qtyIn2').value)">Add to Cart</button>
						<input class="qtyWidth" id="qtyIn2" type="number" placeholder="0" min="0" style="float:right">
					</div>
				</div>
			</div>
		</div>

	<br>

			<!--	From getbootstrap, each card deck element has two cards.-->
		<div class="card-deck">
				<!--	Card sets the image on top, and uses variables stored from php for filling data from database.-->
			<div class="card text-center">
				<img src="Images/EVH_3.jpg" class="card-img-top" alt="Image of Guitar">
				<div class="card-body">
					<h5 id="titleVar3" class="card-title"></h5>
					<p id="descVar3" class="card-text"></p>
							<!--	Card footer adds text, price variable, qty input box and add to cart button which call JS function-->
					<div class="card-footer">
						<h3 style="float:left"> Price: € </h3>
						<h3 id="priceVar3" style="float:left"></h3>
						<button style="float:right" onClick="addToCart(document.getElementById('titleVar3').innerHTML, document.getElementById('priceVar3').innerHTML, document.getElementById('qtyIn3').value)">Add to Cart</button>
						<input class="qtyWidth" id="qtyIn3" type="number" placeholder="0" min="0" style="float:right">
					</div>
				</div>
			</div>

				<!--	Card sets the image on top, and uses variables stored from php for filling data from database.-->
			<div class="card text-center">
				<img src="Images/Vio_4.jpg" class="card-img-top" alt="Image of Violin">
				<div class="card-body">
					<h5 id="titleVar4" class="card-title"></h5>
					<p id="descVar4" class="card-text"></p>
							<!--	Card footer adds text, price variable, qty input box and add to cart button which call JS function-->
					<div class="card-footer">
						<h3 style="float:left"> Price: € </h3>
						<h3 id="priceVar4" style="float:left"></h3>
						<button style="float:right" onClick="addToCart(document.getElementById('titleVar4').innerHTML, document.getElementById('priceVar4').innerHTML, document.getElementById('qtyIn4').value)">Add to Cart</button>
						<input class="qtyWidth" id="qtyIn4" type="number" placeholder="0" min="0" style="float:right">
					</div>
				</div>
			</div>
		</div>

	<br>

			<!--	From getbootstrap, each card deck element has two cards.-->
		<div class="card-deck">
				<!--	Card sets the image on top, and uses variables stored from php for filling data from database.-->
			<div class="card text-center">
				<img src="Images/Stein_2.jpg" class="card-img-top" alt="Image of Piano">
				<div class="card-body">
					<h5 id="titleVar5" class="card-title"></h5>
					<p id="descVar5" class="card-text"></p>
							<!--	Card footer adds text, price variable, qty input box and add to cart button which call JS function-->
					<div class="card-footer">
						<h3 style="float:left"> Price: € </h3>
						<h3 id="priceVar5" style="float:left"></h3>
						<button style="float:right" onClick="addToCart(document.getElementById('titleVar5').innerHTML, document.getElementById('priceVar5').innerHTML, document.getElementById('qtyIn5').value)">Add to Cart</button>
						<input class="qtyWidth" id="qtyIn5" type="number" placeholder="0" min="0" style="float:right">
					</div>
				</div>
			</div>

				<!--	Card sets the image on top, and uses variables stored from php for filling data from database.-->
			<div class="card text-center">
				<img src="Images/Yam_2.jpg" class="card-img-top" alt="Image of Keyboard">
				<div class="card-body">
					<h5 id="titleVar6" class="card-title"></h5>
					<p id="descVar6" class="card-text"></p>
							<!--	Card footer adds text, price variable, qty input box and add to cart button which call JS function-->
					<div class="card-footer">
						<h3 style="float:left"> Price: € </h3>
						<h3 id="priceVar6" style="float:left"></h3>
						<button style="float:right" onClick="addToCart(document.getElementById('titleVar6').innerHTML, document.getElementById('priceVar6').innerHTML, document.getElementById('qtyIn6').value)">Add to Cart</button>
						<input class="qtyWidth" id="qtyIn6" type="number" placeholder="0" min="0" style="float:right">
					</div>
				</div>
			</div>
		</div>

	<br>

			<!--	From getbootstrap, each card deck element has two cards.-->
		<div class="card-deck">
				<!--	Card sets the image on top, and uses variables stored from php for filling data from database.-->
			<div class="card text-center">
				<img src="Images/Sax_4.jpg" class="card-img-top" alt="Image of Saxophone">
				<div class="card-body">
					<h5 id="titleVar7" class="card-title"></h5>
					<p id="descVar7" class="card-text"></p>
							<!--	Card footer adds text, price variable, qty input box and add to cart button which call JS function-->
					<div class="card-footer">
						<h3 style="float:left"> Price: € </h3>
						<h3 id="priceVar7" style="float:left"></h3>
						<button style="float:right" onClick="addToCart(document.getElementById('titleVar7').innerHTML, document.getElementById('priceVar7').innerHTML, document.getElementById('qtyIn7').value)">Add to Cart</button>
						<input class="qtyWidth" id="qtyIn7" type="number" placeholder="0" min="0" style="float:right">
					</div>
				</div>
			</div>

				<!--	Card sets the image on top, and uses variables stored from php for filling data from database.-->
			<div class="card text-center">
				<img src="Images/Trum_4.jpg" class="card-img-top" alt="Image of Trumpet">
				<div class="card-body">
					<h5 id="titleVar8" class="card-title"></h5>
					<p id="descVar8" class="card-text"></p>
							<!--	Card footer adds text, price variable, qty input box and add to cart button which call JS function-->
					<div class="card-footer">
						<h3 style="float:left"> Price: € </h3>
						<h3 id="priceVar8" style="float:left"></h3>
						<button style="float:right" onClick="addToCart(document.getElementById('titleVar8').innerHTML, document.getElementById('priceVar8').innerHTML, document.getElementById('qtyIn8').value)">Add to Cart</button>
						<input class="qtyWidth" id="qtyIn8" type="number" placeholder="0" min="0" style="float:right">
					</div>
				</div>
			</div>
		</div>
	</div>

	<br>

		<!--	Login modal adapted from getbootstrap.	-->
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Login Form</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
					<!--	Creates a form to submit and validate credentials (User: user@gmit.ie Pass: pass)
							checkUserDetails set to return false to prevent page refreshing.
					-->
				<div class="modal-body">
					<form onSubmit="checkUserDetails(myUsername.value, myPassword.value); return false">
						<div>
							Email address:<br>
							<input id="myUsername" type="email" required="required" >
						</div>
						<div>
							Password:<br>
							<input id="myPassword" type="password" required="required" >
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-secondary" data-dismiss="modal" value="Close"></input>
							<input type="submit" class="btn btn-primary"  value="Login"></input>
						</div>
					</form>
				</div>
					<!--	Hidden element which displays whether login was successful or not after submit.-->
				<h3 id="loginSuccess" hidden="true"></h3>
			</div>
		</div>
	</div>

		<!--	Cart modal adapted from getbootstrap.	-->
	<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Shopping Cart</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
						<!--	Creates a hidden element for after successful purchase of products in cart.	-->
					<div id="purchaseSuccess" hidden="true">
						<h1><br>Items purchased. Congratulations!</h1>
					</div>
						<!--	Hidden elements for each product added and values read from JS variables in cartItems[] array when available.
						X button added to remove products from the cartItems[] array by calling removeFromCart(elements first index used in array).	-->
					<div id="cartDiv0" hidden="true"><button class="btn-danger btn-sm" onClick="removeFromCart(0)" style="float:left">x</button>
						<h5 id="testP0"></h5>
						<hr>
					</div>
					<div id="cartDiv4" hidden="true"><button class="btn-danger btn-sm" onClick="removeFromCart(4)" style="float:left">x</button>
						<h5 id="testP4"></h5>
						<hr>
					</div>
					<div id="cartDiv8" hidden="true"><button class="btn-danger btn-sm" onClick="removeFromCart(8)" style="float:left">x</button>
						<h5 id="testP8"></h5>
						<hr>
					</div>
					<div id="cartDiv12" hidden="true"><button class="btn-danger btn-sm" onClick="removeFromCart(12)" style="float:left">x</button>
						<h5 id="testP12"></h5>
						<hr>
					</div>
					<div id="cartDiv16" hidden="true"><button class="btn-danger btn-sm" onClick="removeFromCart(16)" style="float:left">x</button>
						<h5 id="testP16"></h5>
						<hr>
					</div>
					<div id="cartDiv20" hidden="true"><button class="btn-danger btn-sm" onClick="removeFromCart(20)" style="float:left">x</button>
						<h5 id="testP20"></h5>
						<hr>
					</div>
					<div id="cartDiv24" hidden="true"><button class="btn-danger btn-sm" onClick="removeFromCart(24)" style="float:left">x</button>
						<h5 id="testP24"></h5>
						<hr>
					</div>
					<div id="cartDiv28" hidden="true"><button class="btn-danger btn-sm" onClick="removeFromCart(28)" style="float:left">x</button>
						<h5 id="testP28"></h5>
						<hr>
					</div>

						<!--	Displays a heading for total value of items in cart at present.	-->
					<h2 id="myTotalHead" style="float: left" hidden="true">Total = € </h2>
					<h2 id="myTotal" style="float: clear"></h2>
					<br>
					<h2 id="loginPrePurchase" hidden="true">You must log in before purchasing!</h2>

				</div>
					<!--	Footer with regular close button and purchase button calling purchase() function.	-->
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button id="cartButton" type="button" class="btn btn-primary" onClick="purchase()">Purchase</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>

<script>

		/*	Global variables for use within functions below	*/
		
	//	Initialises an array to store details of items in cart. Will use 4 indices per product added. Title, Price, Qty added and Total.
	var cartItems = [];
	//	Uses localstorage to check whether there has been a successful login.
	localStorage.setItem("isLoggedIn", false);
	//	Array of images which will be shuffled each time page is loaded.
	var mySlideshowImages = ['Images/DW_1.webp','Images/Roland50_1.webp','Images/EVH_2.jpg','Images/Vio_1.webp','Images/Stein_1.webp','Images/Yam_1.webp','Images/Sax_1.webp','Images/Trum_1.webp'];
	//	Calling the function to shuffle images above.
	myslideshowImages = shuffleArray(mySlideshowImages);
	//	Used to calculate and display running total of all products.
	var myTotal = 0;
	//	Used to show total quantity of all products in cart.
	var myTotalItems = 0;



	
	//	Code adapted from https://www.tutorialspoint.com/what-is-fisher-yates-shuffle-in-javascript
	//	Loops throught the images array and shuffles their order.
	function shuffleArray(images){
		//	Initialise variables for loop.
		var i = images.length, k , temp;
		//	Counts down from size of array
		while(--i > 0){
			//	Assigns random number from range(size of array) to k
			k = Math.floor(Math.random() * (i+1));
			//	Standard steps of swapping fnction. Take copy, overwrite, restore overwritten value from temp.
			temp = images[k];
			images[k] = images[i];
			images[i] = temp;
		}
		return images;
	}

	//	Initialises step as the first index of shuffled images array.
	var step = 0;
	function runSlides() {
		//	Sets the source of img element to the first element of shuffled images array.
		document.getElementById("mySlide").src = mySlideshowImages[step];
		//	If statement to loop up through images and reset to index 0 after all have been shown.
		if (step < (mySlideshowImages.length-1))
			step++;
		else
			step = 0;
		//	Sets the interval time for displaying each picture.
		setTimeout("runSlides()", 5000);
	}
	//	Calling the function to begin looping through images shown.
	runSlides();


	//	Code adapted from https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_ref_js_modal_event_shown&stacked=h
	//	Runs when the modal button is pressed.
	$(document).ready(function() {
		$("#myCart").click(function() {

			//	Resets all elements to blank content
			for (var i = 0; i <= 28; i = i + 4) {
				document.getElementById('testP' + i).innerHTML = "";
			}

			//	Displays message if user tries to buy without logging in.
			if(localStorage.isLoggedIn=="true")
				document.getElementById("loginPrePurchase").hidden = true;

			//	Check to see if congratulations on purchase heading should be hidden after purchase.
			checkPurchasedAlready();

			//	Displays the products in the cart array.
			displayCartItems();

			//	Check whether to display total qty heading.
			displayTotalQtyOrNot();

			$("#cartModal").modal("show");
		});
	});

	//	Displays the cart after changes when called. Similar code to cart modal.
	function refreshCart() {
		
		//	Resets all elements to blank content
		for (var i = 0; i <= 28; i = i + 4) {
			document.getElementById('testP' + i).innerHTML = "";
		}

		//	Displays the products in the cart array.
		displayCartItems();

		//	Check whether to display total qty heading.
		displayTotalQtyOrNot()
		
		//	Recalculate number of items in cart.
		findTotalItemQty();
	}

	//	Accepts two parameters from form on login modal. Checks if the details match hardcoded user and pass.
	function checkUserDetails(username, password) {
		//	If credentials are correct, changes login button text, displays successful login text,
		//	adds,green colour to text, sets localStoragevariable to true, and displays logout button.
		if (username == "user@gmit.ie" && password == "pass") {
			document.getElementById("myLogin").innerHTML = "Welcome " + "<b>" + username + "</b>";
			document.getElementById("loginSuccess").hidden = false;
			document.getElementById("loginSuccess").innerHTML = "Login successful";
			document.getElementById("loginSuccess").style = "color: lightgreen";
			localStorage.isLoggedIn = true;
			document.getElementById("myLogout").hidden = false;
		//	Displays that login failed and colours the text red.
		} else {
			document.getElementById("loginSuccess").innerHTML = "Login failed. Please try...<br>Username: user@gmit.ie<br>Password: pass";
			document.getElementById("loginSuccess").style = "color: red";
			document.getElementById("loginSuccess").hidden = false;
		}
	}

	//	If triggered, hides logout button and success text, resets localStorage variable to false, and changes login button text back to "login".
	function logoutNow() {
		document.getElementById("myLogout").hidden = true;
		document.getElementById("loginSuccess").hidden = true;
		localStorage.isLoggedIn = false;
		document.getElementById("myLogin").innerHTML = "Login";
	}

	//	Takes 3 inputs to add to the cart array.
	function addToCart(title, price, qty) {
		//	Check to see if congratulations on purchase heading should be hidden after purchase.
		checkPurchasedAlready();

		//	If product is already in cart, updates the quantity and total.
		if (cartItems.includes(title)) {
			var i = cartItems.indexOf(title);
			var myIntQty = parseInt(cartItems[i + 2]) + parseInt(qty);
			cartItems[i + 2] = myIntQty;
			cartItems[i + 3] = myIntQty * price;
		//	If not, adds the new product and other info to cartItems array.
		} else if (qty > 0) {
			cartItems.push(title);
			cartItems.push(price);
			cartItems.push(qty);
			cartItems.push(price * qty);
		}

		//	Recalculate number of items in cart.
		findTotalItemQty();
	}

	//	Removes the product from the cart, then updates it by calling refreshCart().
	function removeFromCart(number) {
		cartItems.splice(number, 4);
		refreshCart();
	}

	//	Called when purchase button is clicked on cart modal.
	function purchase() {
		//	If there are items in the cart, and if user is logged in, reveals hidden heading about successful purchase,
		//	resets cartItems array to empty, and refreshes the cart.
		if(cartItems.length > 0){
			if (localStorage.isLoggedIn == "true") {
				document.getElementById("purchaseSuccess").hidden = false;
				cartItems = [];
				refreshCart();
			//	Warning shows that you are not logged in.
			} else {
				document.getElementById("loginPrePurchase").hidden = false;
			}
		}
	}

	//	Sums up the total quantity for all items in the cart.
	function findTotalItemQty(){
		myTotalItems = 0;
		for(var i = 0; i<cartItems.length; i+=4){
			myTotalItems += parseInt(cartItems[i+2]);
		}
		//	Displays total to modal button
		document.getElementById("myCart").innerHTML = "Cart: " + myTotalItems + " items";
	}

	//	Check added to see if user purchased something already. If so, next time cart modal opens, congrats heading is hidden again.
	function checkPurchasedAlready(){
		//	Check added to see if user purchased something already. If so, next time cart modal opens, congrats heading is hidden again.
		if((cartItems.length < 1) && (document.getElementById("purchaseSuccess").hidden == false)){
			document.getElementById("purchaseSuccess").hidden = true;
		}
	}
	
	//	Checks whether to display total qty element or not. Displays "Your cart is empty" if cartItems array is empty.
	function displayTotalQtyOrNot(){
		if (cartItems.length < 1) {
			document.getElementById("myTotal").innerHTML = "Your cart is empty.";
			document.getElementById('myTotalHead').hidden = true;
		} else {
			document.getElementById('myTotalHead').hidden = false;
		}
	}
	
	//	Loops over the cartItems array and displays line for each item in cart. e.g 2 * DW Drums (€ 9999 ea) = € 19998.
	//	Also resets, totals up everything so far and displays in modal with variable myTotal.
	//	Then loops over each product display div and decides whether to display or not.
	function displayCartItems(){
		myTotal = 0;
		for (var i = 0; i < cartItems.length; i = i + 4) {
			document.getElementById('testP' + i).innerHTML = (cartItems[i + 2] + " * " + cartItems[i] + " (€ " + cartItems[i + 1] + " ea) = € " + cartItems[i + 3]);
			myTotal += cartItems[i + 3];
			document.getElementById("myTotal").innerHTML = myTotal;
		}
		for (var i = 0; i <= 28; i = i + 4) {
			if (document.getElementById('testP' + i).innerHTML != "") {
				document.getElementById('cartDiv' + i).hidden = false;
			} else {
				document.getElementById('cartDiv' + i).hidden = true;
			}
		}
	}
	
	//	PHP code taken from course content. I couldn't figure out how to assign variables to the entire table in one go, so repeated it for each product.
	<?php

	//Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "G00388038";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

	//Test if connection occoured
	if (mysqli_connect_errno()) {
		die("DB connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")");
	}

	if (!$connection) {
		die('Could not connect: ' . mysqli_error());
	}

	//Save the Query
	//This query is looking for the entire row from the Products table with id=1
	$sql = "SELECT * FROM products WHERE id=1;";

	//Query Database
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);

	// Close database connection
	mysqli_close($connection);
	?>

	//	Variables read from php for drum title, description and price.
	var dwvar = "<?php echo $row['Description'] ?>";
	document.getElementById('descVar').innerHTML = dwvar;
	var dwvar2 = "<?php echo $row['Price'] ?>";
	document.getElementById('priceVar').innerHTML = dwvar2;
	var dwvar3 = "<?php echo $row['Title'] ?>";
	document.getElementById('titleVar').innerHTML = dwvar3;

	//	PHP code taken from course content. I couldn't figure out how to assign variables to the entire table in one go, so repeated it for each product.
	<?php

	//Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "G00388038";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

	//Test if connection occoured
	if (mysqli_connect_errno()) {
		die("DB connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")");
	}

	if (!$connection) {
		die('Could not connect: ' . mysqli_error());
	}

	//Save the Query
	//This query is looking for the entire row from the Products table with id=2
	$sql = "SELECT * FROM products WHERE id=2;";

	//Query Database
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);

	// Close database connection
	mysqli_close($connection);
	?>

	//	Variables read from php for edrums title, description and price.
	var rovar = "<?php echo $row['Description'] ?>";
	document.getElementById('descVar2').innerHTML = rovar;
	var rovar2 = "<?php echo $row['Price'] ?>";
	document.getElementById('priceVar2').innerHTML = rovar2;
	var rovar3 = "<?php echo $row['Title'] ?>";
	document.getElementById('titleVar2').innerHTML = rovar3;

	//	PHP code taken from course content. I couldn't figure out how to assign variables to the entire table in one go, so repeated it for each product.
	<?php

	//Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "G00388038";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

	//Test if connection occoured
	if (mysqli_connect_errno()) {
		die("DB connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")");
	}

	if (!$connection) {
		die('Could not connect: ' . mysqli_error());
	}

	//Save the Query
	//This query is looking for the entire row from the Products table with id=3
	$sql = "SELECT * FROM products WHERE id=3;";

	//Query Database
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);

	// Close database connection
	mysqli_close($connection);
	?>

	//	Variables read from php for guitar title, description and price.
	var guvar = "<?php echo $row['Description'] ?>";
	document.getElementById('descVar3').innerHTML = guvar;
	var guvar2 = "<?php echo $row['Price'] ?>";
	document.getElementById('priceVar3').innerHTML = guvar2;
	var guvar3 = "<?php echo $row['Title'] ?>";
	document.getElementById('titleVar3').innerHTML = guvar3;

	//	PHP code taken from course content. I couldn't figure out how to assign variables to the entire table in one go, so repeated it for each product.
	<?php

	//Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "G00388038";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

	//Test if connection occoured
	if (mysqli_connect_errno()) {
		die("DB connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")");
	}

	if (!$connection) {
		die('Could not connect: ' . mysqli_error());
	}

	//Save the Query
	//This query is looking for the entire row from the Products table with id=4
	$sql = "SELECT * FROM products WHERE id=4;";

	//Query Database
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);

	// Close database connection
	mysqli_close($connection);
	?>

	//	Variables read from php for violin title, description and price.
	var vivar = "<?php echo $row['Description'] ?>";
	document.getElementById('descVar4').innerHTML = vivar;
	var vivar2 = "<?php echo $row['Price'] ?>";
	document.getElementById('priceVar4').innerHTML = vivar2;
	var vivar3 = "<?php echo $row['Title'] ?>";
	document.getElementById('titleVar4').innerHTML = vivar3;

	//	PHP code taken from course content. I couldn't figure out how to assign variables to the entire table in one go, so repeated it for each product.
	<?php

	//Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "G00388038";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

	//Test if connection occoured
	if (mysqli_connect_errno()) {
		die("DB connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")");
	}

	if (!$connection) {
		die('Could not connect: ' . mysqli_error());
	}

	//Save the Query
	//This query is looking for the entire row from the Products table with id=5
	$sql = "SELECT * FROM products WHERE id=5;";

	//Query Database
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);

	// Close database connection
	mysqli_close($connection);
	?>

	//	Variables read from php for piano title, description and price.
	var pivar = "<?php echo $row['Description'] ?>";
	document.getElementById('descVar5').innerHTML = pivar;
	var pivar2 = "<?php echo $row['Price'] ?>";
	document.getElementById('priceVar5').innerHTML = pivar2;
	var pivar3 = "<?php echo $row['Title'] ?>";
	document.getElementById('titleVar5').innerHTML = pivar3;

	//	PHP code taken from course content. I couldn't figure out how to assign variables to the entire table in one go, so repeated it for each product.
	<?php

	//Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "G00388038";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

	//Test if connection occoured
	if (mysqli_connect_errno()) {
		die("DB connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")");
	}

	if (!$connection) {
		die('Could not connect: ' . mysqli_error());
	}

	//Save the Query
	//This query is looking for the entire row from the Products table with id=6
	$sql = "SELECT * FROM products WHERE id=6;";

	//Query Database
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);

	// Close database connection
	mysqli_close($connection);
	?>

	//	Variables read from php for keyboard title, description and price.
	var kevar = "<?php echo $row['Description'] ?>";
	document.getElementById('descVar6').innerHTML = kevar;
	var kevar2 = "<?php echo $row['Price'] ?>";
	document.getElementById('priceVar6').innerHTML = kevar2;
	var kevar3 = "<?php echo $row['Title'] ?>";
	document.getElementById('titleVar6').innerHTML = kevar3;

	//	PHP code taken from course content. I couldn't figure out how to assign variables to the entire table in one go, so repeated it for each product.
	<?php

	//Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "G00388038";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

	//Test if connection occoured
	if (mysqli_connect_errno()) {
		die("DB connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")");
	}

	if (!$connection) {
		die('Could not connect: ' . mysqli_error());
	}

	//Save the Query
	//This query is looking for the entire row from the Products table with id=7
	$sql = "SELECT * FROM products WHERE id=7;";

	//Query Database
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);

	// Close database connection
	mysqli_close($connection);
	?>

	//	Variables read from php for saxophone title, description and price.
	var savar = "<?php echo $row['Description'] ?>";
	document.getElementById('descVar7').innerHTML = savar;
	var savar2 = "<?php echo $row['Price'] ?>";
	document.getElementById('priceVar7').innerHTML = savar2;
	var savar3 = "<?php echo $row['Title'] ?>";
	document.getElementById('titleVar7').innerHTML = savar3;

	//	PHP code taken from course content. I couldn't figure out how to assign variables to the entire table in one go, so repeated it for each product.
	<?php

	//Create a database connection
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpassword = "";
	$dbname = "G00388038";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

	//Test if connection occoured
	if (mysqli_connect_errno()) {
		die("DB connection failed: " .
			mysqli_connect_error() .
			" (" . mysqli_connect_errno() . ")");
	}

	if (!$connection) {
		die('Could not connect: ' . mysqli_error());
	}

	//Save the Query
	//This query is looking for the entire row from the Products table with id=8
	$sql = "SELECT * FROM products WHERE id=8;";

	//Query Database
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);

	// Close database connection
	mysqli_close($connection);
	?>

	//	Variables read from php for trumpet title, description and price.
	var trumpetVar = "<?php echo $row['Description'] ?>";
	document.getElementById('descVar8').innerHTML = trumpetVar;
	var trumpetVar2 = "<?php echo $row['Price'] ?>";
	document.getElementById('priceVar8').innerHTML = trumpetVar2;
	var trumpetVar3 = "<?php echo $row['Title'] ?>";
	document.getElementById('titleVar8').innerHTML = trumpetVar3;
</script>