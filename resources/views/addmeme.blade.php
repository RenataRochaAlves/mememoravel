@extends('template')

@section('title', 'Cadastrar Meme | Baú de Memes')

@section('content')
<main id="register" class="editprofile add meme">

    <article id="register-card">

        <h3>Cadastrar Meme</h3>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/O16uoBap-Vo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <form method="POST" action="/addmeme">
            @csrf

            <div class="form-group row">
                <div id="link_div" class="col-md-6">
                    <input id="link" type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" required autocomplete="link" autofocus placeholder="Link do vídeo">

                    @error('link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nome do meme">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <input id="year" type="number" class="form-control @error('year') is-invalid @enderror" name="year" required autocomplete="year" placeholder="Ano do meme">

                    @error('year')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <input id="user_id" name="user_id" type="text" value="{{ Auth::user()->id }}">

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

@section('javascript')
    <script src="js/addmeme.js"></script>
@endsection
