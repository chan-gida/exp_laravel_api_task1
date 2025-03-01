<div>
<!@extends('layouts.app') 
@section('content')
<h1>ToDoリスト</h1>

@if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('todos.create') }}">新規作成</a>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>タイトル</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($todo as $todo)
        <tr>
            <td>{{ $todo->id }}</td>
            <td>{{ $todo->title }}</td>
            <td>
                <a href="{{ route('todos.edit', $todo) }}">編集</a>
                <form action="{{ route('todos.destroy', $todo) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('削除しますか？')">削除</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
</div>
