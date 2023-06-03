<!-- PHP -->
<?php
require('truc.php');

// récupérer tous les utilisateurs
$dubstep = $_POST["fetch"];
// if ($dubstep !='') {
    $sql = "SELECT user.* FROM user 
    WHERE firstname LIKE '%$dubstep%' 
    OR lastname LIKE '%$dubstep%' 
    OR CONCAT(firstname, ' ', lastname) LIKE '%$dubstep%' 
    OR CONCAT(lastname, ' ', firstname) LIKE '%$dubstep%' 
    ORDER BY firstname";
// }
$stmt = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/bg.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/pftj70mj5y571.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="./assets/pftj70mj5y571.ico" />
    <title>Espoirs ?</title>
</head>

<body>
    <header>
        <h1>SITE de FILM sur iNTeRnEt onLINE</h1>
        <ul class=horizontal>
            <li><a href="./myphp.php">Recherche</a></li>
            <li><a href="#" class="active">Espace membres</a></li>
            <li><a href="./gestion.php">Gestion</a></li>
            <li><a href="./planification.php">Planification </a></li>
        </ul>
    </header>
    <main>

        <div class="search">
            <form action="" method="post">
                <input name="fetch" type="text" id="fetch" placeholder="Rechercher un membre" />
                <!-- <input type="submit" name="valider" value="OK" /> -->
            </form>
        </div>
        <div>
        <h4>Liste des utilisateurs trouvés</h4>
</div>
        <div class = tab>
        <table>
            <div class="centerbogoss">
                <thead>
                    <tr>
                        <th class= prenom>Prenom</th>
                        <th>Nom</th>
                        <th>Mail</th>
                        <th>Date de naissance</th>
                        <th>Adresse</th>
                        <th>Code postal</th>
                        <th>Ville</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                        <tr>
                            <td><?php $mw2 = $row['id'];
                            echo "<a href=historique.php?id=$mw2>".htmlspecialchars($row['firstname'])."</a>"; ?></td>
                            <td><?php echo "<a href=historique.php?id=$mw2>".htmlspecialchars($row['lastname'])."</a>"; ?></td>
                            <td><?php echo "<a href=historique.php?id=$mw2>".htmlspecialchars($row['email'])."</a>"; ?></td>
                            <td><?php echo "<a href=historique.php?id=$mw2>".strrev(substr(strrev(htmlspecialchars($row['birthdate'])), 8))."</a>"; ?></td>
                            <td><?php echo "<a href=historique.php?id=$mw2>".htmlspecialchars($row['address'])."</a>"; ?></td>
                            <td><?php echo "<a href=historique.php?id=$mw2>".htmlspecialchars($row['zipcode'])."</a>"; ?></td>
                            <td><?php echo "<a href=historique.php?id=$mw2>".htmlspecialchars($row['city'])."</a>"; ?></td></a>

                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </div>
        </table>
        </div>
        </div>
        </div>
    </main>