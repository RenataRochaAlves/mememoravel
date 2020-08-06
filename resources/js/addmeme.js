function addmeme() {
    let link = document.getElementById('link');
    let name = document.getElementById('name');
    let year = document.getElementById('year');

    let credentials = {
        link: link,
        name: name,
        year: year
    }

    let headers = new Headers();
    headers.append('Content-type', 'application/json');
}