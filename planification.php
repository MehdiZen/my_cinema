<!-- PHP -->
<?php
require('truc.php');

// récupérer tous les utilisateurs
$dubstep = $_POST["fetch"];
$date = $_GET['trip-start'];

// if ($dubstep !='') {
$sql = "SELECT title, movie_schedule.seance, movie_schedule.id
    FROM movie 
    LEFT JOIN movie_schedule ON movie.id = movie_schedule.id
    WHERE title like '%$dubstep%' OR movie_schedule.seance like '%$dubstep%'";
// }
$stmt = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/planification.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/pftj70mj5y571.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="./assets/pftj70mj5y571.ico" />
    <script src="https://kit.fontawesome.com/a1eea65c7b.js" crossorigin="anonymous"></script>
    <title>Fin du rêve</title>
</head>

<body>
    <header>
        <h1>SITE de FILM sur iNTeRnEt onLINE</h1>
        <ul class=horizontal>
            <li><a href="./myphp.php">Recherche</a></li>
            <li><a href="./membre.php">Espace membres</a></li>
            <li><a href="./gestion.php">Gestion</a></li>
            <li><a href="#" class=active>Planification </a></li>
        </ul>
    </header>
    <main>
        <div class="search">
            <form action="" method="post">
                <input name="fetch" type="text" id="fetch" placeholder="Rechercher un film" />
                <!-- <input type="submit" name="valider" value="OK" /> -->
            </form>
            <form action="planification.php" method="get">
            <input type="date" id="start" name="trip-start" step="1"  min="2023-01-01" max="2042-4-24">
            <input type="submit" name="valider" value="OK" />
            </form>
        </div>
        <div>
            <h4>Liste des films trouvés</h4>
        </div>
        <div class=tab>
            <table>
                <div class="centerbogoss">
                    <thead>
                        <tr>
                            <th class=prenom>Titre</th>
                            <th>Prochaine séance</th>
                            <th>Ajouter une séance</th>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                            <tr>
                                <td><?php
                                echo htmlspecialchars($row['title']); ?></td>
                                <td><?php echo htmlspecialchars($row['seance']); ?></td>
                               <td> <?php echo "<div class= frankjaune><a href=date.php?id=$row[id]&date=$date><i class='fa-solid fa-plus'></i></a></div>"; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </div>
            </table>
        </div>
        </div>
        </div>
    </main>