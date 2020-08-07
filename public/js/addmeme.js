var iframe = document.querySelector('iframe');
iframe.style.display = "none";
var link = document.getElementById('link');
var span = document.getElementById('link_div');

function showVideo(key) {
    let embed = "https://www.youtube.com/embed/" + key;

    iframe.src = embed;
    iframe.style.display = "block";
}

link.onchange = function(evt){
    let regexp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]{11}).*/;
    let match = link.value.match(regexp);

    if(match != null && match.length == 3){
        showVideo(match[2]);
        if(document.querySelector('.erro_message')){
            document.querySelector('.erro_message').style.display = "none";
        }
    } else {
        iframe.style.display = "none";
        var erro = document.createElement('span');
        erro.setAttribute('class', 'erro_message');
        erro.style.display = "block";
        erro.innerText = "Formato de link inválido!";

        span.appendChild(erro);
    }
}

