@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">

        @if($beach)
        <h1 class="display-4">{{$beach->title}}</h1>
        <p>{{$beach->description}}</p>
        <p><img style="width:100%" src="/storage/pictures/{{$beach->picture}}" alt="Picture of {{$beach->picture}}"></p>
        <p>{{$beach->access}}</p>
        <p>{{$beach->installations}}</p>
        <p><small>Ajouté le: {{$beach->created_at}}</small></p>
        @else
        <h1>Cette plage est inaccessible!</h1>
        @endif
        <div>
            {{-- Si l'utilisateur est pas un guest --}}
            @if(!Auth::guest())
                {{-- Si la plage a été ajouté par l'utilisateur --}}
                @if (Auth::user()->id == $beach->user_id)
                    {!! Form::open(['action' => ['BeachesController@destroy', $beach->id], 'method' => 'POST', 'class' => 'form-inline']) !!}
                        <a href="/plages/{{$beach->id}}/edit" class="btn btn-primary mr-2">Modifier</a>
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Supprimer', ['class' => 'btn btn-danger'])}}
                    {!! Form::close() !!}   
                @endif
            @endif
        </div>
        <p class="mt-2"><a href="/plages">Retour</a></p>
    </div>



</div>

@endsection