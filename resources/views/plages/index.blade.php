@extends('layouts.app')

@section('content')
<h1>Plages</h1>
@if(count($beaches) > 1)
@foreach($beaches as $beach)
<div>
    <h3><a href="/plages/{{$beach->id}}">{{$beach->title}}</a></h3>
    <small>Ajouté le: {{$beach->created_at}}</small>
</div>
@endforeach

@else

<p>Aucune plage pour le moment</p>

@endif

@endsection