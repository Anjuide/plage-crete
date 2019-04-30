@extends('layouts.app')

@section('content')

<h1>Modifier les descriptions de la plage</h1>

<!-- Formulaire de vote -->
{!! Form::open(['action' => ['BeachesController@update', $beach->id], 'method' => 'POST']) !!}
<div>
    {{Form::label('titre', 'Titre')}}
    {{Form::text('titre', $beach->title,['class' => 'form-control', 'placeholder' => 'Nom de la plage'])}}
</div>
<div>
    {{Form::label('description', 'Description')}}
    {{Form::textarea('description', $beach->description,['class' => 'form-control', 'placeholder' => 'Entrez une description'])}}
</div>
<div>
    {{Form::label('image', 'Image')}}
    {{Form::text('image', $beach->picture,['class' => 'form-control', 'placeholder' => 'Entrez une image'])}}
</div>
<div>
    {{Form::label('access', 'Access')}}
    {{Form::text('access', $beach->access,['class' => 'form-control', 'placeholder' => 'Comment y accéder?'])}}
</div>
<div>
    {{Form::label('installations', 'Installions')}}
    {{Form::text('installations', $beach->installations,['class' => 'form-control', 'placeholder' => 'Quelles sont les installations ?'])}}
</div>
{{Form::hidden('_method', 'PUT')}}
{{Form::submit('Valider', ['class' => 'form-control', 'class' => 'btn btn-primary'])}}
{!! Form::close() !!}
<!-- Fin du formulaire -->
@endsection