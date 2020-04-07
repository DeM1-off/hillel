<?php

namespace App\Http\Controllers;



class Home1Controller extends Controller
{
    public function index()
    {
        return view('home1/index');
    }
    public function get()
    {
        session_start();  #start a session

        if ( !isset( $_SESSION['count'] ) )
         $_SESSION['count'] = 1; else $_SESSION['count']++;

        return view('home1/get');
    }
    public function comment()
    {


        $quotes[] = 'Монета, упавшая на дно реки, может показаться рыбам подарком с неба. Что они будут делать с этим подарком?';
    $quotes[] = 'Если увидишь нечто, к чему стоит приложить руку, поступи не так, как подсказывает разум, но как велит настроение.';
    $quotes[] = 'Если то, что ты делаешь, трудно тебе - посмотри, нуждаешься ли ты в этом.';
    $quotes[] = 'Возможно, твои ошибки - это то, что нужно Миру.';
    $quotes[] = 'Всякий может ударить слабого, но только слабый хочет ударить слабого.';


    srand ((double) microtime() * 1000000);
    $random_number = rand(0,count($quotes)-1);
    echo ($quotes[$random_number] );
        return view('home1/comment');
    }
}
