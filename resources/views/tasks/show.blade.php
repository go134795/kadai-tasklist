@extends('layouts.app')

@section('content')

<!-- ここにページごとのコンテンツを書く -->

    <h1>id = {{ $task->id }} のタスクの詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>content</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit','このタスクを編集', ['id' => $task->id],['class' => 'btn btn-primary']) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy',$task->id], 'method' => 'delete']) !!}
    
        {!! Form::submit('消去', ['class' => 'btn btn-danger']) !!}
        
@endsection