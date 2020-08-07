var input = document.getElementById('avatar_input');
input.style.display = "none";
var img = document.getElementById('avatar');

for (let i = 1; i <= 50; i++) {
    let avatar = document.getElementById('avatar' + i);
    let path = 'img/avatar/avatar' + i + '.png';
    avatar.onclick = function(evt){
        input.value = path;
        img.src = path;
    }
}