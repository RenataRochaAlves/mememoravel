@extends('template')

@section('title', 'Sobre')

@section('content')
<main id="register" class="editprofile info-page">

    <article id="register-card">
        <img src="img/logo.png" alt="mememorável">
        <h3>Sobre o mememorável</h3>

        <p>Sabe quando você procura incessantemente por um meme e não encontra por nada? Ou quando quer saber quais memes bombaram no último ano mas não encontra esse registro em lugar nenhum? Seus problemas acabaram!</p>
        <p>O mememorável está aqui para garantir a sua diversão, seja pra te atualizar com o que está rolando na internet ou para te fazer rir com memes que você já nem se lembrava mais, tudo isso enquanto registra essa parte tão importante da nossa cultura desde a época dos monitores de tubão.</p>
        <p>Aqui você pode encontrar memes de todos os tipos na Home, filtrá-los pelo ano em que surgiram ou pela data de publicação na plataforma, colaborar com a comunidade ao publicar novos memes, denunciar publicações inadequadas e favoritar memes para nunca mais perdê-los por aí!</p>
        <p>E para os desenvolvedores que quiserem consumir a nossa API e ter acesso ao nosso banco de dados colaboratiro é bem simples, só mandar sua requisição para:</p>
        <h4>mememoravel.herokuapp.com/api/memes</h4>
        <p>É isso, divirtam-se!</p>

        <h3>Sobre a desenvolvedora</h3>
        <div class="dev">
            <div class="dev-info">
                <img src="img/avatar/avatar6.png" alt="Renata Rocha">
                <p>Vamos nos conectar?</p>
                <div id="bio-icons">
                    <a href="https://www.linkedin.com/in/renata-rocha-alves/" target="_blank">
                        <svg id="linkedin" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="m256 0c-141.363281 0-256 114.636719-256 256s114.636719 256 256 256 256-114.636719 256-256-114.636719-256-256-256zm-74.390625 387h-62.347656v-187.574219h62.347656zm-31.171875-213.1875h-.40625c-20.921875 0-34.453125-14.402344-34.453125-32.402344 0-18.40625 13.945313-32.410156 35.273437-32.410156 21.328126 0 34.453126 14.003906 34.859376 32.410156 0 18-13.53125 32.402344-35.273438 32.402344zm255.984375 213.1875h-62.339844v-100.347656c0-25.21875-9.027343-42.417969-31.585937-42.417969-17.222656 0-27.480469 11.601563-31.988282 22.800781-1.648437 4.007813-2.050781 9.609375-2.050781 15.214844v104.75h-62.34375s.816407-169.976562 0-187.574219h62.34375v26.558594c8.285157-12.78125 23.109375-30.960937 56.1875-30.960937 41.019531 0 71.777344 26.808593 71.777344 84.421874zm0 0" fill="#ed6263"/>
                        </svg>
                    </a>
                    <a href="https://github.com/RenataRochaAlves" target="_blank">
                        <svg id="github" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M256 5.3C114.6 5.3 0 120.4 0 262.4c0 113.5 73.3 209.9 175.1 243.9 12.8 2.4 17.5-5.6 17.5-12.4 0-6.1-0.2-22.3-0.4-43.7 -71.2 15.5-86.2-34.5-86.2-34.5 -11.6-29.7-28.4-37.6-28.4-37.6 -23.3-15.9 1.7-15.6 1.7-15.6 25.7 1.8 39.2 26.5 39.2 26.5 22.8 39.3 59.9 27.9 74.5 21.3 2.3-16.6 8.9-27.9 16.3-34.4 -56.8-6.5-116.6-28.5-116.6-127 0-28.1 10-51 26.4-69 -2.7-6.5-11.4-32.6 2.5-68 0 0 21.5-6.9 70.4 26.3 20.4-5.7 42.3-8.5 64.1-8.6 21.7 0.1 43.6 2.9 64.1 8.7 48.9-33.2 70.3-26.3 70.3-26.3 14 35.4 5.2 61.5 2.6 68 16.4 18 26.3 40.9 26.3 69 0 98.7-59.8 120.4-116.9 126.8 9.2 7.9 17.4 23.6 17.4 47.6 0 34.4-0.3 62.1-0.3 70.5 0 6.9 4.6 14.9 17.6 12.4C438.7 472.1 512 375.9 512 262.4 512 120.4 397.4 5.3 256 5.3z" fill="#f7c65c"/>
                        </svg>
                    </a>
                    <a href="https://www.behance.net/renatarochaalves" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112.2 112.2">
                        <circle cx="56.1" cy="56.1" r="56.1" fill="#6fd19d"/>
                        <path d="M76.2 46.3c-16.2 0-16.2 16.1-16.2 16.2 0 0-1.1 16.2 16.2 16.2 0 0 14.5 0.8 14.5-11.2h-7.4c0 0 0.2 4.5-6.8 4.5 0 0-7.4 0.5-7.4-7.3h21.9C90.9 64.7 93.3 46.3 76.2 46.3zM69 59c0 0 0.9-6.5 7.4-6.5 6.5 0 6.4 6.5 6.4 6.5H69zM50.4 54.9c0 0 6.4-0.5 6.4-8 0-7.5-5.3-11.2-11.9-11.2H22.9v42.3h22c0 0 13.4 0.4 13.4-12.5C58.3 65.4 58.9 54.9 50.4 54.9zM32.6 43.1h12.3c0 0 3 0 3 4.4s-1.7 5-3.7 5H32.6V43.1zM44.3 70.3h-11.7v-11.3h12.3c0 0 4.5 0 4.4 5.8C49.3 69.8 46 70.3 44.3 70.3zM67.1 38.1v5.2h17.4v-5.2H67.1z" fill="#34434d"/>
                        </svg>

                    </a>
                </div>
            </div>
            <div>
                <p id="bio">
                    Oi! Meu nome é Renata Rocha, sou uma desenvolvedora Web Full Stack e cada dia mais apaixonada pela área 
                    de tecnologia. Minha missão é tirar invenções do mundo das ideias para a vida real, comecei fazendo isso 
                    através da Moda e do Design, o que me ensinou muito não só sobre estética mas, principalmente, sobre 
                    colocar o usuário final em primeiro lugar e buscar ajudá-lo aonde o calo mais aperta. No meio do caminho
                    topei com a tecnologia e os meus olhos brilharam. Nos últimos meses resolvi me jogar de cabeça e adquiri 
                    habilidades em PHP, Laravel, JavaScript, MySQL, HTML e CSS e usei todas elas para dar vida ao mememorável,
                    espero que gostem!
                </p>
                
            </div>
        </div>
    </article>
</main>

@endsection
