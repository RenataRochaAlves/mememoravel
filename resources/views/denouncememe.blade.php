@extends('template')

@section('title', 'Denunciar Meme | Baú de Memes')

@section('content')

<main id="register" class="editprofile">

    <article id="register-card">

        <h3>Denunciar {{ $meme->name }}</h3>

        <form class="denounce" method="POST" action="/denouncememe/{{ $meme->id }}">
            @csrf

            <iframe width="560" height="315" src="{{ $meme->link }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
            <h4>Selecione um ou mais motivos para a sua denúncia:</h4>
            <div>
                <input type="checkbox" id="spam" name="spam" value="spam">
                <label for="spam">Esse post é Spam</label><br>
            </div>
            <div>
               <input type="checkbox" id="nudity" name="nudity" value="nudity">
                <label for="nudity">O conteúdo apresenta nudez</label><br> 
            </div>
            <div>
                <input type="checkbox" id="violence" name="violence" value="violence">
                <label for="violence">O conteúdo apresenta violência</label><br>  
            </div>
            <div>
               <input type="checkbox" id="hate" name="hate" value="hate">
                <label for="hate">Apresenta discurso de ódio (racismo, homofobia, sexismo, entre outros)</label><br> 
            </div>
            <div>
               <input type="checkbox" id="suicide" name="suicide" value="suicide">
                <label for="suicide">Manifesta intenções de suicídio ou automutilação</label><br> 
            </div>
            <div>
                <input type="checkbox" id="other" name="other" value="other">
                <label for="other">Outro motivo:</label><br>
                <input type="text" id="text_other" name="text_other" placeholder="Escreva aqui o motivo da sua denúncia"><br>
            </div>
            
            <p>Sua denúncia ajuda o Baú de Memes a continuar seguro e divertido para todo mundo :)</p>

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
