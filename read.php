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
<head><link rel="stylesheet" href="GestionContabiliteApp.css"> </head>


	<title>reader</title>
	


<body style= "background:#696969">
 

</br></br></br>

	           
	                <form action="search.php" method="POST" align='center' >                     
					<input  id="cherche" type="text" name="NomComplet" placeholder="chercher ici" required="" >
					<input id="search" type="submit" name="submit" value="chercher">
                    
				</form>
				</br></br>
				
<?php
 // read from database
 $query="SELECT * from compte" ;
 $result=mysqli_query($connect, $query);
 if(! $result){
 	die("Error in query");
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
  // write or display database

 while($row=mysqli_fetch_assoc($result)) {

 	 echo "<tr><th>". $row['NumeroDuCompte']."</th>"."<th>".$row['Libelle']."</th>"."<th>".$row['Debit']."</th>"."<th>".$row['credit']."</th>"."<th>".$row['Debiteur']."</th>"."<th>".$row['Crediteur']."</th>"."<th><a href='supprimercontact.php? NumeroDuCompte=".$row['NumeroDuCompte']."'>Supprimer </a> | <a href='modifier.php? NumeroDuCompte=".$row['NumeroDuCompte']."'> Modifier </a> </th></tr>";

 	}
 	?>
 	 <?php

 mysqli_free_result($result);

 ?>

</table>
</body>
</html>
