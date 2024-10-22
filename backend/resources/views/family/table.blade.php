@extends("layouts.main")
@section("title", $title)
@section("content")
<h1 class="text-center fs-1">Karakterek - Táblázat</h1>
<h3>{{$title}}</h3>
<table class="table table-striped mx-auto">
    <thead class="text-center fw-bold">
        <th>Név</th>
        <th>Család</th>
        <th>Év</th>
        <th>Részletek</th>
    </thead>
    <tbody>
        @foreach($characters as $familyName => $family)
            @foreach($family as $id => $character)
                <tr>
                    <td>{{$character["character"]}}</td>
                    <td>{{$character["family"]}}</td>
                    <td>{{$character["year"]}}</td>
                    <td><a href="{{route('families.show', [$familyName, $id])}}" class="btn" style="background-color: {{$character['color']}}">Részletek</a></td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
</table>
@endsection