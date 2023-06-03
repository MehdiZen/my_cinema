<?php
require('truc.php');

$truc = $_GET['valider'];
$voituredesport = $_GET['grade'];
$sql = "DELETE FROM membership
WHERE id_user = $truc";
$pdo->query($sql);
$sql = "INSERT INTO membership(id_user, id_subscription) 
VALUES ($truc, $voituredesport)";
// $sql = "UPDATE membership SET id_subscription = 3 WHERE id = $truc";
$pdo->query($sql);
// $pdo->query($sql);
?>
<html>
<head>
    <title>Redirection...</title>
    <meta http-equiv="refresh" content="0; URL=gestion.php">
</head>
<body>
    <?php echo "Redirection en cours"?>
</body>
</html>