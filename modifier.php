<?php

$connect=mysqli_connect("localhost", "root", "","cmpta");

if (mysqli_connect_error()) {
	die("cannot connect to database".mysqli_connect_error());
}
else{

}

?>

<html>
<head>
<title>modifier</title>
			<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
	
}

td, th {
    border: 1px solid #008080;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #008080;
}
a{
	text-decoration: none;
	color: black;
}
</style>
</head>
<body style= "background:#696969">

</br></br></br></br>

<center><h1>Modifier Contact</h1>

            <form action="" method="post">


	<input type="text" name="Libelle" placeholder="Libelle" required=""></br></br>
    <input type="number" name="Debit" placeholder="Debit" required=""></br></br>


	<input type="number" name="credit" placeholder="credit" required=""> </br></br>

	<input type="number" name="Debiteur" placeholder="debiteur" required=""></br></br>
    <input type="number" name="Crediteur" placeholder="crediteur" required=""></br></br>

	<input type="submit" name="submit" value="ajouter">




</form>	</center>
<?php
if (isset($_POST['submit'])) {
	$Libelle=$_POST['Libelle'];
	$Debit=$_POST['Debit'];
	$credit=$_POST['credit'];
	$Debiteur=$_POST['Debiteur'];
	$Crediteur=$_POST['Crediteur'];


    $query="update compte set Libelle='". $Libelle."',Debit='". $Debit."',credit='". $credit."',Debiteur='". $Debiteur."',crediteur='". $crediteur."'where NumeroDuCompte=". $_GET['NumeroDuCompte'];

  

$result=mysqli_query($connect, $query);
	if ($result) {
			header("Location:reader.php");
	}else{
		die(mysqli_error($connect));
	}
}
?>

</body>
</html>