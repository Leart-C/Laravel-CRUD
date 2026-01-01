<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | Home</title>
</head>
<body>
    <h2>Currently Available</h2>

    @if($greeting == "Hello")
    <p>Hi from inside if statement</p>
    @endif

    <ul>
       @foreach($laravel as $lvr)
       <li>
        <p>{{ $lvr['name'] }}</p>
        <a href="/laravel/{{ $lvr['id'] }}">View Details</a>
       </li>
       @endforeach
    </ul>
</body>
</html>