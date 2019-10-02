<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!-- put name and address in a form and sent it to last.php -->

<h1>Shipping Address</h1>

<form action="last.php" method="get" name="Web2cart">

<label for="name">Name</label>
   <input type="text" id="name" name="name" placeholder="John M. Doe">

<label for="adr"><br> Address</label>
   <input type="text" id="address" name="address" placeholder="542 W. 15th Street">

<label for="city"><br> City</label>
   <input type="text" id="city" name="city" placeholder="New York"><br>

<label for="state">State</label>
   <input type="text" id="state" name="state" placeholder="NY"><br>

<label for="zip">Zip</label>
   <input type="text" id="zip" name="zip" placeholder="10001"><br>

<input type="submit" value="Complete purchase">
</form>

<form action="Shoppingcart.php" method="get" name="Web2cart">
<input type="Submit" value="Return to Cart"><br>
</form>

</body>
</html>
