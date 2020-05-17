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
        <p>  <a href="{{   route('income.index') }}">Назад</a>
        </p>


<form action="{{ route('income.store') }}" method="post">
    @csrf

    <label for="source"> Источник дохода </label>
    <br>
        <input type="text" name="source"  >

    <br>
    <label for="sum">Введите сумму</label>
    <br>
        <input type="number" name="sum" >

    <br>
    <br>
    <textarea name="comment" id="" cols="30" rows="10" placeholder="Комментарий"></textarea>
    <br>
    <br>
    <button type="submit" class="btn btn-success" value="Click">Click</button>

</form>
    </div>
</div>


</body>
</html>
