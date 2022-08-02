<!-- header -->
<?php
$title = "Accueil"; // title for current page
include("partials/_header.php") // include header
?>
<!-- main-content -->
<div class="pt-16 wrap__content">
  <!-- head content -->
  <div class="wrap__content-head text-center">
    <h1 class="text-blue-500 text-5xl uppercase font-black">App game</h1>
    <p>L'app qui reprtorie vos jeux</p>
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
        <!-- row 1 -->
        <tr>
          <th>1</th>
          <td>Mario</td>
          <td>Plateforme</td>
          <td>Switch</td>
          <td>33.99</td>
          <td>3</td>
          <td>
            <a href="show.php">
              <img src="img/loupe.png" alt="loupe" class="w-4">
            </a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

</div>
<!-- end main-content -->

<!-- footer -->
<?php
include("partials/_footer.php") // include footer
?>