<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("model")</title>
    <link rel="stylesheet" href="{{ url('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    <script src="https://kit.fontawesome.com/67f918e73f.js" crossorigin="anonymous"></script>
</head>

<body>

    <header class="header">
        @yield("header__content")
    </header>

    <main class="main">
        @yield("main__content")
    </main>

    <footer class="footer">
        @yield("footer__content")
    </footer>


    <script src="{{ url('scripts/index.js') }}"></script>
</body>

</html>