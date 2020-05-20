@extends('layouts.app')

@section('content')


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
@endsection

