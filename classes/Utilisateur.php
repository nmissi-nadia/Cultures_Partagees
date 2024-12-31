<?php
class Utilisateur extends User {
    public function sInscrire(PDO $pdo): bool {
        try {
            $query = "INSERT INTO utilisateurs (nom, email, mot_de_passe, role_id) VALUES (:nom, :email, :mot_de_passe, :role_id)";
            $stmt = $pdo->prepare($query);
            return $stmt->execute([
                'nom' => $this->nom,
                'email' => $this->email,
                'mot_de_passe' => $this->motDePasse,
                'role_id' => $this->role_id,
            ]);
        } catch (PDOException $e) {
            error_log("Erreur lors de l'inscription : " . $e->getMessage());
            return false;
        }
    }
    
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