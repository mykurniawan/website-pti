<?php
$folder = '../assets/';

if (!isset($_GET['file'])) {
    die("File tidak ditemukan");
}

$filename = basename($_GET['file']);
$filepath = $folder . $filename;

$ext = pathinfo($filename, PATHINFO_EXTENSION);
$allowed_ext = ["doc", "dock", "pdf"];
if (!in_array(strtolower($ext), $allowed_ext)) {
    die("Format tidak ditemukan!");
}

if (file_exists($filepath)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath));

    flush();
    readfile($filepath);
    exit;
} else {
    die("File tidak ditemukan!.");
}
