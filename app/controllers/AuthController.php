<?php
class AuthController
{
    public function login() 
    { 
        // Beri tanda // di depan baris ini untuk menonaktifkan sementara:
   // if (isset($_SESSION['user_id'])) {
    //    header('Location: /');
// exit;
    // }
     
    // Pastikan baris require ini tetap aktif agar halaman login bisa dimuat
        require __DIR__ . '/../../views/pages/auth/login.php';
    }
}