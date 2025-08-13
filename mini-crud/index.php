<?php

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mini CRUD Utilisateurs</title>
    <link rel="stylesheet" href="style.css"> <!-- Ton CSS existant -->
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 50px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #333;
        }
        .crud-menu {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
        }
        .crud-menu a {
            display: block;
            padding: 15px 25px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            transition: 0.3s;
        }
        .crud-menu a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>Bienvenue sur le Mini CRUD</h1>
<p>Sélectionnez une action :</p>

<div class="crud-menu">
    <a href="User/showUser.php"> Voir les utilisateurs</a>
    <a href="User/addUser.php"> Ajouter un utilisateur</a>
    <a href="User/modifyUser.php"> Modifier un utilisateur</a>
    <a href="User/deleteUser.php"> Supprimer un utilisateur</a>
</div>

</body>
</html>
