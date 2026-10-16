<?php

// 1. Memanggil file Controller yang dibutuhkan
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';

// 2. Mengambil URL yang sedang diakses (bersihkan dari karakter aneh)
$url = rtrim($_SERVER['REQUEST_URI'], '/');
if (empty($url)) {
    $url = '/';
}

// 3. Sistem Navigasi/Rute (Routing)
switch ($url) {
    case '/':
        // Mengarahkan halaman utama (http://localhost:8000) ke HomeController
        $controller = new HomeController();
        $controller->index();
        break;

    case '/login':
        // Mengarahkan halaman login (http://localhost:8000/login) ke AuthController
        $controller = new AuthController();
        $controller->login();
        break;

    default:
        // Jika alamat tidak terdaftar, tampilkan pesan halaman tidak ditemukan
        http_response_code(404);
        echo "Halaman Tidak Ditemukan (404)";
        break;
}