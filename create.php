<?php
  require_once 'connection.php';
  require_once 'send_mail.php';

  $host = "localhost";
  $db = "balise";
  $user = "root";
  $pass = "";
  $charset = "utf8";

  $bdd = my_connect();

  $nom = (isset($_POST["nom"])) ? $_POST["nom"] : "aucun";
  $desc = (isset($_POST["description"])) ? $_POST["description"] : "vide";
  $edge = (isset($_POST["edge"])) ? "oui" : "non";
  $chrome = (isset($_POST["chrome"])) ? "oui" : "non";
  $firefox = (isset($_POST["firefox"])) ? "oui" : "non";
  $opera = (isset($_POST["opera"])) ? "oui" : "non";
  $auto = (isset($_POST["auto-fermante"])) ? $_POST["auto-fermante"] : "non";
  $lien = (isset($_POST["lien"])) ? $_POST["lien"] : "vide";

  $sujet = "Ajout de la balise : ".$nom;
  $message = "Une nouvelle balise a été ajouter<br>";
  $message.= "nom : ".$nom."<br>";
  $message.= "description : ".$desc."<br>";
  $message.= "compatible edge ? ".$edge."<br>";
  $message.= "compatible chrome ? ".$chrome."<br>";
  $message.= "compatible firefox ? ".$firefox."<br>";
  $message.= "compatible opera ? ".$opera."<br>";
  $message.= "auto-fermante ? ".$auto."<br>";
  if ($lien != "vide")
    $message.= "lien : ".$lien."<br>";

  $edge = (($edge == "oui") ? true : false);
  $chrome = (($chrome == "oui") ? true : false);
  $firefox = (($firefox == "oui") ? true : false);
  $opera = (($opera == "oui") ? true : false);
  $auto = (($auto == "oui") ? true : false);
  $sql = $bdd->prepare("INSERT INTO balise_list(nom, description, edge, chrome, firefox, opera, autofermante, lien) VALUES( :nom, :description, :edge, :chrome, :firefox, :opera, :auto, :lien)");
  $sql->bindParam(":nom", $nom, PDO::PARAM_STR);
  $sql->bindParam(":description", $desc, PDO::PARAM_STR);
  $sql->bindParam(":edge", $edge, PDO::PARAM_BOOL);
  $sql->bindParam(":chrome", $chrome, PDO::PARAM_BOOL);
  $sql->bindParam(":firefox", $firefox, PDO::PARAM_BOOL);
  $sql->bindParam(":opera", $opera, PDO::PARAM_BOOL);
  $sql->bindParam(":auto", $auto, PDO::PARAM_BOOL);
  $sql->bindParam(":lien", $lien, PDO::PARAM_STR);

  try {
    $sql->execute();
    echo "<div>Une notification a été envoyé avec pour sujet :<br/><br/>";
    echo $sujet."<br><br>";
    echo "et pour message :<br/><br/>";
    echo $message."<br><br></div>";
    my_send_mail($sujet, $message);
  } catch (Exception $e) {
    echo '<div>Erreur : ' . $e->errorInfo[2] . "</div>";
  }
?>
