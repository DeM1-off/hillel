<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<style>

    .create{
        text-align: center;

        margin: 30px;
        padding: 20px;
    }
    table{
        margin-top: 30px;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <a href="{{ route('income.index') }}" class="btn btn-success create">Перейти в список доходов</a>

        <a href="{{ route('pay.index') }}" class="btn btn-danger create">Перейти в список расходов</a>
        <a href="/" class="btn  btn-secondary create">Назад</a>

    </div>
</div>



</body>
</html>