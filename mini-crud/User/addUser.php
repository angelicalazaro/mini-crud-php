<?php
// ligne 'submit' / son name est 'send' se relie a la methode post
    if(isset($_POST['send'])) {
        //verification des champs non vides
        if(isset($_POST['username']) &&
           isset($_POST['email']) &&
           $_POST['username'] != "" &&
           $_POST['email'] != "" 

        ){
           // __DIR__ pour retouner le vrai fichier dans la bonne localisation  
          include_once __DIR__ . "/../connect_db.php";
          // changer l'extract
          $username = $_POST['username'];
          $email = $_POST['email'];  
           // requete preparee sql a verifier pour UPDATE ET INSERT 
          $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";
          if (mysqli_query($connexion, $sql)) {
            // header pour rediriger a la liste des utilisateurs une fois l'addition est reussite
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
          <a class="link" href="showUser.php">Annuler</a>
    </form>
</body>
</html>