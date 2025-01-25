<?php

return [
    /*
    |----------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |----------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],  // Menyasar API dan CSRF cookie

    'allowed_methods' => ['*'],  // Membuka semua metode HTTP (GET, POST, PUT, DELETE, dll)

    'allowed_origins' => ['*'],  // Membuka akses dari semua origin (domain)

    'allowed_origins_patterns' => [],  // Biarkan kosong jika tidak diperlukan

    'allowed_headers' => ['*'],  // Mengizinkan semua header (termasuk Authorization, Content-Type, dll.)

    'exposed_headers' => [],  // Header tambahan yang ingin diekspos (kosong jika tidak ada)

    'max_age' => 0,  // Tidak ada caching untuk preflight request

    'supports_credentials' => false,  // Tidak mendukung kredensial lintas domain
];
