@extends("layouts.main")
@section("title", $title)
@section("content")
<h1 class="text-center fs-1">{{$title}} <span class="badge fs-6" style="background-color: {{$family[0]['color']}};">{{$family[0]['year']}}</span></h1>
<div class="row g-2">
    @foreach($family as $character)
    <div class="card col-12 col-sm-6 col-lg-4 col-xxl-3 p-0" style="background-color: {{$character['color']}};">
        <img src="{{asset('img/' . $slug . '/' . $character['image'] . '')}}" class="card-img-top img-fluid" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$character['character']}}</h5>
        </div>
    </div>
    @endforeach
</div>
@endsection