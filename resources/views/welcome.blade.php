
@extends('layouts.main')
@section('title', 'Events HDC')
@section('content')

<div class="container">
    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar">
        </form>
    </div>
    
    <div id="events-container" class="col-md-12">
        <h2>Proximos Eventos</h2>
        <p>Veja os eventos dos proximos dias</p>
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="" alt="">
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection