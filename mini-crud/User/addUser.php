<?php
// ligne 'submit' / son name est 'send' se relie a la methode post
    if(isset($_POST['send'])) {
        if(isset($_POST['username']) &&
           isset($_POST['email']) &&
           $_POST['username'] != "" &&
           $_POST['email'] != "" 

        ){
          include_once __DIR__ . "/../connect_db.php";
          extract($_POST);

          $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";
          if (mysqli_query($connexion, $sql)) {
            header("location:showUser.php");
          } else {
            header("location:addUser.php?message=AddFail");
          }
        } else {
            header("location:addUser.php?message=EmptyFields");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <form action="" method="post">
        <h1>Ajouter un utilisateur</h1>
          <input type="text" name="username" placeholder="utilisateur">
          <input type="email" name="email" placeholder="email">
          <input type="submit" value="Ajouter" name="send">
          <a class="link back" href="showUser.php">Annuler</a>
    </form>
</body>
</html>