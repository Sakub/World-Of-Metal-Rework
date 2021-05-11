const topArtistsWrapper = document.querySelectorAll('.topArtists__bands');
const navbar = document.querySelector('.navbar');
const ratingStars = document.querySelectorAll('.content__star');

let topArtists = document.querySelectorAll('.topArtists__band');
let topArtistsNumber = topArtists.length;


function setupRatingStars() {
    ratingStars.forEach(ratingStar => {
        ratingStar.addEventListener('click', event => giveRate(event.currentTarget));
    });
}

window.onload = () => {
    if (window.location.pathname != '/') {
        navbar.classList.remove('fixed-top');
        setupRatingStars();
    } else {
        navbarScroll();
        if (topArtistsNumber == 14) {
            [...topArtistsWrapper].forEach(el => {
                el.classList.remove('justify-content-center');
                el.classList.add('justify-content-between');
            });

            [...topArtists].forEach(topArtist => {
                topArtist.classList.remove('mx-2');
            });
        }
    }
}

function giveRate(el) {
    const rate = el.getAttribute("data-rate");
    const starActiveClass = 'content__star--active';

    let reversedRatingStars = [...ratingStars].reverse();

    ratingStars.forEach(rateStar => rateStar.classList.remove(starActiveClass));

    for (let i = 0; i <= rate - 1; i++) reversedRatingStars[i].classList.add(starActiveClass);
}
