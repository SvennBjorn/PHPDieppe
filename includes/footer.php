<footer>
<p>© <?php echo date('Y');?> - Dieppe Agglo Merguez <abbr title="Corporation">Corp.</abbr></p>
<?php
if (isset($_POST['frmLogin'])) {

    $pseudo = $_POST['pseudo'] ?? "";
    $mdp = $_POST['mdp'] ?? "";

    $erreur = array();
    if ($pseudo == "") array_push($erreur, "Veuillez saisir votre nom");
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
}
?>
</footer>