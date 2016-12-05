<?php
  if ((isset($_GET["id"])))
  {
    echo '<link rel="stylesheet" type="text/css" href="css/create2.css"/>';
    include('generate-menu.php');
    include('generate-data.php');
  }
  else if ((isset($_POST["nom"])) && (isset($_POST["description"]))
            && (isset($_POST["auto-fermante"])))
  {
    $nom = (isset($_POST["nom"])) ? $_POST["nom"] : "aucun";
    echo "<title>".$nom."</title>";
    echo '<link rel="stylesheet" type="text/css" href="css/create2.css"/>';
    include('generate-menu.php');
    echo '<section><div><h1 id="solo">la balise '.$nom.' a été ajouter</h1></div>';
    include('create.php');
    echo "</section>";
  }
  else
  {
    echo "<title>creation de balise</title>";
    include('generate-menu.php');
    include('create.html');
  }
?>
