<h1>Inscription</h1>
<?php
if (isset($_POST['frmRegistration'])) {

    $nom = $_POST['nom'] ?? "";
    $prenom = $_POST['prenom'] ?? "";
    $mail = $_POST['mail'] ?? "";
    $mdp = $_POST['mdp'] ?? "";

    $erreur = array();
    if ($nom == "") array_push($erreur, "Veuillez saisir votre nom");
    if ($prenom == "") array_push($erreur, "Veuillez saisir votre prenom");
    if ($mail == "") array_push($erreur, "Veuillez saisir votre mail");
    if ($mdp == "") array_push($erreur, "Veuillez saisir votre mot de passe");

    if(count($erreur) > 0){
    $message ="<ul>";
     for ($i=0; $i<count($erreur);$i++){
        $message .="<li>";
        $message .= $erreur[$i];
        $message .="</li>";
    }
        $message .="</ul>";
        echo $message;
        
        echo "Erreurs";


    }

    else{
        echo "Pas d'erreurs";


}

}

else {
    echo "Je ne viens pas du formulaire";
    include "frmRegistration.php";
}


