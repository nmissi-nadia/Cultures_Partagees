<?php
class User {
    protected int $id_user;
    protected string $nom;
    protected string $email;
    protected string $motDePasse;
    protected int $role_id;

    public function __construct(string $nom, string $email, string $motDePasse, int $role_id) {
        $this->nom = $nom;
        $this->email = $email;
        $this->motDePasse = password_hash($motDePasse, PASSWORD_DEFAULT);
        $this->role_id = $role_id;
    }



    public function seConnecter(PDO $pdo, string $email, string $password): bool {
        try {
            $query = "SELECT * FROM utilisateurs WHERE email = :email";
            $stmt = $pdo->prepare($query);
            $stmt->execute(['email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['mot_de_passe'])) {
                $this->id_user = $user['id_user'];
                $this->nom = $user['nom'];
                $this->email = $user['email'];
                $this->role_id = $user['role_id'];
                return true;
            }
            return false;
        } catch (PDOException $e) {
            error_log("Erreur de connexion : " . $e->getMessage());
            return false;
        }
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getEmail(): string {
        return $this->email;
    }
}

?>