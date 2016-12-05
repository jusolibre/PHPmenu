<?php
  require_once 'connection.php';
  echo "<nav>";
  echo "<ul>";

  $i = 0;
  $bdd = my_connect();
  $sql = 'select nom,id from balise_list';
  $lol = $bdd->prepare($sql);
  $lol->execute();
  $result = ($lol) ? $lol->fetchAll() : NULL;

  echo '<li><a href="index.php?">Ajouter une balise</a>.</li>';
  while ($result != NULL && $i < count($result))
  {
    echo '<li><a href="index.php?id='.$result[$i]['id'].'">'.$result[$i]['nom']."</a>"."</li>";
    $i++;
  }
  echo "</ul></nav>";
?>
