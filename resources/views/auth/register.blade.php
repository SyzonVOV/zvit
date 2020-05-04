<!DOCTYPE html>
<html>
<head>
    <title>Регістрація</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style_login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div id="main">
    <div id="container">
        <h2>Авторизація</h2>
        <form method="post" class="login" action="{{ route('register') }}">
            @csrf
                <div style="padding-bottom: 20px">
                    <label for="name"><b>Користувач</b></label>
                    <input type="text" placeholder="Enter Username" name="name" required autofocus>

                    <label for="email"><b>Пошта</b></label>
                    <input type="email" placeholder="Enter E-mail" name="email" value="" required>

                    <label for="password"><b>Пароль</b></label>
                    <input  type="password" placeholder="Enter Password" name="password" required>

                    <label for="password_confirmation"><b>Підтвердіть пароль</b></label>
                    <input  type="password" placeholder="Enter Password" name="password_confirmation" required>
                </div>
                <button class="loginbtn" type="submit">Регістрація</button>
        </form>
    </div>
</div>

</body>
</html>
