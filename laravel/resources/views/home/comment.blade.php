
<nav style="margin: 10px 0">
    <h1> <a href="/">Page get</a> </h1>

    <a href="{{ route('home.about')}}">about</a>
    <a href="{{ route('home.count')}}">count</a>
    <a href="{{ route('home.comment')}}">comment</a>
</nav>

<?php

$quotes[] = 'Монета, упавшая на дно реки, может показаться рыбам подарком с неба. Что они будут делать с этим подарком?';
$quotes[] = 'Если увидишь нечто, к чему стоит приложить руку, поступи не так, как подсказывает разум, но как велит настроение.';
$quotes[] = 'Если то, что ты делаешь, трудно тебе - посмотри, нуждаешься ли ты в этом.';
$quotes[] = 'Возможно, твои ошибки - это то, что нужно Миру.';
$quotes[] = 'Всякий может ударить слабого, но только слабый хочет ударить слабого.';


srand ((double) microtime() * 1000000);
$random_number = rand(0,count($quotes)-1);
echo ($quotes[$random_number] );

    ?>
