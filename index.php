<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Prédictions de match</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<?php

if (isset($_POST['ID']) && isset($_POST['mdp'])) {

    $id = $_POST['ID'];
    $mdp = $_POST['mdp'];

    echo "ID saisi : " . $id . "<br>";
    echo "Mot de passe saisi : " . $mdp . "<br>";

}
?>

<body>

    <header>

        <h1> Welcome les GOATs des predictions</h1>

        <!-- <?php echo $_GET['page']; ?>
        <?php echo $_GET['page2']; ?> -->

    </header>
    <div class="container">


        <nav>
            <h2> Classement acctuel:</h2>
            <ol>
                <li>Daly</li>
                <li>Antho</li>
                <li>Jerem</li>
                <li>Jorys</li>
            </ol>
            <?php

            $Score = [
                "daly" => 10,
                "Antho" => 8,
                "Jerem" => 7,
                "Jorys" => 3,
            ];

            foreach ($Score as $joueur => $points) {
                echo "Le score de " . $joueur . " est : " . $points . "<br>";
            }

            ?>
        </nav>
        <main>
            <form method="POST" action="index.php">

                <label for="Identifiant">ID : </label>
                <input type="text" id="Identifiant" name="ID"> <br><br>

                <label for="mdp">Mot de passe : </label>
                <input type="password" id="mdp" name="mdp"> <br><br>

                <input type="submit" value="Se connecter">

            </form>

            <select name="matchs" id="sel_match">
                <option value="">--Veuillez choisir un match--</option>
                <option value="match_RMA_BARCA">RMA_BARCA</option>
                <option value="match_OM_PSG">OM_PSG</option>
                <option value="match_EST_CA">EST_CA</option>
                <option value="match_UTD_CITY">UTD_CITY</option>
                <option value="match_JUV_ROM">JUV_ROM</option>
            </select><br><br>


            <label for="sel_vainqueur">Choisissez un vainqueur&nbsp;:</label>

            <select name="vainqueur" id="sel_vainqueur">
                <option value="">--selectionnez le vainqueur --</option>
                <option value="equipe1_gagne">1</option>
                <option value="equipe2_gagne">2</option>
                <option value="match_nul">X</option>

            </select><br><br>
            <label for="Score">Saisissez un score : </label>
            <input type="text" id="Score" name="Score"> <br><br>
        </main>

        <aside>
            <img class="resize_img" src="jer.png" alt="Jerem qui joue au foot" />
        </aside>
    </div>
    <footer>
        <p class="centered-text"> Contact : <a href="mailto:matchpredict@gmail.com">mailto:matchpredict@gmail.com</a>
        </p>
    </footer>



</body>


</html>