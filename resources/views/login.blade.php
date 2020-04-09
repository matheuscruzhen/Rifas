<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='CSS/style.css'>
    <link rel="stylesheet" href="CSS/styles-icon.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body class="login-page">
    <div class="section__login">
        <h3 class="login__third">Inicie sua sessão</h3>
        <form action="/login" method="POST" class="login__form">
            <div class="login__group">
                <input type="text" name="username" id="username" class="login__input" placeholder="Usuário">
            </div>

            <div class="login__group">
                <input type="password" name="senha" id="senha" class="login__input" placeholder="Senha">
            </div>

            <div class="login__group">
                <input type="checkbox" id="ichek" name="nchek" class="login__check">
                <label for="ichek" class="login__label">Lembrar credenciais</label>
            </div>

            <button class="login__btn">Acessar</button>
            @csrf
        </form>
        <div class="login__problem">
            Problemas ao acessar?
            <a href="#" class="login__problem-link">Clique aqui</a>
        </div>
        <a href="index.html" class="login__btn-1">TOP BRASIL</a>
    </div>
</body>
</html>
