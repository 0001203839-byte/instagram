<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarGram - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .login_wrapper {
            display: flex;
            gap: 32px;
            align-items: center;
            max-width: 900px;
            width: 100%;
            padding: 20px;
        }

        .login_phone {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .login_phone img {
            width: 260px;
        }

        .login_forms { flex: 0 0 350px; }

        .login_box {
            background: #fff;
            border: 1px solid #dbdbdb;
            border-radius: 4px;
            padding: 40px 40px 28px;
            margin-bottom: 10px;
            text-align: center;
        }

        .login_logo {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: #262626;
        }

        .login_logo i { color: #e63946; font-size: 36px; }

        .login_input {
            width: 100%;
            background: #fafafa;
            border: 1px solid #dbdbdb;
            border-radius: 6px;
            padding: 10px 12px;
            font-size: 13px;
            outline: none;
            margin-bottom: 8px;
            font-family: inherit;
            transition: border-color 0.2s;
        }

        .login_input:focus { border-color: #a8a8a8; }

        .login_btn {
            width: 100%;
            background: #0095f6;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 8px;
            font-family: inherit;
            transition: opacity 0.2s;
        }

        .login_btn:hover { opacity: 0.85; }

        .divider {
            display: flex;
            align-items: center;
            gap: 16px;
            margin: 18px 0;
            color: #8e8e8e;
            font-size: 13px;
            font-weight: 600;
        }

        .divider::before, .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #dbdbdb;
        }

        .social_login {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            color: #385185;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            text-decoration: none;
        }

        .forgot_password {
            display: block;
            margin-top: 14px;
            font-size: 12px;
            color: #00376b;
            text-decoration: none;
        }

        .signup_box {
            background: #fff;
            border: 1px solid #dbdbdb;
            border-radius: 4px;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            margin-bottom: 24px;
        }

        .signup_box a {
            color: #0095f6;
            font-weight: 600;
            text-decoration: none;
        }

        .app_links {
            text-align: center;
            font-size: 13px;
            color: #262626;
        }

        .app_links p { margin-bottom: 12px; }

        .app_links img { height: 40px; margin: 0 4px; }

        @media (max-width: 768px) {
            .login_phone { display: none; }
            .login_forms { flex: none; width: 100%; }
        }
    </style>
</head>
<body>

<div class="login_wrapper">

    {{-- Imagem do celular --}}
    <div class="login_phone">
        <img src="https://images.unsplash.com/photo-1592198084033-aade902d1aae?w=260&h=500&fit=crop" alt="CarGram" style="border-radius:20px;box-shadow:0 8px 32px rgba(0,0,0,0.15);">
    </div>

    {{-- Formulários --}}
    <div class="login_forms">

        <div class="login_box">
            <div class="login_logo">
                <i class="fas fa-car"></i> CarGram
            </div>

            <input type="text" class="login_input" placeholder="Número de telefone, usuário ou email">
            <input type="password" class="login_input" placeholder="Senha">

            <button class="login_btn" onclick="window.location.href='{{ url('/') }}'">
                Entrar
            </button>

            <div class="divider">OU</div>

            <a href="{{ url('/') }}" class="social_login">
                <i class="fab fa-facebook" style="font-size:18px;"></i>
                Entrar com o Facebook
            </a>

            <a href="#" class="forgot_password">Esqueceu a senha?</a>
        </div>

        <div class="signup_box">
            Não tem uma conta? <a href="#">Cadastre-se</a>
        </div>

        <div class="app_links">
            <p>Baixe o aplicativo.</p>
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/1200px-Download_on_the_App_Store_Badge.svg.png" alt="App Store">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/1200px-Google_Play_Store_badge_EN.svg.png" alt="Google Play">
            </div>
        </div>

    </div>
</div>

</body>
</html>