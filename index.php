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
        <h1 class="main-title">Compléter le code <span class="badge-php">PHP</span> suivant</h1>
    </header>
    <main>
        <form class="styled-form" method="post" action="">
            <fieldset>
                <legend>Remplir les champs</legend>
                <div class="form-group">
                    <label for="login"><b>Login</b></label>
                    <input type="email" id="login" name="login" required placeholder="Votre login">
                </div>
                <div class="form-group">
                    <label for="password"><b>Mot de passe</b></label>
                    <input type="password" id="password" name="password" required placeholder="Votre mot de passe">
                </div>
                <div class="checkbox-label">
                    <input type="checkbox" id="admin" name="admin">
                    <label for="admin"><b>Vous êtes admin</b> <span class="lock">🔒</span></label>
                </div>
                <button type="submit" name="submit">Envoyer</button>
            </fieldset>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);
            $isAdmin = isset($_POST['admin']) ? 'Oui' : 'Non';
            echo "<div class='result'>";
            echo "<p>Email : $login</p>";
            echo "<p>Mot de passe : $password</p>";
            echo "<p>Statut admin : $isAdmin</p>";
            echo "</div>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; - PHP - 2025</p>
    </footer>
</body>
</html>