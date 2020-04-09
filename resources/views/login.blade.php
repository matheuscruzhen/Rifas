<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href='./../css/styles.css'>
    <link rel="stylesheet" href="CSS/styles-icon.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <style>
        *,
        *::after,
        *::before {
        margin: 0;
        padding: 0;
        box-sizing: inherit; }

        html {
        box-sizing: border-box;
        font-size: 62.5%; }

        body {
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        line-height: 1.6;
        color: #eee; }

        .margin__right--small {
        margin-right: 1rem !important; }

        .margin__left--small {
        margin-left: 1rem !important; }

        .aside {
        background-color: #3023a8;
        flex-basis: 23rem; }
        .aside__lista {
            margin-top: 2rem;
            list-style: none; }
            .aside__lista__lista {
            transform: translateX(5rem); }
        .aside__item:not(:last-child) {
            margin-bottom: .5rem; }
        .aside__link:link, .aside__link:visited {
            position: relative;
            display: flex;
            color: #eee;
            text-decoration: none;
            padding: 2rem;
            transition: all .3s;
            align-items: center;
            position: relative;
            z-index: 10; }
        .aside__link::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 3px;
            background-color: #991b1b;
            transform: scaleY(0);
            transition: transform 0.2s, width 0.4s cubic-bezier(1, 0, 0, 1) 0.2s, background-color 0.1s; }
        .aside__link:hover::before {
            transform: scaleY(1);
            width: 100%; }
        .aside__icon {
            font-size: 2rem;
            z-index: 10; }
        .aside__span {
            transform: translateX(1rem);
            font-size: 1.3rem; }
        .aside__header {
            margin: 1rem;
            font-size: 1.6rem;
            font-weight: bold;
            color: #7ed56f; }

        .header {
        display: flex;
        justify-content: space-between;
        background-color: rgba(0, 0, 0, 0.9); }
        .header__logo-box {
            text-align: center;
            flex-basis: 23rem; }
        .header__link:visited, .header__link:link {
            display: inline-block;
            text-decoration: none;
            color: #eee;
            font-size: 1.8rem;
            font-weight: 500;
            transform: translateY(50%); }
        .header__link:hover, .header__link:active {
            color: #cacaca; }

        .navigation {
        display: flex;
        flex-grow: 1;
        justify-content: flex-end;
        align-items: center; }
        .navigation__search {
            display: flex;
            align-items: center;
            transform: translateX(-2rem); }
        .navigation__checkbox {
            display: none; }
        .navigation__form {
            opacity: 0;
            visibility: hidden;
            transition: all .4s;
            transform: scaleX(0); }
        .navigation__checkbox:checked ~ .navigation__form {
            display: block;
            opacity: 1;
            visibility: visible;
            transform: scaleX(1); }
        .navigation__input {
            border: none;
            border-radius: 100rem;
            padding: 1.5rem 3rem; }
            .navigation__input::-webkit-input-placeholder {
            font-size: 1.6rem; }
            .navigation__input:focus {
            outline: none; }
        .navigation__link:link, .navigation__link:visited {
            display: block;
            font-size: 1.6rem;
            text-decoration: none;
            color: #eee;
            align-self: stretch;
            padding: 1.5rem;
            transition: all .2s; }
        .navigation__link:active, .navigation__link:hover {
            background-color: rgba(85, 85, 85, 0.4); }
        .navigation__icon {
            font-size: 1.5rem;
            cursor: pointer;
            margin-left: 1rem; }

        .main {
        flex-grow: 1;
        color: #555;
        background-color: #f0f0f0; }
        .main__header {
            display: flex;
            justify-content: space-between;
            padding: 1.5rem;
            background-color: #fff;
            box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.1); }
        .main__icon {
            font-size: 1.3rem;
            margin-right: .5rem; }
        .main__span {
            font-size: 1.2rem; }
        .main__btn {
            cursor: pointer;
            border: none;
            padding: 0 2rem;
            background-color: #f3ad58;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all .3s; }
            .main__btn:focus {
            outline: none; }
            .main__btn:hover {
            background-color: #B28451; }
        .main__primary {
            font-size: 2.5rem; }
        .main__small {
            font-size: 1.4rem;
            margin-left: .5rem;
            font-weight: 300; }

        .login__third {
        font-size: 3rem;
        text-align: center;
        transform: translateY(-2rem);
        color: #555; }

        .login__group {
        margin: 0 auto; }
        .login__group:not(:last-child) {
            margin-bottom: 2rem; }

        .login__input {
        border: none;
        border-radius: none;
        padding: 1rem;
        width: 40rem; }
        .login__input:focus {
            outline: none; }

        .login__btn {
        border: none;
        border-radius: none;
        padding: 1rem 0;
        cursor: pointer;
        background-color: #2998ff;
        color: #fff;
        transition: all .3s; }
        .login__btn:focus {
            outline: none; }
        .login__btn:hover {
            background-color: #3023a8; }

        .login__check {
        display: none; }

        .login__label {
        cursor: pointer;
        position: relative;
        color: #555;
        font-size: 1.6rem;
        padding-left: 2.5rem; }

        .login__label::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 2rem;
        height: 2rem;
        border: 3px solid #555;
        transition: all .4s; }

        .login__check:checked ~ .login__label::after {
        border: none;
        clip-path: polygon(42% 78%, 88% 14%, 100% 22%, 47% 99%, 6% 72%, 15% 60%);
        background-color: #178560; }

        .login__btn-1:visited, .login__btn-1:link {
        font-size: 1.6rem;
        transform: translateY(4rem);
        align-self: center;
        display: inline-block;
        text-decoration: none;
        color: #555;
        transition: all .2s; }

        .login__btn-1:hover, .login__btn-1:active {
        color: #2998ff; }

        .login__problem {
        text-align: center;
        font-size: 1.6rem;
        color: #555;
        margin-top: 2rem; }
        .login__problem-link {
            color: #555;
            text-decoration: none;
            transition: all .2s; }
            .login__problem-link:hover {
            color: #2998ff; }

        .start__date {
        display: flex;
        align-items: center;
        height: 10rem; }
        .start__date:not(:last-child) {
            margin-left: 1rem; }

        .start__content {
        display: flex; }

        .start__paragh {
        font-size: 1.7rem;
        color: #000;
        font-weight: 500;
        padding: 1rem;
        display: inline-block; }

        .start__link:link, .start__link:visited {
        text-decoration: none;
        color: #fff;
        background-color: #7ed56f;
        display: inline-block;
        padding: 1rem 2.5rem;
        transition: all .3s; }

        .start__link:hover, .start__link:active {
        background-color: #178560; }

        .start__span {
        font-size: 1.2rem; }

        .start__icon {
        font-size: 1.4rem; }

        .start__form {
        align-self: center;
        opacity: 0;
        backface-visibility: hidden;
        transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1); }

        .start__group {
        display: flex;
        align-items: center; }

        .start__input--date {
        border: none;
        padding: 1rem 2.5rem; }
        .start__input--date:focus {
            outline: none; }

        .start__btn {
        border: none;
        background-color: #2998ff;
        cursor: pointer;
        padding: .5rem 1rem;
        transition: all .2s;
        border-radius: 3px; }
        .start__btn:focus {
            outline: none; }
        .start__btn:hover {
            background-color: #3023a8; }

        .start__icon--btn {
        font-size: 2rem;
        color: #fff; }

        .start__check {
        opacity: 0;
        visibility: hidden; }

        .start__label {
        padding: 1rem 3rem;
        background-color: #7ed56f;
        cursor: pointer;
        color: #fff;
        transition: all .3s; }
        .start__label:hover {
            background-color: #178560; }

        .start__check:checked ~ .start__form {
        opacity: 1;
        backface-visibility: visible; }

        .start__search {
        margin-left: 1rem; }

        .start__input--text {
        border: 1px solid #cacaca;
        padding: 1rem 2.5rem;
        width: 50%;
        border-radius: 3px; }
        .start__input--text:focus {
            outline: none; }

        .content {
        display: flex;
        min-height: 50rem; }

        .login-page {
        background-image: linear-gradient(to right bottom, #2998ff, #3023a8, #991b1b, #ff2929);
        background-image: cover;
        background-repeat: no-repeat;
        min-height: 100vh; }

        .section__login {
        box-shadow: 0 2.5rem 4rem rgba(0, 0, 0, 0.3);
        padding: 5rem 5rem;
        background-color: rgba(255, 255, 255, 0.8);
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        display: flex;
        flex-direction: column; }

        .section__start {
        margin: 0 auto;
        min-width: 114rem; }

    </style>


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
