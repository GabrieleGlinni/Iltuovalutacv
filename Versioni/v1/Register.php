<!DOCTYPE html>
<html>

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
                Ottieni gratuitamente un resoconto da un esperto! </span><span style="float: right; padding-right:1%; font-size: medium">Login • Registrati</span>
        </span>

    <form action="insert.php" method="post">
        <p>
            <label for="firstName">Nome:</label>
            <input type="text" name="first_name" id="firstName" required>
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </p>
        <p>
            <label for="Password">Password:</label>
            <input type="password" name="password" id="Password" required>
        </p>
        <input type="submit" value="Submit">
    </form>

<div class="text-center p-3 text-white" style="background-color: rgba(63, 163, 239, 0.811); margin-top: 10px;"
     id="footera">
    Il Valuta CV ©
    <a class="text-white" href="https://mdbootstrap.com/">Gabriele Glinni 2023</a>

    </footer>
</div>
</div>
</body>
