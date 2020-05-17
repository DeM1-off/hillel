<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<style>
    .create{
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
            <a href="{{ route('pay.create') }}" class="btn btn-danger create">Добавить Доход</a>
            <a href="{{ route('pay.sum') }}" class="btn btn-info create">Показать всю сумму</a>
            <a  href="{{ route('finanse.route') }}"  class="btn btn-secondary create" >Назад </a>
            <table class="table">
                <thead class="table-danger">
                <tr>
                    <th>  id  </th>

                    <th> Cума  </th>

                    <th> Цель траты </th>

                    <th> Комментарий  </th>
                    <th> Ячейка  </th>
                    <th> Обновить  </th>
                    <th> Удалить  </th>
                </tr>
                </thead>

                <tbody>
                @foreach($pays  as $pay)




                    <tr>
                        <td>{{ $pay->id }}</td>

                        <td>{{ $pay->sum }}</td>


                        <td>{{ $pay->spending }}</td>

                        <td>{{ $pay->comment }}</td>
                        <td><a href="{{ route('pay.show',['pay'=> $pay->id ]) }}">Показать</a></td>
                        <td>    <a href="{{ route('pay.edit', ['pay' => $pay->id]) }}">Edit</a></td>
                        <form action="{{ route('pay.destroy', ['pay' => $pay->id]) }}" method="post">
                            @method('delete')
                            @csrf
                            <td>   <button type="submit"  class="btn btn-danger ">X</button>  </td>
                        </form>
                    </tr>
                @endforeach
                </tbody>
            </table>

</div>
</div>

</body>
</html>

