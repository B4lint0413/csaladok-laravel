@extends("layouts.main")
@section("title", $title)
@section("content")
<ul>
    @foreach($families as $key => $value)
        <li><a href="{{route('families.list', $key)}}">{{$value}}</a></li>
    @endforeach
</ul>
@endsection