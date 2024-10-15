<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <header>
        Нарушений нет
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        © Кондратьев Дмитрий 2024г
    </footer>
</body>
</html>