<?php
require('truc.php');

$truc = $_GET['valider'];
$input = $_GET['fetch'];
$sql = "INSERT INTO movie_seen VALUES($truc, $input)";
$pdo->query($sql);
?>
<html>

<head>
    <title>Redirection...</title>
    <meta http-equiv='refresh' content='3; URL=historique.php?id=<?php echo $truc;?>'>

<body>
    <?php echo "Redirection en cours"?>
</body>

</html>