<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Hopital E2N</title>
        <link rel="stylesheet" href="assets/css/materialize.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" href="assets/css/style.css" />
    </head>
    <body class="part2">
        <!-- Dropdown Structure sommaire-->
        <ul id='dropdownSummary' class='dropdown-content'>
            <li><a href="view/ajout-patient.php">Ajouter un patient</a></li>
            <li><a href="view/liste-patient.php">Liste des patients</a></li>
            <li><a href="view/ajout-rendezvous.php">Prise de rendez-vous</a></li>
            <li><a href="view/liste-rendezvous.php">Liste des rendez-vous</a></li>
        </ul>
        <nav class="nav-extended nav2">
            <div class="nav-wrapper">
                <a href="../index.php" class="brand-logo"><i class="large material-icons">local_hospital</i></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a class="dropdown-button" href="#" data-activates="dropdownSummary">Sommaire</a></li>
                    <li><a href="../partie1/view/partie1.php">Partie 1</a></li>
                    <li><a href="partie2.php">Partie 2</a></li>
                    <li><a href="../TP1/tp1.php">T.P 1</a></li>
                    <li><a href="../TP2/tp2.php">T.P 2</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="../partie1/view/partie1.php">Partie 1</a></li>
                    <li><a href="partie2.php">Partie 2</a></li>
                    <li><a href="../TP1/tp1.php">T.P 1</a></li>
                    <li><a href="../TP2/tp2.php">T.P 2</a></li> 
                </ul>
            </div>
        </nav>
        <div class="background" id="home">
            <h1>Accueil</h1>
        </div>
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/materialize.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>