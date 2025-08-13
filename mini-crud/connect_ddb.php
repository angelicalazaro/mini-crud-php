<?php
   $host = "localhost";
   $username = "root";
   $password = "";
   $dbname = "mini-crud";

// Create connexion

    $connexion = mysqli_connect($host, $username, $password, $dbname);

// Verify connexion

    if (!$connexion) {
        die("Connexion failed: " . mysqli_connect_error());
    }
 