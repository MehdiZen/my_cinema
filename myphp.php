<?php
require('truc.php');

$dubstep = $_POST["fetch"];
$genre = $_POST["filtre"];
    $sql = "SELECT movie.id, movie.title, movie.director, movie.duration, movie.release_date, movie.rating, distributor.name as distrib, genre.name as genren 
    FROM movie 
    INNER JOIN movie_genre ON movie.id = movie_genre.id_movie 
    JOIN genre ON movie_genre.id_genre = genre.id  
    JOIN distributor ON movie.id_distributor = distributor.id 
    where title like '%$dubstep%' OR director like '%$dubstep%' OR distributor.name like '%$dubstep%'
    order by movie.id";

if ($genre != "Tout" && $dubstep != '') {
    $sql = "SELECT movie.title, movie.director, movie.duration, movie.release_date, movie.rating, distributor.name as distrib, genre.name as genren 
    FROM movie 
    INNER JOIN movie_genre ON movie.id = movie_genre.id_movie 
    JOIN genre ON movie_genre.id_genre = genre.id 
    JOIN distributor ON movie.id_distributor = distributor.id 
    where genre.id like '$genre' AND (title like '%$dubstep%'OR director like '%$dubstep%' OR distributor.name like '%$dubstep%') 
    order by movie.id";
} 
elseif ($genre != "Tout" && $dubstep === '') {
        $sql = "SELECT movie.title, movie.director, movie.duration, movie.release_date, movie.rating, distributor.name as distrib, genre.name as genren 
        FROM movie 
        INNER JOIN movie_genre ON movie.id = movie_genre.id_movie 
        JOIN genre ON movie_genre.id_genre = genre.id 
        JOIN distributor ON movie.id_distributor = distributor.id 
        where genre.id like '%$genre%' 
        order by movie.id";
}
$stmt = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./assets/pftj70mj5y571.ico" />
    <link rel="shortcut icon" type="image/x-icon" href="./assets/pftj70mj5y571.ico" />
    <script src="https://kit.fontawesome.com/a1eea65c7b.js" crossorigin="anonymous"></script>
    <title>Désolation</title>
</head>

<body>
    <header>
        <h1>SITE de FILM sur iNTeRnEt onLINE</h1>
        <ul id ="horizontal" class = horizontal>
  <li><a href="#" class ="active">Recherche</a></li>
  <li><a href="./membre.php">Espace membres</a></li>
  <li><a href="./gestion.php">Gestion</a></li>
  <li><a href="./planification.php">Planification </a></li>
</ul>
<div id=munition>
</div>
    </header>
    <main>
<div class = FRANCE>
    <img id = FRANCE src="assets/2430166211_2-removebg-preview.png" alt="">
</div>
<!-- <video id="dumbledore" src="assets/_1_HOUR__Nya__arigato__You_can_eat_the_girl__AdobeExpress.mp4" autoplay></video> -->

        <div class="pépé">
            <p id=pépé><i class="fa-solid fa-triangle-exclamation"></i> NE PAS SURVOLER L'ALGERIE <i class="fa-solid fa-triangle-exclamation"></i></p>
        </div>
        <div class="mute">
        <p>Shift+"m" pour couper le son.</p>
        </div>
        <div class="mute">
        <p>Shift+"p" pour désactiver l'effet.</p>
        </div>
        <div class="mute">
        <p>Shift+"o" réactiver l'effet.</p>
        </div>
        <div class=sticky>
                    <iframe id="clio2" width="560" height="315" src="https://www.youtube.com/embed/QAzfKMSdEtY?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
        <form action="" method="post">
            <div class=selectito id = ded>
                <div class="selecto">
                    <select name="filtre" id="filtre">
                        <option value="Tout">Tout</option>
                        <option value="1">Action</option>
                        <option value="2">Animation</option>
                        <option value="3">Adventure</option>
                        <option value="4">Drama</option>
                        <option value="5">Comedy</option>
                        <option value="6">Mystery</option>
                        <option value="7">Biography</option>
                        <option value="8">Crime</option>
                        <option value="9">Fantasy</option>
                        <option value="10">Horror</option>
                        <option value="11">Sci-Fi</option>
                        <option value="12">Romance</option>
                        <option value="13">Family</option>
                        <option value="14">Thriller</option>
                        <!-- <input type="submit" id="okar" name="validar" value="OK" /> -->    
                    </select>
                </div>
                <div class="search">
                    <form action="" method="post">
                        <input type="text" id="film" name="fetch" value="">
                        <input type="submit" id="ok" name="valider" value="OK" />
                    </form>
                </div>
        </form>
        </div>
        <div id= "PV"></div>
        <div class=parchemin id=dede>
            <table>
                <div class="centerbogoss">
                    <h2>LE GRAAL</h2>
                    <thead>
                        <tr>
                        <th>id</th>
                            <th class=titre>Titre</th>
                            <th>Director</th>
                            <th>Duration</th>
                            <th>Release date</th>
                            <th>Rating</th>
                            <th>Genre</th>
                            <th>Distributeur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                            <tr>
                            <td><?php echo htmlspecialchars($row['id']); ?></td>

                                <td><?php echo htmlspecialchars($row['title']); ?></td>
                                <td><?php echo htmlspecialchars($row['director']); ?></td>
                                <td><?php echo htmlspecialchars($row['duration'])." min"; ?></td>
                                <td><?php echo strrev(substr(strrev(htmlspecialchars($row['release_date'])), 8)); ?></td>
                                <td><?php echo htmlspecialchars($row['rating']); ?></td>
                                <td><?php echo htmlspecialchars($row['genren']); ?></td>
                                <td><?php echo htmlspecialchars($row['distrib']); ?></td>
                            </tr>
                        <?php endwhile;?>
                    </tbody>
                </div>
            </table>
        </div>
    </main>
    <footer>
    </footer>
</body>
<script src="java.js"></script>

</html>