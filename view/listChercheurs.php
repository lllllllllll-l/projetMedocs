<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/projetMedocs/view/css/css.css">
        <title> GSB Group </title>
    </head>
<body>
    <?php include "header.php" ?>
    <div class="containers">
    <?php
        echo "<h1> Bienvenue ".$_SESSION["prenomUtilisateur"]." ".$_SESSION["nomUtilisateur"]. "</h1>"
    ?>
    <div class="content">
    <h2> Nos Chercheurs </h2>
<?php 

if (!empty($string_decode)) {

    echo '<table class="table table-info table-bordered table-striped">';
    echo '<thead><tr>';
    echo '<th>Nom</th>';
    echo '<th>Prenom</th>';
    echo '<th>Specialite</th>';
    echo '</tr></thead>';
    echo '<tbody>';
    
    for ($i = 0; $i < count($string_decode); $i++) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($string_decode[$i]["nom"]) . '</td>';   
        echo '<td>' . htmlspecialchars($string_decode[$i]["prenom"]) . '</td>';
        
        echo '<td>' . htmlspecialchars($string_decode[$i]["specialite"]) . '</td>';
        echo '</form>';
        echo '</td>';

        echo '</tr>';
    }
    
    echo '</tbody>';
    echo '</table>';

}
    
?>
</div>
</div>
<?php include "footer.php" ?>
</body>
</html>