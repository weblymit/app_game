<!-- header -->
<?php
// demarrer session
session_start();
$title = "Accueil"; // title for current page
include("partials/_header.php"); // include header
include("helpers/functions.php"); // include function
// inclure PDO pour la connexion a la BDD dans mon script
require_once("helpers/pdo.php");

//1-  Query to get all games
$sql = "SELECT * FROM jeux";
//2- Prépare la query (preformatter)
$query = $pdo->prepare($sql);
//3 - Execute ma requette
$query->execute();
//4 - stock my query in variable
$games = $query->fetchAll();
// debug_array($games)
?>
<!-- main-content -->
<div class="pt-16 wrap__content">
  <!-- head content -->
  <div class="wrap__content-head text-center">
    <h1 class="text-blue-500 text-5xl uppercase font-black">App game</h1>
    <p>L'app qui repertorie vos jeux</p>

    <?php
    // je verifie que session error est vide ou pas
    if ($_SESSION["error"]) { ?>
      <div class="bg-red-400 text-white py-6">
        <?= $_SESSION["error"] ?>
      </div>
    <?php } 
    
    // je vide ma variable $_SESSION["error"] pour qu'il n'affiche pas de message en creant un array vide
    $_SESSION["error"] = [];
    ?>

  </div>
  <!-- table -->
  <div class="overflow-x-auto mt-16">
    <table class="table w-full">
      <!-- head -->
      <thead>
        <tr>
          <th>#</th>
          <th>Nom</th>
          <th>Genre</th>
          <th>Plateforme</th>
          <th>Prix</th>
          <th>PEGI</th>
          <th>Voir</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (count($games) == 0) {
          echo "<tr><td class=text-center>Pas de jeux disponible actuellement</td></tr>";
        } else { ?>
          <?php foreach ($games as $game) : ?>
            <tr>
              <th><?= $game['id'] ?></th>
              <td><?= $game['name'] ?></td>
              <td><?= $game['genre'] ?></td>
              <td><?= $game['plateforms'] ?></td>
              <td><?= $game['price'] ?></td>
              <td><?= $game['PEGI'] ?></td>
              <td>
                <a href="show.php?id=<?= $game['id'] ?>&name=<?= $game['name'] ?>">
                  <img src="img/loupe.png" alt="loupe" class="w-4">
                </a>
              </td>
            </tr>
          <?php endforeach ?>
        <?php } ?>
      </tbody>
    </table>
  </div>

</div>
<!-- end main-content -->

<!-- footer -->
<?php
include("partials/_footer.php") // include footer
?>