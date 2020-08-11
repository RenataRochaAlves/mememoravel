var auth_user = document.getElementById('user_id');
var main = document.querySelector('.content');

function getMemes(){

    let headers = new Headers();

    fetch('/api/memes',{
        method:'get',
        headers: headers
    }).then(
        function(response){
            return response.json();
        }
    ).then(
        function(memes){
            showMemes(memes);
        }
    )
}

function getMemesbyAsc(){

    let headers = new Headers();

    fetch('/memes/asc',{
        method:'get',
        headers: headers
    }).then(
        function(response){
            return response.json();
        }
    ).then(
        function(memes){
            showMemes(memes);
        }
    )
}

function getMemesbyYear(year){

    let headers = new Headers();

    fetch('/memes/' + year,{
        method:'get',
        headers: headers
    }).then(
        function(response){
            return response.json();
        }
    ).then(
        function(memes){
            showMemes(memes);
        }
    )
}

function getMemesbySearch(search){

    let headers = new Headers();

    fetch('/search/' + search,{
        method:'get',
        headers: headers
    }).then(
        function(response){
            return response.json();
        }
    ).then(
        function(memes){
            if(memes.length == 0){
                var div_erro = document.createElement('div');
                div_erro.setAttribute('class', 'erro-profile');

                var erro = document.createElement('h4');
                erro.innerText = "Ooops! Não encontramos nenhum meme com base na sua pesquisa ):";

                div_erro.append(erro);
                main.appendChild(div_erro);
            } else {
                showMemes(memes);
            }
        }
    )
}

