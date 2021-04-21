const topArtistsWrapper = document.querySelector('.topArtists__bands');
const searchbar = document.querySelector('.filters__searchbar');
const navbar = document.querySelector('.navbar');
const ratingStars = document.querySelectorAll('.content__star');

let searchValue = '';
let topArtists = document.querySelectorAll('.topArtists__band');
let topArtistsNumber = topArtists.length;


function setupRatingStars() {
    ratingStars.forEach(ratingStar => {
        ratingStar.addEventListener('click', event => {
            giveRate(event.currentTarget)
        });
    })
}

window.onload = () => {
    if (window.location.pathname != '/') {
        navbar.classList.remove('fixed-top');
        setupRatingStars();
    } else {
        if (topArtistsNumber == 7) {
            topArtistsWrapper.classList.remove('justify-content-center');
            topArtistsWrapper.classList.add('justify-content-between');

            topArtists.forEach(topArtist => {
                topArtist.classList.remove('mx-2');
            });
        }
    }
}

searchbar.addEventListener('keydown', event => {
    if (event.key === "Backspace") {
        searchValue = searchValue.slice(0, -1);
    } else if (event.key === "Tab" || event.key === "Enter" || event.key === "Shift" || event.key === "Control") {
        return;
    } else {
        searchValue += event.key;
    }
    search(searchValue);

});


function getItems() {
    let items;

    if (window.location.pathname == '/bands') items = document.querySelectorAll('.band');
    if (window.location.pathname == '/albums') items = document.querySelectorAll('.album');

    return items;
}

function search(fraze) {
    let items = getItems();

    for (let i = 0; i < items.length; i++) {
        let itemName = items[i].getAttribute('data-name').toLowerCase();

        if (itemName.indexOf(fraze) > -1) items[i].style.display = '';
        else items[i].style.display = 'none';
    }
}

function giveRate(el) {
    const rate = el.getAttribute("data-rate");
    const starActiveClass = 'content__star--active';
    
    let reversedRatingStars = [...ratingStars].reverse();
    
    ratingStars.forEach(rateStar => rateStar.classList.remove(starActiveClass));

    for (let i = 0; i <= rate - 1; i++) reversedRatingStars[i].classList.add("content__star--active");
}
