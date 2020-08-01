@extends('template')
@section('title', 'Perfil | Baú de Memes')

@section('content')
    <main id="profile">

        <div class="profile-info">
            <img src="img/avatar/018-user-17.png" alt="foto perfil">
            <div>
                <h3>Amanda Moreira</h3>
                <h4>@amandamoreira</h4>
            </div>
            <svg id="edit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 383.9 383.9">
                <polygon points="0 303.9 0 383.9 80 383.9 316.1 147.9 236.1 67.9 "/>
                <path d="M377.7 56.1L327.9 6.2c-8.3-8.3-21.9-8.3-30.2 0l-39 39 80 80 39-39C386 77.9 386 64.4 377.7 56.1z"/>
            </svg>
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

        <article>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/O16uoBap-Vo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4>The Voice Loves Love</h4>
            <div class="date">
                <h6>29/07/2020</h6>
                <h5>2020</h5>
            </div>
            <div class="info">
                <div class="autor">
                    <img src="img/avatar/018-user-17.png" alt="foto de perfil">
                    <p>@amandamoreira</p>
                </div>
                <div class="buttons">
                    <svg id="alert" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M501.4 384L320.5 51.5c-29.1-48.9-99.9-49-129 0L10.6 384c-29.7 50 6.3 113.3 64.5 113.3h361.7C495 497.2 531.1 434 501.4 384zM256 437.2c-16.5 0-30-13.5-30-30 0-16.5 13.5-30 30-30 16.5 0 30 13.5 30 30C286 423.8 272.5 437.2 256 437.2zM286 317.2c0 16.5-13.5 30-30 30 -16.5 0-30-13.5-30-30v-150c0-16.5 13.5-30 30-30 16.5 0 30 13.5 30 30V317.2z"/>
                    </svg>
                    <svg id="heart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M376 30c-27.8 0-53.3 8.8-75.7 26.2 -21.5 16.6-35.9 37.9-44.3 53.3 -8.4-15.4-22.8-36.6-44.3-53.3C189.3 38.8 163.8 30 136 30 58.5 30 0 93.4 0 177.5c0 90.9 72.9 153 183.4 247.1 18.8 16 40 34.1 62.1 53.4C248.4 480.6 252.1 482 256 482s7.6-1.4 10.5-4c22.1-19.3 43.3-37.4 62.1-53.4C439.1 330.5 512 268.4 512 177.5 512 93.4 453.5 30 376 30z"/>
                    </svg>                  
                </div>
            </div>     
        </article>
    </main>
    
@endsection