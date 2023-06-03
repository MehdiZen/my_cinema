<?php
require('truc.php');

$truc = $_GET['id'];
$sql = "DELETE FROM membership
WHERE id_user = $truc";
$pdo->query($sql);
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