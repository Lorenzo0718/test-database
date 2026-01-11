<?php

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
//richiesta dei dati

$sql = "SELECT id, nome, cognome FROM utenti";

//comando viene inviato al database. La risposta (l'elenco dei nomi) viene salvata nella variabile $result

$result = mysqli_query($conn, $sql);

//i dati diventano visibili all'utente

if (mysqli_num_rows($result) > 0) {

  // Controlla se il database ha trovato almeno una persona. Se è vuoto, andrà direttamente a scrivere "0 results".
  //finché ci sono righe da leggere, il codice ne prende una alla volta e la mette dentro $row
  while($row = mysqli_fetch_assoc($result)) {

    //stampa a video il contenuto

    echo "id: " . $row["id"]. " - Nome: " . $row["nome"]. " " ." - Cognome: ". $row["cognome"]. "<br>";
  }
} else {
  echo "0 results";
}

//chiude la connessione

mysqli_close($conn);

echo "<br><A HREF= 'index.html'> Torna al menu";

?>