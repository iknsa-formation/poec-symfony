<?php

require_once 'model/utilisateur.php';
?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = array();

    if (empty($_POST['email'])) {
        $error['email'] = 'Votre email ne doit pas être vide';
    }

    if (empty($_POST['password'])) {
        $error['password'] = 'Votre password ne doit pas être vide';
    } else if (strlen($_POST['password']) <= 5) {
        $error['password'] = 'Votre password doit faire plus de 5 caractères';
    }

    if (empty($error)) {
        //Envoyer en base de données
        $utilisateur = connexion($_POST['email'], md5($_POST['password']));
        if (empty($utilisateur)) {
            addFlash("danger", "Mauvais couple d'identifiants.");
        } else {
            addFlash("success", "Bienvenue " . $utilisateur['prenom'] . ".");
            $_SESSION['utilisateur'] = $utilisateur;

            header('Location: index.php');
            die();
        }
    } else {
        addFlash("danger", "Votre formulaire est incomplet ou invalide.");
    }
}
?>

<?php

include_once('view/utilisateur/connexion.php');
