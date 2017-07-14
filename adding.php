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
	<title>ajouter</title>
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
<body style= "background:#FFEBCD">




<?php
if (isset($_POST['submit'])) {
	$NumeroDuCompte=$_POST['NumeroDuCompte'];
	$Libelle=$_POST['Libelle'];
	$Debit=$_POST['Debit'];
	$credit=$_POST['credit'];
	$Debiteur=$_POST['Debiteur'];
	$Crediteur=$_POST['Crediteur'];

	$query="insert into compte (NumeroDuCompte, Libelle, Debit, credit, Debiteur, Crediteur) 
	values ('". $NumeroDuCompte."','". $Libelle."','". $Debit."','". $credit."','". $Debiteur."','". $Crediteur."')";


    
$result=mysqli_query($connect, $query);
	if ($result) {
		header("Location:reader.php");
		}
		else{
		
	}
}
?>



</body>
</html>