@extends("layouts.main")
@section("title", $title)
@section("content")
<h1>{{$character["character"]}}</h1>
<img src="{{asset('img/'. $slug. '/' . $character['image'] . '')}}" alt="">
@endsection