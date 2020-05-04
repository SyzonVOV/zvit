<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="{{ asset('cjs/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/my.js') }}"></script>
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="{{ asset('css/mystile.css') }}" rel="stylesheet">

</head>
<body>

<div class="sidenav">
    <a href="">Сбросить проект в начальное состояние</a>
    <a href="#services">Services</a>
    <a href="#clients">Clients</a>
    <a href="#contact">Contact</a>
    <button class="dropdown-btn">Бюджетна звітність
        <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-container">
        @if($reports ?? '')
            @foreach($reports ?? '' as $report)
                <a href="">{{$report->name}}</a>
            @endforeach
        @endif
    </div>
    <a href="#contact">Search</a>
</div>

<div class="main">

    <div class="container_report">
        <form class="form-style-4" action="" method="post">
            <div class="row">
                <label for="name_report" class="name_report">Який це звіт </label>
                <label for="name" class="row_name">за період</label>
                <input type="text" name="Month" autocomplete="off" placeholder="Month">
                <input type="text" name="Years" autocomplete="off" placeholder="Years">
            </div>

            <label>
                <span> </span><input type="submit" value="Записати" />
            </label>
            <label>
                <input type="BUTTON" value="Перевірити" />
            </label>
            <label>
                <input type="BUTTON" value="Створити" />
            </label>
            <label>
                <input type="BUTTON" value="Відкрити" />
            </label>
        </form>
    </div>


    <table class="table-hover" width="100%" border="1" cellpadding="4" cellspacing="0">
        <caption>БАЛАНС</caption>
        <tr  class="thead-light" >
            <th width="600px" >АКТИВ</th><th width="50px">Код рядка</th><th>На початок звітного періоду</th><th>На кінець звітного періоду</th>
        </tr>
        <tr >
            <td >Нефть</td><td>43</td><td class="td_select" id="A43" ><div class="div_select" contenteditable>51</div></td><td class="td_select" id="P43">79</td>
        </tr>
        <tr >
            <td >Золото</td><td>29</td><td class="td_select" id="A29"><div class="div_select" contenteditable>34</div></td><td class="td_select" id="P29">48</td>
        </tr>
        <tr contenteditable="true">
            <td >Дерево</td><td>38</td><td  class="td_select" id="A38">57</td><td class="td_select" id="P38">36</td>
        </tr>
        <tr contenteditable="true">
            <td >Всього</td><td >38</td><td id="A00"></td><td id="P00"></td>
        </tr>

    </table>



</div>


<script>

    /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>

</body>
</html>
