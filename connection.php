<?php
  function my_connect() {
    try
    {
      $host = "localhost";
      $db = "balise";
      $user = "root";
      $pass = "";
      $charset = "utf8";
      $bdd = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      return ($bdd);
    }
    catch (Exception $e)
    {
      echo "Unable to connect: " . $e->getMessage() ."<p>";
      return (NULL);
    }
  }
?>
