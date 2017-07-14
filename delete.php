<?php
 // connect to database
//Ha4e example tov chi zaydou an iyak tchovi bih 4e
$connect=mysqli_connect("localhost", "root", "","cmpta");

if (mysqli_connect_error()) {
	die("cannot connect to database".mysqli_connect_error());
}
else{
	
}

?>

<?php

$query="delete from compte where NumeroDuCompte=". $_GET['NumeroDuCompte'];

$result=mysqli_query($connect, $query);
if ($result) {
		header("Location:reader.php");
}
else{
	die(mysqli_error($query));
}
?>
