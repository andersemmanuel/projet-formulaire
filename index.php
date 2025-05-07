<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire admin</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header>
        <h1>Administration</h1>
    </header>
    <main>
        <h2>Connexion<span>PHP</span></h2>
        <?php
        if (isset($_POST['submit'])) {
            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);
            $isAdmin = isset($_POST['admin']) ? '1' : '0';

            echo "<div class='result'>";
            echo "<p>Email : $login</p>";
            echo "<p>Mot de passe : $password</p>";
            echo "<p>Statut admin : $isAdmin</p>";
            echo "</div>";
        }
        ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="login">Adresse email</label>
                <input type="email" id="login" name="login" required placeholder="exemple@email.com">
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" required placeholder="Votre mot de passe">
            </div>

            <div class="checkbox-label">
                <input type="checkbox" id="admin" name="admin">
                <label for="admin">Vous êtes administrateur 🔒</label>
            </div>

            <button type="submit" name="submit">Se connecter</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2025 - Administration PHP</p>
    </footer>
</body>
</html>