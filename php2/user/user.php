<?php
function login() {
    return isset($_SESSION['utilisateur']);
}

function logout() {
    unset($_SESSION['utilisateur']);
}

function getUtilisateur() {
    return $_SESSION['utilisateur'];
}