var auth_user = document.getElementById('user_id');
var main = document.querySelector('.content');

function getMemes(){

    let headers = new Headers();

    fetch('/profilecontent/' + auth_user.innerText,{
        method:'get',
        headers: headers
    }).then(
        function(response){
            return response.json();
        }
    ).then(
        function(memes){
            console.log(memes);
            showMemes(memes);
        }
    )
}

function showMemes(memes){

    var div_erro = document.createElement('div');
    div_erro.setAttribute('class', 'erro-profile');

    var erro = document.createElement('h4');
    erro.innerText = "Ooops! Você ainda não possui nenhum meme cadastrado ):";

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
        deleteMeme(meme_id);
        document.getElementById(meme_id).style.display = "none";
    }
}

function deleteMeme(id) {
    var headers = new Headers();
    headers.append('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);

    fetch('/deletememe/' + id, {
        method: 'DELETE',
        headers: headers
    });
}

getMemes();