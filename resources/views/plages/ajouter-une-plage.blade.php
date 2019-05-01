@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Ajouter une plage</h1>
        <!-- Formulaire de vote -->
        {!! Form::open(['action' => 'BeachesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('titre', 'Titre')}}
            {{Form::text('titre', '',['class' => 'form-control', 'placeholder' => 'Nom de la plage'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '',['class' => 'form-control', 'placeholder' => 'Entrez une description'])}}
        </div>
        <div class="form-group">
            {{Form::label('picture', 'Ajouter une image')}}
            {{Form::file('picture')}}
        </div>
        <div class="form-group">
            {{Form::label('access', 'Access')}}
            {{Form::text('access', '',['class' => 'form-control', 'placeholder' => 'Comment y accéder?'])}}
        </div>
        <div class="form-group">
            {{Form::label('installations', 'Installions')}}
            {{Form::text('installations', '',['class' => 'form-control', 'placeholder' => 'Quelles sont les installations ?'])}}
        </div>
        <div class="form-group">
            {{Form::submit('Ajouter', ['class' => 'form-control', 'class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
        <!-- Fin du formulaire -->
    </div>
</div>
@endsection