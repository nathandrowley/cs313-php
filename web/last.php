<?php
$name = htmlspecialchars($_POST["name"]);
$address = htmlspecialchars($_POST["$address"]);
$city = htmlspecialchars($_POST["city"]);
$state = htmlspecialchars($_POST["state"]);
$zip = htmlspecialchars($_POST["zip"]);
$places = $_POST["places"];
?>
<html>
<head>
  <title>Poster purchase confirmation or cancel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<h1>Thank you for your business</h1>

Name: <?php echo $_GET["name"]; ?><br>
Shipping Address: <?php echo $_GET["address"]; ?><br>
<?php echo $_GET["city"]; ?>, <?php echo $_GET["state"]; ?>, <?php echo $_GET["zip"]; ?>



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

</body>
</html>