<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<main>
    <div class="link_container">
        <a class="link" href="addUser.php">Ajouter un utilisateur</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>text</td>
                <td>text</td>
                <td class="image"><a href="modifyUser.php?id"><img src="../images/write.png"></a></td>
                <td class="image"><a href="deleteUser.php?id"><img src="../images/remove.png"></a></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</main>
</body>
</html>