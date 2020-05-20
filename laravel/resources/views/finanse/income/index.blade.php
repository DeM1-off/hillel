@include('layouts.app')
<style>
.create{
    margin: 30px;
    padding: 20px;
}
    table{
        margin-top: 30px;
    }
</style>


 <div class="container">

<div class="row">


    <a href="{{ route('income.create') }}" class="btn btn-success create">Добавить Доход</a>
    <a href="{{ route('income.sum') }}" class="btn btn-info create">Показать всю сумму</a>
    <a  href="{{ route('finanse.route') }}"  class="btn btn-secondary create" >Назад </a>
        <table class="table">
            <thead class="table-info">
                <tr>
                    <th>  id  </th>

                    <th> Cума  </th>

                    <th> Источник дохода  </th>

                    <th> Комментарий  </th>
                    <th> Узнать больше  </th>
                    <th> Обновить  </th>
                    <th> Удалить  </th>
                </tr>
            </thead>

            <tbody>
            @foreach($incomes  as $income)
                <tr>
                    <td>{{ $income->id }}</td>

                    <td>{{ $income->sum }} грн</td>


                    <td>{{ $income->source }}</td>

                    <td>{{ $income->comment }}</td>
                    <td><a href="{{ route('income.show',['income'=> $income->id ]) }}">Показать</a></td>
                    <td>    <a href="{{ route('income.edit', ['income' => $income->id]) }}">Edit</a></td>
                    <form action="{{ route('income.destroy', ['income' => $income->id]) }}" method="post">
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
