<?php
    // declaration de variable user_id qui 
    $user_id = $_GET['id'];
        if(isset($_POST['send'])) {
            
            if(isset($_POST['username']) &&
                isset($_POST['email']) &&
                $_POST['username'] != "" &&
                $_POST['email'] != "" 
            )
                include_once __DIR__ . "/../connect_db.php";
                // changer l'extract
                $username = $_POST['username'];
                $email = $_POST['email'];
                // requete preparee
                $sql = "UPDATE users SET username = '$username' , email = '$email' WHERE user_id = $user_id";
                var_dump($sql);
                die();
                if (mysqli_query($connexion, $sql)) {
                        header("location:showUser.php");
                    } else {
                        header("location:showUser.php?message=AddFail");
                    }
                } else {
                    header("location:showUser.php?message=EmptyFields");
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
    <?php 
        include_once __DIR__ . "/../connect_db.php";
        // list of user information
        $sql = "SELECT * FROM users where user_id = $user_id";
        $result = mysqli_query($connexion, $sql);
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                 ?>
    <form action="" method="post">
        <h1>Modifier un utilisateur</h1>
          <input type="text" name="Username" value="<?=$row['username']?>" placeholder="utilisateur">
          <input type="email" name="Email" value="<?=$row['email']?>" placeholder="email">
          <input type="submit" value="Modifier" name="send">
          <a class="link back" href="showUser.php">Annuler</a>
    </form>
    <?php
            }
    ?>
</body>
</html>