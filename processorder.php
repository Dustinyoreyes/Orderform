<html>
<head>
		<title> James's Auto Parts - Order results</title>
</head>
<body>
<h1> James's Auto Parts</h1>
<h2>Order results</h2>
<?php
	
	echo "Order Processed on: " . date("m/d/y")."<br>";


//H is hour, i is minutes, j is the day of the month, S represents the th or rd, F represents the month, Y represents the year. 
$tireqty=$_POST['tireqty'];
$oilqty=$_POST['oilqty'];
$sparkqty=$_POST['sparkqty'];

echo "You ordered ". $tireqty. ' Tires<br />';
echo "You ordered ". $oilqty. ' Oils<br />';
echo "You ordered ". $sparkqty. ' Spark Plugs<br />';

$totalqty = 0;
$totalqty = $tireqty + $oilqty + $sparkqty;
echo "<br>Items ordered: ".$totalqty." <br />";
$totalamount = 0.00;
define ('TIREPRICE',100);
define ('OILPRICE',10);
define ('SPARKPRICE',4);
$totalamount = $tireqty*TIREPRICE +$oilqty*OILPRICE+$sparkqty*SPARKPRICE;
//The number_format gives you the decimal places.
echo "<br>Subtotal: $".number_format($totalamount,2)." <br />";
$taxrate = .10;

$totalamount = $totalamount * (1 + $taxrate);

echo "<br>Total including taxes: $".number_format($totalamount,2)." <br />";
echo "<br>";

if ($tireqty<10) {
	 $discount = 0;
	echo $discount = 0 . "%". " discount has been applied";
} elseif (($tireqty>=10) && ($tireqty<=49)) {
	echo $discount = 5 . "%". " discount has been applied";
} elseif (($tireqty>=50) && ($tireqty<=99)) {
	echo $discount = 10 . "%". " discount has been applied";
} elseif ($tireqty>=100) {
 	echo $discount = 15 . "%". " discount has been applied";

} 



?>

</body>

<br><br>
&copy; 2010-<?php echo date("Y")?>
</html>