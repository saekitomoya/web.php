@extends('layouts.admin')
@section('title', 'キャラクター')

@section('content')
    <div class="container">
        <div class="row">
            <h2>キャラクター一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\CharacterController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\CharacterController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_name" value="{{ $cond_name }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">名前</th>
                                <th width="50%">画像</th>
                                <th width="20%">タイプ</th>
                                <th width="20%">職業</th>
                                <th width="20%">レア度<th>
                                <th width="20%">属性</th>
                                <th width="50%">キャラ詳細</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $character)
                                <tr>
                                    <th>{{ $character->id }}</th>
                                    <td>{{ \Str::limit($character->name, 30) }}</td>
                                    <td>{{ \Str::limit($character->image_path, 30) }}</td>
                                    <td>{{ \Str::limit($character->type, 30) }}</td>
                                    <td>{{ \Str::limit($character->job, 30) }}</td>
                                    <td>{{ \Str::limit($character->rarity, 30) }}</td>
                                    <td>{{ \Str::limit($character->attribute, 30) }}</td>
                                    <td>{{ \Str::limit($character->detail, 30) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\CharacterController@edit', ['id' => $character->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\CharacterController@delete', ['id' => $character->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection