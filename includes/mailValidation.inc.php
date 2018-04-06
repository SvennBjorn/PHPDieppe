<?php
echo "Ca marche!";
if (isset($_GET['id']) && isset($_GET['token'])){
    $id = $_GET['id'];
    $token = $_GET['token'];
    $connection = mysqli_connect("localhost","root","","phpdieppe");
    
    if (!$connection) {
        die("Erreur MySQL" . mysqli_connect_errno() ." | " .mysqli_connect_error());
    }
    else {
        $requeteVerif= "SELECT * FROM T_USERS
                        WHERE ID_USER=$id
                        AND USETOKEN='$token'";
        if ($resultatRequete = mysqli_query($connection,$requeteVerif)){
            $nbrResultats = mysqli_num_rows($resultatRequete);
            mysqli_free_result($resultatRequete);
            
            if ($nbrResultats > 0){
                $resultatUpdate = "UPDATE T_USERS
                                    SET USEVERIF=1
                                    WHERE ID_USER=$id";
            if (mysqli_query($connection, $resultatUpdate)) {
                echo "Inscription validée";
            }
            else {
                echo "Inscription pas validée, mais alors pas validée du tout";
            }
        }
        else {
            echo "<h1>Bien tenté, mais essaie encore</h1>";
        }
    }

    else{
    echo 'erreur';


        }
    }
}