function showMemes(memes){

    for (let meme of Object.keys(memes)){
        let article = document.createElement('article');
        article.setAttribute('id', memes[meme]['id']);

        // criando o iframe
        let iframe = document.createElement('iframe');
        iframe.setAttribute('src', memes[meme]['link']);
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('allow', 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture');
        iframe.setAttribute('allowfullscreen', '');

        // criando o título
        let name = document.createElement('h4');
        name.innerText = memes[meme]['name'];

        // criando a div com as datas
        let div_date = document.createElement('div');
        div_date.setAttribute('class', 'date');
        let upload_date = document.createElement('h6');
        let original_date = memes[meme]['upload_date'].split('-');
        upload_date.innerText = original_date[2] + '/' + original_date[1] + '/' + original_date[0];
        let year = document.createElement('h5');
        year.innerText = memes[meme]['year'];
        div_date.append(upload_date);
        div_date.append(year);

        // criando a div com as informações do usuario e botões
        let div_info = document.createElement('div');
        div_info.setAttribute('class', 'info');
        
        let div_autor = document.createElement('div');
        div_autor.setAttribute('class', 'autor');
        let avatar = document.createElement('img');
        avatar.setAttribute('src', memes[meme]['avatar']);
        avatar.setAttribute('alt', memes[meme]['user_name']);
        let username = document.createElement('p');
        username.innerText = '@' + memes[meme]['username'];
        div_autor.append(avatar);
        div_autor.append(username);
        div_info.append(div_autor);

        let div_buttons = document.createElement('div');
        div_buttons.setAttribute('class', 'buttons');

        var svgNS = "http://www.w3.org/2000/svg";

        if(auth_user != null && memes[meme]['user_id'] == auth_user.innerText){
            var remove = document.createElementNS(svgNS, "svg");
            remove.setAttributeNS(null, "id", "action" + memes[meme]['id']);
            remove.setAttributeNS(null, "viewBox", "0 0 512 512");
            var remove_path1 = document.createElementNS(svgNS, "path");
            remove_path1.setAttributeNS(null, "d", "m424 64h-88v-16c0-26.51-21.49-48-48-48h-64c-26.51 0-48 21.49-48 48v16h-88c-22.091 0-40 17.909-40 40v32c0 8.837 7.163 16 16 16h384c8.837 0 16-7.163 16-16v-32c0-22.091-17.909-40-40-40zm-216-16c0-8.82 7.18-16 16-16h64c8.82 0 16 7.18 16 16v16h-96z");
            var remove_path2 = document.createElementNS(svgNS, "path");
            remove_path2.setAttributeNS(null, "d", "m78.364 184c-2.855 0-5.13 2.386-4.994 5.238l13.2 277.042c1.22 25.64 22.28 45.72 47.94 45.72h242.98c25.66 0 46.72-20.08 47.94-45.72l13.2-277.042c.136-2.852-2.139-5.238-4.994-5.238zm241.636 40c0-8.84 7.16-16 16-16s16 7.16 16 16v208c0 8.84-7.16 16-16 16s-16-7.16-16-16zm-80 0c0-8.84 7.16-16 16-16s16 7.16 16 16v208c0 8.84-7.16 16-16 16s-16-7.16-16-16zm-80 0c0-8.84 7.16-16 16-16s16 7.16 16 16v208c0 8.84-7.16 16-16 16s-16-7.16-16-16z");
            remove.appendChild(remove_path1);
            remove.appendChild(remove_path2);

            div_buttons.appendChild(remove);
        } else {
            let link_alert = document.createElement('a');
            link_alert.setAttribute('href', '/denouncememe/' + memes[meme]['id']);

            var alert = document.createElementNS(svgNS,"svg"); 
            alert.setAttributeNS(null,"id","alert");
            alert.setAttributeNS(null,"viewBox", "0 0 512 512");
            var alert_path = document.createElementNS(svgNS, "path");
            alert_path.setAttributeNS(null,"d","M501.4 384L320.5 51.5c-29.1-48.9-99.9-49-129 0L10.6 384c-29.7 50 6.3 113.3 64.5 113.3h361.7C495 497.2 531.1 434 501.4 384zM256 437.2c-16.5 0-30-13.5-30-30 0-16.5 13.5-30 30-30 16.5 0 30 13.5 30 30C286 423.8 272.5 437.2 256 437.2zM286 317.2c0 16.5-13.5 30-30 30 -16.5 0-30-13.5-30-30v-150c0-16.5 13.5-30 30-30 16.5 0 30 13.5 30 30V317.2z");

            alert.appendChild(alert_path);
            link_alert.append(alert);

            var heart = document.createElementNS(svgNS,"svg"); 
            heart.setAttributeNS(null,"id","action" + memes[meme]['id']);
            heart.setAttributeNS(null,"viewBox", "0 0 512 512");
            var heart_path = document.createElementNS(svgNS, "path");
            heart_path.setAttributeNS(null,"d","M376 30c-27.8 0-53.3 8.8-75.7 26.2 -21.5 16.6-35.9 37.9-44.3 53.3 -8.4-15.4-22.8-36.6-44.3-53.3C189.3 38.8 163.8 30 136 30 58.5 30 0 93.4 0 177.5c0 90.9 72.9 153 183.4 247.1 18.8 16 40 34.1 62.1 53.4C248.4 480.6 252.1 482 256 482s7.6-1.4 10.5-4c22.1-19.3 43.3-37.4 62.1-53.4C439.1 330.5 512 268.4 512 177.5 512 93.4 453.5 30 376 30z");

            heart.appendChild(heart_path);

            div_buttons.append(link_alert);
            div_buttons.append(heart);

            if(auth_user != null){
                checkFavorite(memes[meme]['id'], auth_user.innerText);
            }
        }

        div_info.append(div_buttons);

        article.append(iframe);
        article.append(name);
        article.append(div_date);
        article.append(div_info);

        main.append(article);
        
        getActionButton(memes[meme]['id'], memes[meme]['user_id']);
    }
}

function getActionButton(meme_id, user_id) {
    var actionButton = document.getElementById('action' + meme_id);

    actionButton.onclick = function(evt){
        if(auth_user != null && user_id == auth_user.innerText){
            deleteMeme(meme_id);
            var card = document.getElementById(meme_id).style.display = "none";
            console.log('clicou no delete');
        } else if(auth_user != null && auth_user.innerText != user_id){
            addToFavorites(meme_id);
            var svg = document.getElementById('action' + meme_id).style.fill = '#ed6263';
        } else {
            window.location.replace('/erro');
        } 
    }
}

function addToFavorites(id) {
    var headers = new Headers();

    fetch('/favorite/' + id, {
        method: 'GET',
        headers: headers
    })
}

function checkFavorite(meme_id, user_id) {
    var headers = new Headers();

    fetch('/favorite/' + meme_id + '/' + user_id,{
        method:'get',
        headers: headers
    }).then(
        function(response){
            return response.json();
        }
    ).then(
        function(result){
            if(result){
                document.getElementById('action' + meme_id).style.fill = '#ed6263';
            }
            
            return result;
        }
    )
}

function deleteMeme(id) {
    var headers = new Headers();
    headers.append('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);

    fetch('/deletememe/' + id, {
        method: 'DELETE',
        headers: headers
    });
}

var order_select = document.getElementById('order');
order_select.onchange = function(evt){
    main.innerText = '';
    var order = order_select.options[order_select.selectedIndex].value;
    if(order == 'oldest'){
        getMemesbyAsc();
    } else if(order == 'newest'){
        getMemes();
    }
}

function getYears(){
    let headers = new Headers();

    fetch('/getyears',{
        method:'get',
        headers: headers
    }).then(
        function(response){
            return response.json();
        }
    ).then(
        function(years){
            showYears(years);
        }
    );
}

var year_select = document.getElementById('year');
year_select.onchange = function(evt){
    main.innerText = '';
    var year = year_select.options[year_select.selectedIndex].value;
    getMemesbyYear(year);
}

function showYears(years){
    for (let i = 0; i < years.length; i++) {
        let year_option = document.createElement('option');
        year_option.setAttribute('value', years[i]['year']);
        year_option.innerText = years[i]['year'];

        year_select.appendChild(year_option);
    }
}

var search_input = document.getElementById('search');
search_input.onkeypress = function(evt){
    main.innerText = '';
    getMemesbySearch(search_input.value);
}

getYears();

getMemes();