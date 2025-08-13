<?php
    $user_id = $_GET['id'];
    include_once __DIR__ . "/../connect_db.php";
    $sql = "DELETE FROM users where user_id = $user_id";
    if (mysqli_query($connexion, $sql)) {
        //header location pour redigirer a la page showUser.php
        header("location:showUser.php");
    } else {
        header("location:showUser.php");
    }
?>