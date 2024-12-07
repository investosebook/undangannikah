<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Data dari form
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['textarea'], FILTER_SANITIZE_STRING);
    
    // Email tujuan Anda
    $to = "putukrisnapramanayuda@gmail.com";
    $subject = "Pesan dari Formulir Website";
    
    // Format email
    $body = "Nama: $name\nPesan: $message";
    $headers = "From: noreply@domainanda.com\r\n";
    $headers .= "Reply-To: $to\r\n"; // Mengizinkan balasan langsung ke email Anda
    
    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Oops! Terjadi masalah saat mengirim pesan.";
    }
} else {
    echo "Metode tidak valid.";
}
?>

