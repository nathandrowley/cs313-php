<?php

$places = $_POST["places"];

?>
<html>
<head>
  <title>Shopping Cart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<h1>Shopping Cart</h1>

<p>Items selected for purchase:</p>

<ul>

<?php
foreach ($places as $place)
{

   $place_clean = htmlspecialchars($place);
   echo "<li><p>$place_clean</p></li>";
}
?>

</ul>


<form action="Store.html" method="get" name="Web2cart">
<input type="Submit" value="Continue Shopping"><br>
</form>

<form action="Checkout.php" method="get" name="Web2cart">
<input type="Submit" value="Continue to Checkout"><br>
</form>
