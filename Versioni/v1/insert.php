<?php

$conn = mysqli_connect("localhost", "root", "", "dbase");

// Check connection
if($conn === false){
    die("ERRORE: Impossibile connettersi. "
        . mysqli_connect_error());
}

// Tre valori da passare all'SQL
$first_name =  $_REQUEST['first_name'];
$email = $_REQUEST['email'];
$password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);

// nome table: ListaUtenti
$sql = "INSERT INTO ListaUtenti VALUES ('$first_name','$email','$password')";

if(mysqli_query($conn, $sql)){
    echo "<h3>Dati immagazzinati correttamente dal Gab in SQL.</h3>";

    echo nl2br("\n$first_name\n $email\n $password");
} else{
    echo "ERRORE: Qualcosa non è andato come doveva."
        . mysqli_error($conn);
}

// Chiudi connessione
mysqli_close($conn);
?>