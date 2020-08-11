var auth_user = document.getElementById('user_id');
var main = document.querySelector('.content');

function getMemes(){

    let headers = new Headers();

    fetch('/favoritecontent/' + auth_user.innerText,{
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

function showMemes(memes){

    var div_erro = document.createElement('div');
    div_erro.setAttribute('class', 'erro-profile');

    var erro = document.createElement('h4');
    erro.innerText = "Ooops! Você ainda não favoritou nenhum meme ):";

    div_erro.append(erro);
    main.appendChild(div_erro);

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
        upload_date.innerText = memes[meme]['upload_date'];
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
        heart.style.fill = '#ed6263';
        var heart_path = document.createElementNS(svgNS, "path");
        heart_path.setAttributeNS(null,"d","M376 30c-27.8 0-53.3 8.8-75.7 26.2 -21.5 16.6-35.9 37.9-44.3 53.3 -8.4-15.4-22.8-36.6-44.3-53.3C189.3 38.8 163.8 30 136 30 58.5 30 0 93.4 0 177.5c0 90.9 72.9 153 183.4 247.1 18.8 16 40 34.1 62.1 53.4C248.4 480.6 252.1 482 256 482s7.6-1.4 10.5-4c22.1-19.3 43.3-37.4 62.1-53.4C439.1 330.5 512 268.4 512 177.5 512 93.4 453.5 30 376 30z");

        heart.appendChild(heart_path);

        div_buttons.append(link_alert);
        div_buttons.append(heart);

        div_info.append(div_buttons);

        article.append(iframe);
        article.append(name);
        article.append(div_date);
        article.append(div_info);

        main.append(article);

        div_erro.style.display = "none";
        
        getActionButton(memes[meme]['id'], memes[meme]['user_id']);
    }

}

function getActionButton(meme_id) {
    var actionButton = document.getElementById('action' + meme_id);

    actionButton.onclick = function(evt){
        document.getElementById(meme_id).style.display = "none";
        removeFromFavorites(meme_id, auth_user.innerText);
    }
}

function removeFromFavorites(meme_id, user_id) {
    var headers = new Headers();
    headers.append('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);
    console.log(headers);

    fetch('/favorite/' + meme_id + '/' + user_id, {
        method: 'DELETE',
        headers: headers
    }).then((data) => {
        console.log(data);
    });
}

getMemes();