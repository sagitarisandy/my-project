<?php
class DashboardController {
    public function dashboard() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: /my-project/public/login');
            exit();
        }

        include '../views/dashboard/dashboard.php';
    }
}
