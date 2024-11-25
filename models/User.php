<?php
class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Menambahkan fungsi untuk login dengan username dan password
    public function login($username, $password) {
        $stmt = $this->db->prepare("SELECT * FROM admins WHERE username = :username");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
    
        return null;
    }

    public function register($username, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Simpan user baru dengan password yang sudah di-hash
        $stmt = $this->db->prepare("INSERT INTO admins (username, password) VALUES (:username, :password)");
        $stmt->execute(['username' => $username, 'password' => $hashedPassword]);
    }

    public function updatedPassword($userId, $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Update password di database
        $stmt = $this->db->prepare("UPDATE admins SET password = :password WHERE id = :id");
        $stmt->execute(['password' => $hashedPassword, 'id' => $userId]);
    }
}