<!DOCTYPE html>
<html>
<head>
    <title>Форма входу</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style_login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">

</head>
<body>
<div id="main">
    <div id="container">
        <h2>Авторизація</h2>
        <form class="login" action="/">

            <div >
                <div style="padding-bottom: 20px">
                    <label for="uname"><b>Користувач</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Пароль</b></label>
                    <input  type="password" placeholder="Enter Password" name="psw" required>
                </div>

                <button class="loginbtn" type="submit">Вхід</button>
            </div>
        </form>
    </div>

</div>

</body>
</html>



