<!DOCTYPE html>
<html>
<head>
    <title>Форма входу</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style_login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<div id="main">
    <div id="container">
        <h2>Авторизація</h2>
        <form method="POST" class="login" action="{{ route('login') }}">
            @csrf
            <div style="padding-bottom: 20px">
                <label for="name"><b>Користувач</b></label>
                <input type="name" placeholder="Enter Username" name="name" value="{{ old('name') }}" autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
{{--

                <label for="email"><b>Пошта</b></label>
                <input id="email" type="email" name="email" value="" required autofocus>

--}}
                <label for="password"><b>Пароль</b></label>
                <input  id="password" type="password" placeholder="Enter Password" name="password" required>

            </div>
            <button class="loginbtn" type="submit">Вхід</button>
        </form>
        <a href="{{route('register')}}">Регістрація</a>
    </div>
</div>

</body>
</html>
