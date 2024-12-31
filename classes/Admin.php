<?php 
    class Admin extends User {
        public function creerCategorie(PDO $pdo, string $nom, string $description): bool {
            try {
                $query = "INSERT INTO categories (nom, id_admin, description_cat) VALUES (:nom, :id_admin, :description_cat)";
                $stmt = $pdo->prepare($query);
                return $stmt->execute([
                    'nom' => $nom,
                    'id_admin' => $this->id_user,
                    'description_cat' => $description,
                ]);
            } catch (PDOException $e) {
                error_log("Erreur lors de la création de la catégorie : " . $e->getMessage());
                return false;
            }
        }
    
        public function modifierCategorie(PDO $pdo, int $categorieId, string $nom, string $description): bool {
            try {
                $query = "UPDATE categories SET nom = :nom, description_cat = :description_cat WHERE id = :id";
                $stmt = $pdo->prepare($query);
                return $stmt->execute([
                    'id' => $categorieId,
                    'nom' => $nom,
                    'description_cat' => $description,
                ]);
            } catch (PDOException $e) {
                error_log("Erreur modification catégorie : " . $e->getMessage());
                return false;
            }
        }
    
        public function supprimerCategorie(PDO $pdo, int $categorieId): bool {
            try {
                $query = "DELETE FROM categories WHERE id = :id";
                $stmt = $pdo->prepare($query);
                return $stmt->execute(['id' => $categorieId]);
            } catch (PDOException $e) {
                error_log("Erreur suppression catégorie : " . $e->getMessage());
                return false;
            }
        }
    
        public function consulterProfils(PDO $pdo): array {
            try {
                $query = "SELECT * FROM utilisateurs";
                $stmt = $pdo->prepare($query);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                error_log("Erreur lors de la consultation des profils : " . $e->getMessage());
                return [];
            }
        }
    
        public function validerArticle(PDO $pdo, int $articleId): bool {
            try {
                $query = "UPDATE articles SET status = 'publie' WHERE id = :id";
                $stmt = $pdo->prepare($query);
                return $stmt->execute(['id' => $articleId]);
            } catch (PDOException $e) {
                error_log("Erreur validation article : " . $e->getMessage());
                return false;
            }
        }
    }
    
?>