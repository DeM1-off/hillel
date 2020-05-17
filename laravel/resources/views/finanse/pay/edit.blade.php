<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create income</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<style>
    form{
        width: 100%;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <a href="{{   route('pay.index') }}">Назад</a>
        <form action="{{ route('pay.update', ['pay' =>  $pay->id]) }}" method="post">
            @csrf
            @method('patch')
            <label for="spending"> Источник дохода </label>
            <br>
            <input type="text" name="spending"  value="{{ $pay->spending }}" >

            <br>
            <label for="sum">Введите сумму</label>
            <br>
            <input type="number" name="sum" value="{{ $pay->sum }}" >

            <br>
            <br>
            <textarea name="comment" id="" cols="30" rows="10"
            >{{ $pay->comment }}</textarea>

            <br>
            <button type="submit" class="btn btn-danger" value="Click">Click</button>

        </form>
    </div>
</div>


</body>
</html>
