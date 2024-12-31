<?php
require_once '../classes/Utilisateur.php';
require_once '../config/db_connect.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $nom = htmlspecialchars(trim($_POST['nom'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $motDePasse = $_POST['mot_de_passe'] ?? '';
    $confirmMotDePasse = $_POST['confirm_mot_de_passe'] ?? '';
    $role_id = 3; // Par défaut, rôle utilisateur

    // Validation des champs
    if (empty($nom) || empty($email) || empty($motDePasse) || empty($confirmMotDePasse)) {
        die('Tous les champs sont requis.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('L\'adresse email n\'est pas valide.');
    }

    if ($motDePasse !== $confirmMotDePasse) {
        die('Les mots de passe ne correspondent pas.');
    }

    if (strlen($motDePasse) < 8) {
        die('Le mot de passe doit contenir au moins 8 caractères.');
    }

    try {
        // Création d'une instance de User
        $user = new User($nom, $email, $motDePasse, $role_id);

        // Utilisation de la méthode sInscrire
        if ($user->sInscrire($pdo)) {
            echo 'Inscription réussie. Vous pouvez maintenant vous connecter.';
        } else {
            die('Une erreur est survenue lors de l\'inscription.');
        }
    } catch (Exception $e) {
        error_log('Erreur lors de l\'inscription : ' . $e->getMessage());
        die('Une erreur est survenue. Veuillez réessayer plus tard.');
    }
} else {
    die('Méthode de requête non autorisée.');
}
?>
