@extends('layouts.app')

@section('content')


<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Toutes nos plages en un coup d’œil</h1>
        @if(count($beaches) > 0)
            <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
            <div class="row">
                @foreach($beaches as $beach)
                    <div class="col-12 col-md-4">
                        <h3><a href="/plages/{{$beach->id}}">{{$beach->title}}</a></h3>
                        <img style="width:100%" src="/storage/pictures/{{$beach->picture}}" alt="Picture of {{$beach->picture}}">
                        <p><span>Ville</span> - <span>Pays</span></p>
                        <p><small>Ajouté le: {{$beach->created_at}}</small></p>
                    </div>
                @endforeach
            </div>
        @else
            <p>Aucune plage pour le moment</p>
        @endif
    </div>
</div>
@endsection