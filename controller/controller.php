<?php

function traiterFormulaire() {
    $resultat = null;
    if (isset($_POST['submit'])) {
        $login = htmlspecialchars($_POST['login']);
        $password = htmlspecialchars($_POST['password']);
        $isAdmin = isset($_POST['admin']) ? 'Oui' : 'Non';

        $resultat = [
            'login' => $login,
            'password' => $password,
            'isAdmin' => $isAdmin
        ];
    }
    return $resultat;
} 