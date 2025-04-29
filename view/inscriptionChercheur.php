<?php 


$popup = false;
$message = "";

if (isset($_SESSION["inscription_chercheur_success"])) {
    if ($_SESSION["inscription_chercheur_success"]) {
        $popup = true;
        $message = "Inscription du chercheur réussie ! 🎉";
    } else {
        $popup = true;
        $message = "Erreur inscription";
    }
    unset($_SESSION["inscription_chercheur_success"]);
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription du chercheur</title>
    <link rel="stylesheet" href="/projetMedocs/view/css/css.css">
</head>
<?php include "header.php" ?>
<body>
    <div class="container">
        <div class="formulaire">
        <h2>Inscription du chercheur</h2>
        <form action="index.php" method="post">
            <div>
                <label for="nom">Nom :</label><br/>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div>
                <label for="prenom">Prénom :</label><br/>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div>
                <label for="username">Specialite :</label><br/>
                <input type="text" id="specialite" name="specialite" required>
            </div>
            <button type="submit" name="action" class="btnContainer" value="inscriptionChercheur">S'inscrire</button>
        </form>
        <div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <p id="popup-message"></p>
    </div>
</div>

    <script>
    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }

    // Vérifie si une popup doit s'afficher
    let inscriptionResult = <?php echo json_encode($popup); ?>;
    let inscriptionMessage = <?php echo json_encode($message); ?>;

    if (inscriptionResult) {
        document.getElementById("popup-message").textContent = inscriptionMessage;
        document.getElementById("popup").style.display = "block";
    }
    </script>
        </div>
    </div>
    <?php include "footer.php" ?>
</body>
</html>