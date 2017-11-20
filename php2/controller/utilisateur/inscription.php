<?php

require_once 'model/utilisateur.php';
?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = array();

    if (empty($_POST['nom'])) {
        $error['nom'] = 'Votre nom ne doit pas être vide';
    } else if (strlen($_POST['nom']) <= 5) {
        $error['nom'] = 'Votre nom doit faire plus de 5 caractères';
    }

    if (empty($_POST['prenom'])) {
        $error['prenom'] = 'Votre prenom ne doit pas être vide';
    } else if (strlen($_POST['prenom']) <= 5) {
        $error['prenom'] = 'Votre prenom doit faire plus de 5 caractères';
    }

    if (empty($_POST['ville'])) {
        $error['ville'] = 'Votre ville ne doit pas être vide';
    } else if (strlen($_POST['ville']) <= 5) {
        $error['ville'] = 'Votre ville doit faire plus de 5 caractères';
    }

    if (empty($_POST['code_postal'])) {
        $error['code_postal'] = 'Votre code_postal ne doit pas être vide';
    }

    if (empty($_POST['telephone'])) {
        $error['telephone'] = 'Votre telephone ne doit pas être vide';
    }

    if (empty($_POST['email'])) {
        $error['email'] = 'Votre email ne doit pas être vide';
    }

    if (empty($_POST['password'])) {
        $error['password'] = 'Votre password ne doit pas être vide';
    } else if (strlen($_POST['password']) <= 5) {
        $error['password'] = 'Votre password doit faire plus de 5 caractères';
    }

    if (empty($_POST['confirmation'])) {
        $error['confirmation'] = 'Votre confirmation ne doit pas être vide';
    } else if ($_POST['confirmation'] != $_POST['password']) {
        $error['confirmation'] = 'Votre confirmation doit être le même que le mot de passe';
    }

    $newsletter = 0;
    if (!isset($_POST['subnewsletter'])) {
        $error['subnewsletter'] = 'Champs innexistant';
    } else {
        if (!empty($_POST['subnewsletter'])) {
            $newsletter = 1;
        }
    }

    if (empty($error)) {
        //Envoyer en base de données
        inscription($_POST['nom'], $_POST['prenom'], $_POST['ville'], $_POST['code_postal'], $_POST['telephone'], $_POST['email'], md5($_POST['password']), $newsletter);
        addFlash("success", "Votre compte à bien été créé.");

        header('Location: index.php');
        die();
    } else {
        addFlash("danger", "Votre formulaire est incomplet ou invalide.");
    }
}
?>

<?php

include_once('view/utilisateur/inscription.php');
