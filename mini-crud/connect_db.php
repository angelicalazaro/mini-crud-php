<?php
require_once "config.php";

    function connectDb() {
        global $host_bdd, $user_bdd, $pwd_bdd;
            try {
            $connexion = new PDO(
                'mysql:host=' . $host_bdd . ';dbname=mini-crud', 
                $user_bdd, 
                $pwd_bdd);
                return $connexion;
            } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
            }
        
    }