<?php 
session_start();

$offers = [
	['name' => 'Fishball', 'price' => 30,],
    ['name' => 'Kikiam',  'price' => 40,],
    ['name' => 'Corndog',  'price' => 50,],
];

if(!isset($_SESSION['username'])) {
	header('Location: login.php');

} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
		}
		span#one{
			color: red;
		}
		span#two{
			color: blue;
		}
	</style>
</head>
<body>
	<h1>Welcome to the canteen! <span id="one"><?php echo $_SESSION['username'];?></span></h1>

    <h2>Here are the prices: </h2>
    <ul>
      <li><?php echo $offers[0]['name']; ?>:   <?php echo $offers[0]['price']; ?>PHP</li>
      <li><?php echo $offers[1]['name']; ?>:   <?php echo $offers[1]['price']; ?>PHP</li>
      <li><?php echo $offers[2]['name']; ?>:   <?php echo $offers[2]['price']; ?>PHP</li>
    </ul>
    <p> </p>


    <!-- The form submits to the same page using GET method -->
    <form action="testGet.php" method="GET">

      <!-- Drop down list for the item -->
      <p><label>Choose your item to order: 
        <select name="item">
        <option value="<?php echo $offers[0]['price']; ?>"><?php echo $offers[0]['name']; ?></option>
        <option value="<?php echo $offers[1]['price']; ?>"><?php echo $offers[1]['name']; ?></option>
        <option value="<?php echo $offers[2]['price']; ?>"><?php echo $offers[2]['name']; ?></option>
      </select></label></p>
 
      <!-- Input field for the quantity -->
      <p><label>Quantity: <input type="text" name="quantity" /></label></p>

      <!-- Input field for the cash -->
      <p><label>Cash: <input type="text" name="cash" /></label></p>

      <!-- Submit button / -->
      <p><input type="submit" value="Submit" name="submitOrder"></p>
      
    </form>

	<a href="logout.php"><span id="two">Logout</span></a>
</body>
</html>