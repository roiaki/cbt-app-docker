@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

<h1>id = {{ $column->id }}  詳細ページ</h1>

<table class="table table-bordered">
    <tr>
        <th>作成日時</th>
        <td>{{ $column->created_at }}</td>
    </tr>
    <tr>
        <th>最終変更日時</th>
        <td>{{ $column->updated_at }}</td>
    </tr>
    <tr>
        <th class="habit">id</th>
        <td>{{ $column->id }}</td>
    </tr>
    <tr>
        <th>タイトル</th>
        <td>{{ $column->title }}</td>
        
    </tr>
    <tr>
        <th>内容</th>
        <td>{{ $column->content }}</td>
    </tr>

    <tr>
        <th>感情と強さ</th>
        <td>{{ $column->emotion_name }}</td>
        <td>{{ $column->emotion_strength }}</td>
    </tr>

    <tr>
        <th>その時考えた事</th>
        <td>{{ $column->thoughts }}</td>
    </tr>

    <tr>
        <th>考え方の癖</th>
        <td>
            <div class="columns">
                <label class="habit-thinking"><input type="checkbox" name="check">一般化のし過ぎ</label>
                <label class="habit-thinking"><input type="checkbox" name="check">自分への関連付け</label>
                <label class="habit-thinking"><input type="checkbox" name="check">根拠のない推論</label>
                <label class="habit-thinking"><input type="checkbox" name="check">白か黒か思考</label>
                <label class="habit-thinking"><input type="checkbox" name="check">すべき思考</label>
                <label class="habit-thinking"><input type="checkbox" name="check">過大評価と過少評価</label>
                <label class="habit-thinking"><input type="checkbox" name="check">感情による決めつけ</label>
            </div>
        </td>
    </tr>
</table>
<p><a href = "{{ route('columns.edit', $column->id) }}">{{ $column->id }}を編集する</a></p>

<div class="d-flex flex-row">
    <div class="col-xs-3 ml-3">
    {!! Form::model($column, ['route' => ['columns.edit', $column->id], 'method' => 'get']) !!}
        {!! Form::submit('編集', ['class' => 'btn btn-secondary']) !!}
    {!! Form::close() !!}
    </div>
    <div class="col-xs-3 ml-5">
    {!! Form::model($column, ['route' => ['columns.destroy', $column->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    </div>
</div>
@endsection