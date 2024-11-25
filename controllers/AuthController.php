<?php
class AuthController {
    private $userModel;

    public function __construct($db) {
        // Instantiate the User model and pass the database connection
        $this->userModel = new User($db);
    }


    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
    
            // Cek login dengan model User
            $user = $this->userModel->login($username, $password);
    
            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user['id'];  // Menyimpan id user di session
                $_SESSION['role'] = $user['role'];  // Menyimpan role user
                header('Location: /my-project/public/dashboard');  // Redirect ke dashboard
                exit();
            } else {
                $error = 'Invalid credentials!';
                // Menampilkan error jika login gagal
                echo $error;  
                exit();
            }
        }
        include '../views/auth/login.php';
    }

    public function updatePassword($userId, $password) {
        $this->userModel->updatePassword($userId, $password);
    }
}
