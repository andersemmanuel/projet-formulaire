<?php

function traiterFormulaire() {
    $resultat = null;
    if (isset($_POST['submit'])) {
        $login = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['password']);
        $isAdmin = isset($_POST['admin']) ? '1' : '0';

        $resultat = [
            'login' => $login,
            'password' => $password,
            'isAdmin' => $isAdmin
        ];
    }
    return $resultat;
}

function afficherResultat($resultat) {
    if ($resultat) {
        echo "<div class='result'>";
        echo "<p class='success'><span class='check'>&#x2705;</span> Admin : " . htmlspecialchars($resultat['isAdmin']) . "</p>";
        echo "<p class='success'><span class='check'>&#x2705;</span> Login : " . htmlspecialchars($resultat['login']) . "</p>";
        echo "<p class='success'><span class='check'>&#x2705;</span> Password : " . htmlspecialchars($resultat['password']) . "</p>";
        echo "</div>";
    }
} 