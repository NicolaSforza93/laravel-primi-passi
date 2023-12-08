<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-primi-passi</title>
</head>

<body>
    <header>
        <ul class="menu">
            <li>
                <a href="/news">News</a>
            </li>
            <li>
                <a href="/contact">Contact</a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
        </ul>
    </header>
    <h1>Home</h1>
    <h1>{{ $title }}</h1>
    <p>{{ $paragraph }}</p>
</body>

</html>