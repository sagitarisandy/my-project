<?php
require '../config/db.php';
require '../models/User.php';
require '../controllers/AuthController.php';
require '../controllers/DashboardController.php';

$authController = new AuthController($pdo);
$dashboardController = new DashboardController();

if ($_SERVER['REQUEST_URI'] === '/my-project/public/login') {
    $authController->login();
} elseif ($_SERVER['REQUEST_URI'] === '/my-project/public/dashboard') {
    $dashboardController->dashboard();
} else {
    header('Location: /my-project/public/login');
}