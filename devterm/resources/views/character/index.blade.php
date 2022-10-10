@extends('layouts.user')
@section('title', 'キャラクター')

@section('content')


<div class="card-contents">
    <div class="character-list-area">
         <div class="character-list">
        @foreach($posts as $character)
          @if ($character->image_path)
           <a href="{{action('Admin\CharacterController@show',['id'=>$character->id]) }}"> <img src="{{ asset('storage/image/' . $character->image_path) }}" class="character-image"></a>
          @else
             <img src="{{ asset('images/011.jpg') }}" class="character-image">
          @endif
        @endforeach
         </div>
    </div>
</div> 
@endsection