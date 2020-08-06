var iframe = document.querySelector('iframe').style.display = "none";
var link = document.getElementById('link');

function showVideo(key) {
    let embed = "https://www.youtube.com/embed/" . key;
    
    iframe.style.display = "block";
    iframe.src = embed;
}

link.onchange = function(evt){
    let regexp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]{11}).*/;
    let match = link.value.match(regexp);

    if(match != null && match.length == 3){
        console.log('pelo menos ate aqui deu certo')
        // showVideo(match[2]);
    } else {
        console.log('formato errado');
    }
}

