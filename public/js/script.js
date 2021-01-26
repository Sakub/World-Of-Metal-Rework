const topArtistsWrapper = document.querySelector('.topArtists__bands');
const searchbar = document.querySelector('.filters__searchbar');

let searchValue = '';
let topArtists = document.querySelectorAll('.topArtists__band');
let topArtistsNumber = topArtists.length;

if (topArtistsNumber == 7) {
    topArtistsWrapper.classList.remove('justify-content-center');
    topArtistsWrapper.classList.add('justify-content-between');

    topArtists.forEach(topArtist => {
        topArtist.classList.remove('mx-2');
    });
}

searchbar.addEventListener('keydown', event => {
    if (event.key === "Backspace") {
        searchValue = searchValue.slice(0, -1);
    } else if (event.key === "Tab" || event.key === "Enter") {
        return;
    } else {
        searchValue += event.key;
    }
    search(searchValue);
});

function search(fraze) {
    let items;
    if (window.location.pathname == '/bands')  items = document.querySelectorAll('.band');
    if (window.location.pathname == '/albums') items = document.querySelectorAll('.album');
    
    for(let i=0; i<items.length; i++) {
        let itemName = items[i].getAttribute('data-name').toLowerCase();
        if (itemName.indexOf(fraze) > -1) {
            items[i].style.display = '';
        } else {
            items[i].style.display = 'none';
        }
    }
}