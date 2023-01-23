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


        <?php
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $first_name; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
    </body>
    </html>

    <div class="text-center p-3 text-white" style="background-color: rgba(63, 163, 239, 0.811); margin-top: 10px;"
         id="footera">
        Il Valuta CV ©
        <a class="text-white" href="https://mdbootstrap.com/">Gabriele Glinni 2023</a>

        </footer>
    </div>
</div>
</body>
