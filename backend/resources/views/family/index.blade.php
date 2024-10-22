@extends("layouts.main")
@section("title", $title)
@section("content")
<h1 class="text-center fs-1">{{$title}}</h1>
<ul>
    @foreach($families as $key => $value)
        <li><a href="{{route('families.list', $key)}}">{{$value}}</a></li>
    @endforeach
</ul>
@endsection