<?php
//la stringa mysql_connect deve essere compilata con i dati relativi al proprio database
// HOST = IP server Mysql
// USER = Nome utente databse
// PASSWORD = Password utente databse
$link = mysqli_connect("localhost","root","");//database connection
// Qui sotto al posto di NOME_DATABASE, inserite il nome del vostro DB
mysqli_select_db($link,"registrazione");

// recupero i valori si NOME e INDIRIZZO e li assegno alle variabili $name e $address
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$ConfermaPassword = $_POST['ConfermaPassword'];
$Email = $_POST['Email'];



//inserting data order
$toinsert = "INSERT INTO entry
			(username,password,confermapassword,email)
			VALUES
			('$Username',
			'$Password',
			'$ConfermaPassword',
			 '$Email')";

//declare in the order variable
$result = mysqli_query($link,$toinsert) or die("Problema nella query \"$toinsert\": " .mysqli_error($link));  	//order executes
if($result){
	echo("<br>Inserimento avvenuto correttamente, attendi 5 secondi e sarai reindirizzato alla pagina di Login...");
	 header( "refresh:5;url=login.php" );
	 exit;
} else{
	echo("<br>Inserimento non eseguito, attendi 5 secondi e sarai reindirizzato alla pagina di registrazione...");
	header( "refresh:5;url=registrazione.html" );
}
?>
