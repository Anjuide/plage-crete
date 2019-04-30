@extends('layouts.app')

@section('content')

<h1>Ajouter une plage</h1>

<!-- Formulaire de vote -->
{!! Form::open(['action' => 'BeachesController@store', 'method' => 'POST']) !!}
<div>
    {{Form::label('titre', 'Titre')}}
    {{Form::text('titre', '',['class' => 'form-control', 'placeholder' => 'Nom de la plage'])}}
</div>
<div>
    {{Form::label('description', 'Description')}}
    {{Form::textarea('description', '',['class' => 'form-control', 'placeholder' => 'Entrez une description'])}}
</div>
<div>
    {{Form::label('image', 'Image')}}
    {{Form::text('image', '',['class' => 'form-control', 'placeholder' => 'Entrez une image'])}}
</div>
<div>
    {{Form::label('access', 'Access')}}
    {{Form::text('access', '',['class' => 'form-control', 'placeholder' => 'Comment y accéder?'])}}
</div>
<div>
    {{Form::label('installations', 'Installions')}}
    {{Form::text('installations', '',['class' => 'form-control', 'placeholder' => 'Quelles sont les installations ?'])}}
</div>
{{Form::submit('Ajouter', ['class' => 'form-control', 'class' => 'btn btn-primary'])}}
{!! Form::close() !!}
<!-- Fin du formulaire -->
@endsection