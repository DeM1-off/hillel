<?   session_start();  #start a session

if ( !isset( $_SESSION['count'] ) )
    $_SESSION['count'] = 1; else $_SESSION['count']++;
?>

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
        <h1> <a href="/">Page get</a> </h1>

        <a href="{{ route('home.about')}}">about</a>
        <a href="{{ route('home.count')}}">count</a>
        <a href="{{ route('home.comment')}}">comment</a>
        </nav>
        <h2>Вы посетили эту страницу
            <?php echo( $_SESSION['count'] ); ?> раз в этой сессии
        </h2>
</body>
</html>
