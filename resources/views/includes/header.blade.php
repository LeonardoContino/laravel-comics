<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dc-comics</title>
    <link rel="icon" href={{ asset('images/dc-logo.png')}}>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
    <figure>
        <img src="{{ asset('images/dc-logo.png')}}" alt="">
    </figure>

    <nav>
        <ul class="d-flex">
        @foreach ( $links as $link)
            <li>
                <a></a>
            </li>
        @endforeach
            
        </ul>
    </nav>
   
</header>
</body>
</html>