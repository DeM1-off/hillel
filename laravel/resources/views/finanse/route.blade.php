@extends('layouts.app')

@section('content')
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

<div class="container">
    <div class="row">
        <a href="{{ route('income.index') }}" class="btn btn-success create">Перейти в список доходов</a>

        <a href="{{ route('pay.index') }}" class="btn btn-danger create">Перейти в список расходов</a>
        <a href="/" class="btn  btn-secondary create">Назад</a>

    </div>
</div>

@endsection


