@extends('layouts.app')

@section('content')
<a href="/plages">Retour</a>

@if($beach)
<h1>{{$beach->title}}</h1>
<small>Ajouté le: {{$beach->created_at}}</small>
@else
<h1>Cette plage est inaccessible!</h1>
@endif
<div>
    <a href="/plages/{{$beach->id}}/edit">Modifier</a>

    {!! Form::open(['action' => ['BeachesController@destroy', $beach->id], 'method' => 'POST']) !!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Supprimer', ['class' => 'form-control', 'class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
</div>

@endsection