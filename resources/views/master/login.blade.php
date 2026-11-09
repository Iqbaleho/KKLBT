<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
        <title>Login| Desa Alat</title>
        <link rel="icon" href="{{ asset('img/Logo/HST.png') }}">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <style>
        .auth-wrapper {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;

            /* Latar Belakang Foto dengan Overlay Gradient khas Emerald */
            background: linear-gradient(135deg, rgba(18, 61, 50, 0.88), rgba(11, 42, 33, 0.95)),
                        url("{{ asset('img/Background/S1.jpg') }}") center/cover no-repeat fixed;
        }
    </style>

    <body>

        <div class="auth-wrapper">
            <!-- Tombol Kembali ke Beranda -->
            <a href="{{ route('beranda') }}" class="btn-back-home" title="Kembali ke Beranda">
                ← <span>Beranda</span>
            </a>

            <div class="auth-card">
                <!-- ===== FORM 1: LOGIN ===== -->
                <form id="loginForm" class="auth-form" action="" method="POST">
                    @csrf
                    <div class="auth-header">
                        <img src="{{ asset('img/Logo/HST.png') }}" alt="Logo Kabupaten HST">
                        <span class="eyebrow">Dashboard Sistem</span>
                        <h1>Login</h1>
                        <p>Silakan masuk menggunakan kredensial Anda.</p>
                    </div>

                    <div class="form-group">
                        <label for="login_email">Email / Username</label>
                        <input type="text" id="login_email" name="email" class="form-input" placeholder="masukkan email atau username" required autocomplete="username">
                    </div>

                    <div class="form-group">
                        <label for="login_password">Kata Sandi</label>
                        <input type="password" id="login_password" name="password" class="form-input" placeholder="••••••••" required autocomplete="current-password">
                    </div>

                    <div class="form-actions">
                        <label class="remember-me">
                            <input type="checkbox" name="remember"> Ingat Saya
                        </label>
                        <a type="button" class="link-toggle" onclick="toggleForm('reset')">Lupa Sandi?</a>
                    </div>

                    <button type="submit" class="btn-submit">Dashboard Sistem</button>
                </form>

                <!-- ===== FORM 2: LUPA PASSWORD ===== -->
                <form id="resetForm" class="auth-form hidden" action="" method="POST">
                    @csrf
                    <div class="auth-header">
                        <img src="{{ asset('img/Logo/HST.png') }}" alt="Logo Kabupaten HST">
                        <span class="eyebrow">Pemulihan Akun</span>
                        <h1>Lupa Kata Sandi</h1>
                        <p>Masukkan email terdaftar untuk menerima tautan pemulihan kata sandi.</p>
                    </div>

                    <div class="form-group">
                        <label for="reset_email">Email Terdaftar</label>
                        <input type="email" id="reset_email" name="email" class="form-input" placeholder="contoh: user@desa-alat.id" required autocomplete="email">
                    </div>

                    <div class="form-actions" style="justify-content: flex-end;">
                        <a type="button" class="link-toggle" onclick="toggleForm('login')">← Kembali ke Login</a>
                    </div>

                    <button type="submit" class="btn-submit">Kirim Tautan Pemulihan</button>
                </form>
            </div>
        </div>

        <!-- Script sederhana untuk switch antar form -->
        <script>
            function toggleForm(target) {
                const loginForm = document.getElementById('loginForm');
                const resetForm = document.getElementById('resetForm');

                if (target === 'reset') {
                    loginForm.classList.add('hidden');
                    resetForm.classList.remove('hidden');
                } else {
                    resetForm.classList.add('hidden');
                    loginForm.classList.remove('hidden');
                }
            }
        </script>
    </body>
</html>
