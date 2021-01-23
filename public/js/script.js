const topArtistsWrapper = document.querySelector('.topArtists__bands');

let topArtists = document.querySelectorAll('.topArtists__band');
let topArtistsNumber = topArtists.length;

if (topArtistsNumber == 7) {
    topArtistsWrapper.classList.remove('justify-content-center');
    topArtistsWrapper.classList.add('justify-content-between');

    topArtists.forEach(topArtist => {
        topArtist.classList.remove('mx-2');
    });
}