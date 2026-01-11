<?php

// Recupero i dati inviati dal form tramite il metodo POST

$id = $_POST['id'];
$nome  = $_POST['nome'];
$cognome = $_POST['cognome'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// creazione connessione

$conn = mysqli_connect($servername, $username, $password, $dbname);

// controllo connessione

if (!$conn) {
  die("connessione  fallita: " . mysqli_connect_error());
}

//Definizione della Query SQL

$sql = "INSERT INTO utenti (id, nome, cognome)
VALUES ('$id', '$nome', '$cognome')";

//Esecuzione e verifica del risultato
//invia effettivamente il comando al database
if (mysqli_query($conn, $sql)) {

  //Se l'operazione va a buon fine, stampa un messaggio di successo.

  echo "dati inseriti con successo";
} else {

//Se fallisce (ad esempio se la tabella non esiste), stampa l'errore.

  echo "Errore: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

echo "<br><A HREF= 'index.html'> Torna al menu";

?>

