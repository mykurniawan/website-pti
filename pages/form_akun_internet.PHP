<?php
$folder = '../assets/';

if (!isset($_GET['file'])) {
    die("File tidak ditemukan");
}

$filename = basename($_GET['file']);
$filepath = $folder . $filename;

// cegah akses ke file selain .doc / .docx
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$allowed_ext = ['doc', 'docx'];
if (!in_array(strtolower($ext), $allowed_ext)) {
    die("Format file tidak ditemukan");
}

// cek file 
if (file_exists($filepath)) {
    header("Content-Description: File Transfer");
    header("Content-Type: application/octet-stream");
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Expres: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath));

    // bersihkan output buffer dan kirim file
    flush();
    readfile($filepath);
    exit;
} else {
    die('File tidak ditemukan');
}
