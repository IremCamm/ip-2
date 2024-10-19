<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 0;
        }
        header,footer{
            background-color: aqua;
            text-align: center;
        }
        main{
            padding: 2em;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            display: flex;
        }
        nav ul li{
            margin: 0 1em;
        }
    </style>

</head>
<body>
<header>
    <h1>Çanakkale Teknik Bilimler MYO</h1>
</header>
<nav>
    <ul>
        <li><a href="/">Anasayfa</a></li>
        <li><a href="/about">Hakkımızda</a></li>
        <li><a href="/contact">İletişim</a></li>
    </ul>
</nav>
<main>
    @yield('main')
</main>
<footer>
    Copyright &copy; Çanakkale Teknik Bilimler MYO
</footer>


</body>
</html>
