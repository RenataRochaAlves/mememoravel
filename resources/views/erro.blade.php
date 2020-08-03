@extends('template')

@section('title', 'Denunciar Meme | Baú de Memes')

@section('content')
<main id="register" class="editprofile add meme">

    <article id="register-card" class="erro">

        <h3>Ooops!</h3>

        <p>Você precisa estar logada(o) para continuar</p>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <a href="/login">
                        <button class="btn btn-primary">
                            Fazer login
                        </button>
                    </a>
                </div>
            </div>
        <a href="/register">Ou cadastre-se!</a>
    </article>
</main>

@endsection
