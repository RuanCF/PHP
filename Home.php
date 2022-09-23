<?php
// Inicialize a sessão
session_start();

// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: Index.php");
    exit;
}
?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./Style/Home.css">
</head>

<body>
    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="./Home.php">Brain Tec</a>
            <ul class="pure-menu-list">
                <li class="pure-menu-item pure-menu-selected"><a href="#" class="pure-menu-link">Home</a></li>
                <li class="pure-menu-item"><a href="./UniMed.php" class="pure-menu-link">UniMed</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Page 2</a></li>
                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Page 3</a></li>
                <a href="./Logout.php">
                    <input type="button" class="btn btn-danger abs" value="Sair">
                </a>
            </ul>
        </div>
    </div>
</body>

</html>