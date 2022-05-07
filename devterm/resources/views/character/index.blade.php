@extends('layouts.user')
@section('title', 'キャラクター')

@section('content')

<div class="container">
        <div class="row">
            <h2>user向けキャラクター一覧</h2>
        </div>
</div>
<div class="card-contents">
    <div class="character-list-area">
         <div class="character-list">
        @foreach($posts as $character)
          @if ($character->image_path)
            <img src="{{ asset('storage/image/' . $character->image_path) }}" class="character-image">
          @else
             <img src="{{ asset('images/011.jpg') }}" class="character-image">
          @endif
        @endforeach
         </div>
    </div>
</div> 
@endsection