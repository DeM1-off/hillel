@extends('layouts.app')

@section('content')
<style>
    form{
        width: 100%;
    }
</style>


<div class="container">
    <a href="{{   route('income.index') }}">Назад</a>
    <div class="row">

        <br>
        <div class="col-md-12"><h3>Create Income</h3></div>

        <br>    <br>
@include('errors')

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
@endsection

