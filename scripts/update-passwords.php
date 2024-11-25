<?php
require dirname(__DIR__) . '/config/db.php';
require dirname(__DIR__) . '/models/User.php';

// Ambil semua data pengguna yang ada di database
$stmt = $pdo->query("SELECT id, username, password FROM admins");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Iterasi semua pengguna dan perbarui password mereka
foreach ($users as $user) {
    // Hash password yang belum di-hash
    $hashedPassword = password_hash($user['password'], PASSWORD_DEFAULT);

    // Update password yang di-hash ke database
    $updateStmt = $pdo->prepare("UPDATE admins SET password = :password WHERE id = :id");
    $updateStmt->execute(['password' => $hashedPassword, 'id' => $user['id']]);
}

echo "Password berhasil di-update!";