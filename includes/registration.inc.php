<h1>Registration</h1>
<?php
if (isset($_POST['frmRegistration.php'])) {
    echo "Je viens du formulaire";
    include "frmRegistration.php";
}

else {
    echo "Je ne viens pas du formulaire";
    include "frmRegistration.php";
}


