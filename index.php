<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire admin</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <h1>Admin</h1>
    </header>
    <main>
        <h2>Compléter le code <span style="background:#e0e0ff; color:#3b3b6d; padding:2px 6px; border-radius:4px;">PHP</span> suivant</h2>
        <form method="post" action="">
            <label for="login">Login</label><br>
            <input type="email" id="login" name="login" required><br><br>

            <label for="password">Mot de passe</label><br>
            <input type="password" id="password" name="password" required><br><br>

            <input type="checkbox" id="admin" name="admin">
            <label for="admin">Vous êtes admin 🔒</label><br><br>

            <button type="submit" name="submit">ENVOYER</button>
        </form>

        <?php
        
        if (isset($_POST['submit'])) {
            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);
            $isAdmin = isset($_POST['admin']) ? 'Oui' : 'Non';

            echo "<p>Login : $login</p>";
            echo "<p>Mot de passe : $password</p>";
            echo "<p>Admin : $isAdmin</p>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; PHP - 2025</p>
    </footer>
</body>
</html>