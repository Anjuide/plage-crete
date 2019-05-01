@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tableau de bord</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Vous êtes connecté(e)!
                </div>
            </div>
        </div>
        <div>
            @if (count($beaches) > 0)
                @foreach ($beaches as $beach)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="/storage/pictures/{{$beach->picture}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $beach->title }} </h5>
                            <p class="card-text">{{ $beach->description }} </p>
                            <a href="/plages/{{ $beach->id }}/edit" class="btn btn-primary">Modifier</a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>Vous avez pas de plages ajoutées</p>
            @endif
            
    </div>
    </div>
</div>
@endsection
