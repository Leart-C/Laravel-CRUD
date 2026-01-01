<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | Home</title>
</head>
<body>
    <h2>Currently Available</h2>
    <p>{{ $greeting }}</p>
    <ul>
        <li><a href="/laravel/{{ $laravel[0]["id"] }}">{{ $laravel[0]["name"] }}</a></li>
        <li><a href="/laravel/{{ $laravel[1]["id"] }}">{{ $laravel[1]["name"] }}</a></li>
    </ul>
</body>
</html>