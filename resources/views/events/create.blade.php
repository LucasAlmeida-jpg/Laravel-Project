@extends('layouts.main')

@section('title', 'Crie um evento')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Nome do titulo">
        </div>

        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="Local do evento">
        </div>

        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select class="form-control" name="private" id="private">
                <option value="0">Nao</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <div class="form-group">
            <label for="title">Descricao:</label>
            <textarea name="description" id="description" class="form-control" cols="30" rows="10" placeholder="o que é o evento?"></textarea>
        </div>

        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>
@endSection