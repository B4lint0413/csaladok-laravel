@extends("layouts.main")
@section("title", $title)
@section("content")
<h1 class="text-center fs-1">{{mb_strtoupper($character["character"])}}</h1>
<img class="img-fluid img-thumbnail d-block mx-auto" src="{{asset('img/'. $slug. '/' . $character['image'] . '')}}" alt="">
@endsection