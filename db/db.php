<?php
 $servername = "127.0.0.1";
 $username = "root";
 $password = "";
 $database = "espace_membre_2024";
 
 try {
     $pdo= new PDO("mysql:host=$servername;dbname=$database", $username, $password);
     // Configurer le mode d'erreur pour lancer des exceptions
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo "<div style='background-color:#3c763d; color:white;'>Connexion à la base de donnée réussie</div>";
     
 } catch(PDOException $e) {
     echo "<div style='color:red;'>La connexion à la base de données a échoué :</div> " . $e->getMessage();
 }