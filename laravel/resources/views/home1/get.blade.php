<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get</title>
</head>
<body>
    <nav>
        <h1>Page get</h1>
        
        <a href="{{ route('home1.index')}}">index</a>
        <a href="{{ route('home1.get')}}">get</a>
        <a href="{{ route('home1.comment')}}">comment</a>
        </nav>
        <h2>Вы посетили эту страницу
            <?php echo( $_SESSION['count'] ); ?> раз в этой сессии
        </h2>
</body>
</html>
