@extends('template')
@section('title', 'Perfil | Baú de Memes')

@section('content')
    <main id="profile">

        <div class="profile-info">
            <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
            <div>
                <h3>{{ Auth::user()->name }}</h3>
                <h4>@ {{ Auth::user()->username }} </h4>
            </div>
            <a href="/editprofile">
                <svg id="edit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 383.9 383.9">
                    <polygon points="0 303.9 0 383.9 80 383.9 316.1 147.9 236.1 67.9 "/>
                    <path d="M377.7 56.1L327.9 6.2c-8.3-8.3-21.9-8.3-30.2 0l-39 39 80 80 39-39C386 77.9 386 64.4 377.7 56.1z"/>
                </svg>
            </a>
            
        </div>

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
        <div class="content"></div>
    </main>
@endsection
@section('javascript')
    <script src="js/profile.js"></script>
@endsection