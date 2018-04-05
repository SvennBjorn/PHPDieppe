<h1>Inscription</h1>
<?php
if (isset($_POST['frmRegistration'])) {

    $nom = $_POST['nom'] ?? "";
    $prenom = $_POST['prenom'] ?? "";
    $mail = $_POST['mail'] ?? "";
    $mdp = $_POST['mdp'] ?? "";

}

else {
    echo "Je ne viens pas du formulaire";
    include "frmRegistration.php";
}


