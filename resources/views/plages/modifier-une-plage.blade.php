@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Modifier les descriptions de la plage</h1>
        <div class="">
           <img style="width:20%" src="/storage/pictures/{{$beach->picture}}" alt="Picture of {{$beach->picture}}">
        </div>
        <!-- Formulaire de vote -->
        {!! Form::open(['action' => ['BeachesController@update', $beach->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('titre', 'Nom')}}
            {{Form::text('titre', $beach->title,['class' => 'form-control', 'placeholder' => 'Nom de la plage'])}}
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', $beach->description,['class' => 'form-control', 'placeholder' => 'Entrez une description'])}}
        </div>
        <div class="form-group">
            {{Form::label('picture', 'Remplacer image')}}
            {{Form::file('picture')}}
        </div>
        <div class="form-group">
            {{Form::label('access', 'Access')}}
            {{Form::text('access', $beach->access,['class' => 'form-control', 'placeholder' => 'Comment y accéder?'])}}
        </div>
        <div class="form-group">
            {{Form::label('installations', 'Installions')}}
            {{Form::text('installations', $beach->installations,['class' => 'form-control', 'placeholder' => 'Quelles sont les installations ?'])}}
        </div>
        <div class="form-group">
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Valider', ['class' => 'form-control', 'class' => 'btn btn-primary'])}}
            {!! Form::close() !!}
        </div>
        <!-- Fin du formulaire -->
    </div>
</div>
@endsection