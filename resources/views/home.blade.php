@extends('template')

@section('title', 'Home')

@section('content')
    <main>
        <div class="header">
            <div class="search">
                <input type="text" name="search" id="search" value="">
                <img src="img/search.png" alt="busca">
            </div>

            <select name="year" id="year">
                <option value="ano" disabled selected>Ano</option>
            </select>

            <select name="order" id="order">
                <option value="order" disabled selected>Ordenar</option>
                <option value="newest">Mais recentes</option>
                <option value="oldest">Mais antigos</option>
            </select>
        </div>
        <div class="content"></div>
    </main>
@endsection
@section('javascript')
    <script src="js/home.js"></script>
@endsection