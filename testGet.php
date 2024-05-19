<?php  
if(isset($_GET['submitOrder'])) {

	// String passed inside our GET variable comes from the name attribute of our input element 
	$item_price = $_GET['item'];
	$quantity = $_GET['quantity'];
	$cash = $_GET['cash'];

	// Formulae
	$total = $item_price * $quantity;
	$change = $cash - $total;

	// Print the result
	echo "<h2>The total cost is " . $total . "</h2>";
	echo "<h2>Your change is " . $change . "</h2>";
	echo "<h4>Thank you for the order</h4>";

}
?>