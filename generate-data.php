<?php
  require_once 'connection.php';

  $val = $_GET['id'];
  if (($bdd = my_connect()) != NULL)
  {
    $sql = 'SELECT * FROM balise_list WHERE id='.$val;
    $lol = $bdd->prepare($sql);
    $lol->execute();
    $result = $lol->setFetchMode(PDO::FETCH_ASSOC);
    $result = $lol->fetch();
    echo '<div id="dataDisplay">';
    echo '<title>'.$result['nom'].'</title>';
    echo '<h1>'.$result['nom'].'</h1>';
    echo '<h4>Description :</h4><p>'.$result['description'].'</p>';
    echo '<h4>Compatible edge ?</h4><p>'.(($result['edge'] == 1) ? 'oui' : 'non').'</p>';
    echo '<h4>Compatible chrome ?</h4><p>'.(($result['chrome'] == 1) ? 'oui' : 'non').'</p>';
    echo '<h4>Compatible firefox ?</h4><p>'.(($result['firefox'] == 1) ? 'oui' : 'non').'</p>';
    echo '<h4>Compatible opera ?</h4><p>'.(($result['opera'] == 1) ? 'oui' : 'non').'</p>';
    echo '<h4>Balise autofermante ?</h4><p>'.(($result['autofermante'] == 1) ? 'oui' : 'non').'</p>';
    echo "<h4>Lien pour plus d'info :</h4><p>".($result['lien']).'</p>';
    echo "</div>";
  }
?>
