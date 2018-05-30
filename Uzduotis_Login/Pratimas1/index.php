<html>
    <head>
        <meta charset="UTF-8">
        <title>Login'as</title>
        <style>
        body {
            text-align: center;
        }
        form {
            width: 20%;
            margin: auto;
        }
        hr {
            width:65%;
        }
        </style>
    </head>
    <body>
        <h2>Antraštė</h2>
        <form action="login.php" method="get">
            <fieldset><br>
            <input name="user" placeholder="Įveskite vardą" autofocus><br><br>
            <input name="pass" type="password" enctype="text/plain" placeholder="Įveskite slaptažodį"><br><br>
            <button>Prisijungti</button> 
            </fieldset>
        </form>
        <br><hr><br>
        <footer>
        <?php
        $x = ©;
        echo $x . date("Y");?>
        </footer>
    </body>
</html>