<!DOCTYPE html>
<html>
<title>Jack's order</title>
<body>
<h1>jack's order</h1>
<h2>Order Results</h2>
<?php 
 echo "<p>Order processed at";
 echo date('H:i, jS F Y');
 echo "</p>"

?>

<?php
 // create short variable names
$guitarqty = $_POST['guitarqty'];
$ampqty = $_POST['ampqty'];
$stringqty = $_POST['stringqty'];
?>

<?php

echo '<p>Your order is as follows:</p>';

echo htmlspecialchars($guitarqty).' guitars<br />';

echo htmlspecialchars($ampqty).' amps<br />';

echo htmlspecialchars($stringqty).' strings<br />';

?> 







</body>
</html>
