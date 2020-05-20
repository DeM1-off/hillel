@extends('layouts.app')

@section('content')
<style>
    form{
        width: 100%;
    }
</style>

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
@endsection


