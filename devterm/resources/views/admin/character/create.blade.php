@extends('layouts.admin')
@section('character', 'キャラクター')
@section('content')
    <div class="container">
        <div class="">
            <div class="col-md-8 mx-auto">
                <h2>キャラクター</h2>
                   <form action="{{ action('Admin\CharacterController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>                    <div class="form-group row">
                        <label class="col-md-2">タイプ</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="type">
                          <option value="1">バランス</option>
                          <option value="2">アタッカー</option>
                          <option value="3">ディフェンダー</option>
                          <option value="4">テクニカル</option>
                          <option value="5">スキル</option>
                          <option value="6">サポート</option>
                          <option value="7">ヒーロー</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">職業</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="job">
                          <option value="1">剣士</option>
                          <option value="2">武闘家</option>
                          <option value="3">ウォリアー</option>
                          <option value="4">ランサー</option>
                          <option value="5">アーチャー</option>
                          <option value="6">魔導士</option>
                          <option value="7">双剣</option>
                          <option value="8">ドラゴンライダー</option>
                          <option value="9">ヴァリアント</option>
                          <option value="10">バーサーカー</option>
                          <option value=11>ルーンセイバー</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">レア度</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="rarity">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">属性</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="attribute">
                          <option value="1">火</option>
                          <option value="2">水</option>
                          <option value="3">雷</option>
                          <option value="4">闇</option>
                          <option value="5">光</option>
                          <option value="6">闇</option>
                        </select>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">キャラ詳細</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="detail" value="{{ old('detail') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection