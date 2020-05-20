@extends('layouts.app')

@section('content')
<style>
    form{
        width: 100%;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">       <a href="{{   route('income.index') }}">Назад</a></div>

        <form action="{{ route('income.update', ['income' => $income->id]) }}" method="post">
            @csrf
            @method('patch')
            <label for="source"> Источник дохода </label>
            <br>
            <input type="text" name="source"  value="{{ $income->source }}" >

            <br>
            <label for="sum">Введите сумму</label>
            <br>
            <input type="number" name="sum" value="{{ $income->sum }}" >

            <br>
            <br>
            <br>
            <textarea name="comment" id="" cols="30" rows="10"  >{{ $income->comment }}</textarea>
            <br>
            <br>
            <button type="submit" class="btn btn-success" value="Click">Click</button>

        </form>

    </div>
</div>

@endsection

