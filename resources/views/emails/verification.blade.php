<!DOCTYPE html>
<html>

<head>
    <title>Email Verifikasi</title>
</head>

<body>
    <h1>Halo, {{ $name }}!</h1>
    <p>Terima kasih telah mendaftar sebagai mitra UMKM. Klik tombol di bawah ini untuk memverifikasi email Anda:</p>
    <a href="{{ $verificationUrl }}"
        style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: #ffffff; text-decoration: none; border-radius: 5px;">Verifikasi
        Email</a>
    <p>Jika Anda tidak mendaftar di situs kami, abaikan email ini.</p>
</body>

</html>
