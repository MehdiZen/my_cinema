<?php
require('truc.php');

$truc = $_GET['valider'];
$voituredesport = $_GET['id'];
$date = $_GET['date'];
// $sql = "DELETE FROM movie_schedule
// WHERE movie_schedule.id = $voituredesport";
// $pdo->query($sql);
// $sql = "INSERT INTO movie_schedule
// VALUES ($voituredesport, 4,  5, curdate(), curdate()";
// $pdo->query($sql);
$sql = "UPDATE movie_schedule SET seance = '$date' where id = $voituredesport";
$pdo->query($sql);

?>
<html>
<head>
    <title>Redirection...</title>
    <meta http-equiv="refresh" content="0; URL=planification.php">
</head>
<body>
    <?php echo "Redirection en cours"?>
</body>
</html>