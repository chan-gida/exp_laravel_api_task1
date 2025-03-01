@extends('layouts.app')
@section('content')

<div>
<h1>新規ToDo作成</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('todos.store') }}" method="POST">
    @csrf
    <label>タイトル: 
        <input type="text" name="title" value="{{ old('title') }}">
    </label>
    <br><br>
    <label>詳細:
        <textarea name="content">{{ old('content') }}</textarea>
    </label>
    <br><br>
    <button type="submit">登録</button>
</form>

<a href="{{ route('todos.index') }}">戻る</a>
</div>
@endsection