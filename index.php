<!DOCTYPE html>
<html>

<!--Obiettivi:-->
<!--1. Immagazzinare CV in SQL;-->
<!--2. Permettere agli utenti di registrarsi;-->
<!--3. Permettere agli utenti di loggare;-->
<!--4. Mail automatica.-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="icon" href="img/654141.png">
    <link rel="stylesheet" href="stileindex.css" type="text/css">
    <title>Il Valuta CV</title>
</head>

<body>
    <div>
        <span class="d-block p-2 bg-primary text-white"
            style="text-align: center; font-size: large; position: relative"><span style="text-align: center; padding-left: 10%">Quanto funziona bene il tuo CV?
                Ottieni gratuitamente un resoconto da un esperto! </span>
        </span>
        <span id="immagine"><img src="img/fotomia-removebg-preview.png"></span>
        <!-- <span id="bottone"> -->
        <!-- <button type="button"
                class="btn btn-outline-primary" style="margin-bottom: 120px;margin-left: 1%;">Carica
                il tuo CV qui</button> -->
        <!-- </span> -->


        <!-- da qui -->

        <div style="position: absolute; top: 40%; left: 50%; margin-top: -70px; margin-left: -50px; height: 200px;">
            <form method="post" enctype="multipart/form-data">
                <input type="file" name="file">
                <br>
                <input type="submit" name="submit" class="btn btn-outline-primary">
            </form>
        </div>

        <?php
        $localhost = "localhost"; #localhost
        $dbusername = "root"; #username di phpmyadmin
        $dbpassword = ""; #password di phpmyadmin
        $dbname = "dbase"; #database name
        $message = "File caricato correttamente.";
        #connection string

        $conn = mysqli_connect($localhost, $dbusername, $dbpassword, $dbname);

        if (isset($_POST["submit"])) {
            if (is_uploaded_file($_FILES["file"]["tmp_name"]) && ($_FILES["file"]["type"] == 'application/pdf')) {
                echo "";
                #file name ha un numero casuale, in modo che non verrà rimpiazzato
                $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];
                #nome temporaneo per immagazzinare il file
                $tname = $_FILES["file"]["tmp_name"];
                #path per l'upload
                $uploads_dir = 'img';
                #spostare l'upload in una directory specifica
                move_uploaded_file($tname, $uploads_dir . '/' . $pname);
                #sql query per inserire in un databse
                $sql = "INSERT into fileup(pdf) VALUES('$pname')";
                if (mysqli_query($conn, $sql)) {
                    echo "<script type='text/javascript'>alert('$message');</script>";
                } else {
                    echo "Errore.";
                }
            } else {
                echo "Il file è di tipo errato.";
            }
      }

        ?>

        <!-- resto -->

        <div id="testo">
            <span id="immaginee"><img src="img/1728007.png"></img></span> <span class="medium text-info" id="testo2">>>
                Resoconto generale personalizzato </span><br>
            <span id="immaginee"></span><img src="img/Immagine 2023-01-09 202426.png"></img></span> <span
                class="medium text-info" id="testo2">>> Feedback diviso punto per punto</span><br>
            <span id="immaginee"></span><img src="img/4934428-200.png"></img></span><span class="medium text-info"
                id="testo2">>> Consigli mirati per perfezionare il CV</span><br>
            </span>
        </div>
    </div>

    <div class="text-center p-3 text-white" style="background-color: rgba(63, 163, 239, 0.811); margin-top: 10px;"
        id="footera">
        Il Valuta CV ©
        <a class="text-white">Gabriele Glinni 2023</a>

        </footer>
    </div>
    </div>
</body>