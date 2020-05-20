@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12"> <a href="{{   route('pay.index') }}">Назад</a></div>
        <h3>Create Pay</h3>
        <br>
        @include('errors')

        <form action="{{ route('pay.store') }}" method="post">
            @csrf

            <label for="spending"> Цель траты </label>
            <br>
            <input type="text" name="spending"  >

            <br>
            <label for="sum">Введите сумму</label>
            <br>
            <input type="number" name="sum"  >

            <br>
            <br>
            <textarea name="comment" id="" cols="30"  rows="10" placeholder="Комментарий"></textarea>
            <br>

            <button type="submit" class="btn btn-danger" value="Click">Click</button>
        </form>
    </div>
</div>
@endsection


