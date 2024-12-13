<?php

return [
    'no_select' => 'Silakan pilih setidaknya satu catatan untuk mengambil tindakan ini!',
    'cannot_find_user' => 'Tidak dapat menemukan pengguna yang ditentukan',
    'supper_revoked' => 'Akses pengguna super dicabut',
    'cannot_revoke_yourself' => 'Tidak dapat mencabut izin akses pengguna super sendiri!',
    'cant_remove_supper' => 'Anda tidak memiliki izin untuk menghapus pengguna super ini',
    'cant_find_user_with_email' => 'Tidak dapat menemukan pengguna dengan alamat email yang ditentukan',
    'supper_granted' => 'Akses pengguna super diberikan',
    'delete_log_success' => 'Berhasil menghapus berkas log!',
    'get_member_success' => 'Daftar anggota berhasil diambil',
    'error_occur' => 'Terjadi kesalahan berikut ini',
    'user_management' => 'Manajemen Pengguna',
    'user_management_description' => 'Kelola pengguna.',
    'role_and_permission' => 'Peran dan Izin',
    'role_and_permission_description' => 'Kelola peran yang tersedia.',
    'user' => [
        'list_super' => 'Daftar Pengguna Super',
        'email' => 'E-mail',
        'last_login' => 'Login Terakhir',
        'username' => 'Nama belakang',
        'add_user' => 'Tambahkan Pengguna Super',
        'cancel' => 'Membatalkan',
        'create' => 'Membuat',
    ],
    'options' => [
        'features' => 'Kontrol Akses Fitur',
        'feature_description' => 'Kelola yang tersedia.',
        'manage_super' => 'Manajemen Pengguna Super',
        'manage_super_description' => 'Tambahkan/hapus pengguna super.',
        'info' => 'Informasi sistem',
        'info_description' => 'Semua informasi tentang konfigurasi sistem saat ini.',
    ],
    'info' => [
        'title' => 'Informasi Sistem',
        'description' => 'Semua informasi tentang konfigurasi sistem saat ini.',
        'cache' => 'Cache',
        'locale' => 'Lokal aktif',
        'environment' => 'Lingkungan',
    ],
    'disabled_in_demo_mode' => 'Anda tidak dapat melakukannya dalam mode demo!',
    'report_description' => 'Silakan bagikan informasi ini untuk pemecahan masalah',
    'get_system_report' => 'Dapatkan Laporan Sistem',
    'system_environment' => 'Lingkungan Sistem',
    'framework_version' => 'Versi Kerangka Kerja',
    'timezone' => 'Zona waktu',
    'debug_mode' => 'Mode Debug',
    'debug_mode_off' => 'Mode Debug Mati',
    'storage_dir_writable' => 'Penyimpanan Dir Dapat Ditulis',
    'cache_dir_writable' => 'Cache Dir Dapat Ditulis',
    'app_size' => 'Ukuran Aplikasi',
    'server_environment' => 'Lingkungan Server',
    'php_version' => 'Versi PHP',
    'php_version_error' => 'PHP harus >= :versi',
    'server_software' => 'Perangkat Lunak Server',
    'server_os' => 'Sistem Operasi Server',
    'database' => 'Basis Data',
    'ssl_installed' => 'SSL Terpasang',
    'cache_driver' => 'Penggerak Cache',
    'session_driver' => 'Penggerak Sesi',
    'queue_connection' => 'Koneksi Antrean',
    'mbstring_ext' => 'Ekstensi Mbstring',
    'openssl_ext' => 'Ekstensi OpenSSL',
    'pdo_ext' => 'Ekstensi PDO',
    'curl_ext' => 'Ekstensi CURL',
    'exif_ext' => 'Ekstensi Exif',
    'file_info_ext' => 'Info berkas Ekst.',
    'tokenizer_ext' => 'Tokenizer Ekstensi',
    'extra_stats' => 'Statistik Tambahan',
    'installed_packages' => 'Paket yang terinstal dan nomor versinya',
    'extra_information' => 'Informasi Tambahan',
    'copy_report' => 'Salin Laporan',
    'package_name' => 'Nama Paket',
    'dependency_name' => 'Nama Ketergantungan',
    'server_ip' => 'Alamat IP server',
    'version' => 'Versi',
    'cms_version' => 'Versi CMS',
    'imagick_or_gd_ext' => 'Ekstensi Imagick/GD',
    'updater' => 'Pembaruan Sistem',
    'zip' => 'Ekstensi Zip',
    'iconv' => 'Ikonv Ekstensi',
    'memory_limit' => 'Batasan memori',
    'max_execution_time' => 'Waktu eksekusi maksimum (dtk)',
    'allow_url_fopen_enabled' => 'allow_url_fopen diaktifkan',
    'cleanup' => [
        'title' => 'Sistem Pembersihan',
        'description' => 'Bersihkan data yang tidak digunakan dalam database',
        'table' => [
            'name' => 'Nama Tabel',
            'count' => 'Catatan',
        ],
        'backup_alert' => 'Harap cadangkan basis data dan berkas skrip Anda sebelum pembersihan, ini akan menghapus data Anda dalam basis data.',
        'messenger_choose_without_table' => 'Silakan pilih untuk mengabaikan tabel yang tidak ingin dibersihkan',
        'messenger_confirm_cleanup' => 'Apakah Anda yakin ingin melakukan tindakan pembersihan basis data? Tindakan ini akan menghapus data Anda di basis data?',
        'submit_button' => 'Pembersihan',
        'success_message' => 'Data berhasil dibersihkan',
        'not_enabled_yet' => 'Fitur ini belum diaktifkan. <br />Silakan tambahkan ke .env: <code>CMS_ENABLED_CLEANUP_DATABASE=true</code> untuk mengaktifkan fitur ini!',
    ],
    'cache_too_large_alert' => 'Folder cache Anda terlalu besar ~:size. Silakan masuk ke Administrasi platform -> Manajemen cache dan kosongkan untuk mengurangi ruang disk.',
];
