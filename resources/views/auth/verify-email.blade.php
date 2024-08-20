<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-success">Email Berhasil Dikirim!</h5>
                        <p class="card-text">
                            Silakan cek email
                            <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" target="_blank"
                                style="font-weight: bold; text-decoration: underline;">
                                {{ auth()->user()->email }}
                            </a>
                            untuk verifikasi akun. Jika kamu tidak menerima email, klik tombol di bawah untuk mengirim
                            ulang.
                        </p>

                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <!-- Form untuk Resend Verification -->
                            <form action="/email/verification-notification" method="POST">
                                <button type="submit" class="btn btn-danger">Kirim Ulang Verifikasi</button>
                            </form>

                            <!-- Form untuk Logout -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-dark">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS & dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
