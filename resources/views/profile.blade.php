@extends('template')
@section('title', 'Perfil')

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

        <div class="title-profile">
            <h3>Memes Cadastrados</h3>
        </div>

        <div class="content"></div>
    </main>
@endsection
@section('javascript')
    <script src="js/profile.js"></script>
@endsection