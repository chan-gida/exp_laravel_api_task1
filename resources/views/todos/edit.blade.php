<div>
@extends('layouts.app')
@section('content')
<h1>ToDo編集(ID: {{ $todo->id }})</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('todos.update', $todo) }}" method="POST">
    @csrf
    @method('PUT')
    <label>タイトル: 
        <input type="text" name="title" value="{{ old('title', $todo->title) }}">
    </label>
    <br><br>
    <label>詳細:
        <textarea name="content">{{ old('content', $todo->content) }}</textarea>
    </label>
    <br><br>
    <button type="submit">更新</button>
</form>

<a href="{{ route('todos.index') }}">戻る</a>
@endsection    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>
