@extends('template')

@section('title', 'Home | Baú de Memes')

@section('content')
    <main>
        <div class="header">
            <div class="search">
                <input type="text" name="search" id="search" value="">
                <img src="img/search.png" alt="busca">
            </div>

            <select name="year" id="year">
                <option value="ano" disabled selected>Ano</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
            </select>

            <select name="order" id="order">
                <option value="order" disabled selected>Ordenar</option>
                <option value="newest">Mais recentes</option>
                <option value="oldest">Mais antigos</option>
                <option value="mostLiked">Mais curtidos</option>
                <option value="lessLiked">Menos curtidos</option>
            </select>
        </div> 
    </main>
@endsection
@section('javascript')
    <script src="js/home.js"></script>
@endsection