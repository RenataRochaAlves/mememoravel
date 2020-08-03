@extends('template')

@section('title', 'Editar Perfil | Baú de Memes')

@section('content')
<main id="register" class="editprofile">

    <article id="register-card">

        <h3>Editar Perfil</h3>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row">
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nome">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Nova Senha">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmação de Senha">
                </div>
            </div>
            
            <div class="form-group row">
                <div class="edit-avatar">
                    <p>Alterar Avatar</p>
                    <img id="avatar" src="img/avatar/avatar18.png" alt="foto perfil">
                </div>
                <div class="avatars">
                    @for($i = 1; $i <= 50; $i++)
                        <img id="avatar{{ $i }}" src="img/avatar/avatar{{ $i }}.png" alt="avatar">
                    @endfor
                </div>
            </div>


            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Enviar
                    </button>
                </div>
            </div>
        </form>
    </article>
</main>

@endsection
