@extends('layouts.user')
@section('title', 'キャラクター')

@section('content')
<div class= image-character-area>
    <img src="{{ asset('storage/image/' . $character->image_path) }}" class="character-image">
</div>
<div class="character-contents">
    <p class="text-center h1">{{$character->detail}}</p>
</div>

@endsection