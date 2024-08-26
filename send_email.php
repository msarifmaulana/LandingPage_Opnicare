<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];

    $to = "optima.multisinergi@gmail.com"; // Ganti dengan email tujuan
    $subject = "Jadwal Konsultasi dari " . $nama;
    $message = "Nama: $nama\nEmail: $email\nNo.Hp: $phone\nSubject: $subject\n\nDeskripsi:\n$description";

    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "Pesan berhasil dikirim.";
    } else {
        echo "Pesan gagal dikirim.";
    }
}
?>