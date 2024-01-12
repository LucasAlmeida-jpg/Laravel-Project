@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
<h1>Tela de produtos</h1>

@if($busca != '')
<h3>O usuário esta buscando por {{
     $busca}}</h3>
     @endif
@endSection