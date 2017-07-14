<?php
 // connect to database

$connect=mysqli_connect("localhost", "root", "","cmpta");

if (mysqli_connect_error()) {
	die("cannot connect to database".mysqli_connect_error());
}
else{
	
}

?>
<html>

<head>
	
	<title>search</title>
			<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
	
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
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
    

 $query="SELECT * from compte where NumeroDuCompte like '%" . $NumeroDuCompte ."%'";
 

 $result=mysqli_query($connect, $query);
if (!$result) {
	
 	echo "aucun resultat";
 }
}
?>

<table align="center" border="1">
	<tr>

<th rowspan=2>NumeroDuCompte</th>
<th rowspan=2>Libelle</th>
<th colspan=2><center>Mouvement</center></th>
<th colspan=2><center>Solde</center></th>
<th rowspan=2>Action</th>
</tr>
<tr>
<th>Debit</th>
<th>credit</th>
<th>Debiteur</th>
<th>Crediteur</th>
</tr>


 <?php

 if (isset($_POST['submit'])) {


 while($row=mysqli_fetch_assoc($result)) {

 	 echo "<tr><th>". $row['NumeroDuCompte']."</th>"."<th>".$row['Libelle']."</th>"."<th>".$row['Debit']."</th>"."<th>".$row['credit']."</th>"."<th>".$row['Debiteur']."</th>"."<th>".$row['Crediteur']."</th>"."<th><a href='supprimercontact.php? NumeroDuCompte=".$row['NumeroDuCompte']."'>Supprimer </a> | <a href='modifier.php? NumeroDuCompte=".$row['NumeroDuCompte']."'> Modifier </a> </th></tr>";

 	}
 }
 	?>
 

 </table>
</body>
</html>