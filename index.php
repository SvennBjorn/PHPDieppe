<?php
include "./functions/callPage.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel= "stylesheet" type= "text/css" href= "./asset/css/style.css">
    <title>Dieppe Merguez Corporation</title>
</head>
<body>
    <div id="container">
        <?php include "./includes/header.php"; ?>
<main>
<?php
callPage();
?>
</main>
<?php
include "./includes/footer.php";
?>
</body>
</html>

