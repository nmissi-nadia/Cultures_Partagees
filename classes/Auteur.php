<?php
class Utilisateur extends Utilisateur {
    public function afficherArticles(PDO $pdo): array {
        try {
            $query = "SELECT * FROM articles WHERE status = 'publie'";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erreur affichage articles : " . $e->getMessage());
            return [];
        }
    }

    public function filtrerArticles(PDO $pdo, int $categorieId): array {
        try {
            $query = "SELECT * FROM articles WHERE categorie_id = :categorieId AND status = 'publie'";
            $stmt = $pdo->prepare($query);
            $stmt->execute(['categorieId' => $categorieId]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            error_log("Erreur filtrage articles : " . $e->getMessage());
            return [];
        }
    }
}


?>