<<<<<<< HEAD
document.addEventListener('DOMContentLoaded', () => {
    const worstFilter = document.querySelector("#filters__worst")
    const bestFilter = document.querySelector("#filters__best")
    const oldestFilter = document.querySelector("#filters__oldest")
    const newestFilter = document.querySelector("#filters__newest")
    const aZFilter =  document.querySelector("#filters__nameAsc")
    const zAFilter =  document.querySelector("#filters__nameDesc")
    
    const albumsWrapper = document.querySelector('.content__bandsWrapper')

    const filters = [worstFilter, bestFilter, oldestFilter, newestFilter, aZFilter, zAFilter];

    let albumsNodeList = document.querySelectorAll('.band');

    function rerenderItems(array, filteredArray) {
        array.forEach(item => item.remove())

        filteredArray.forEach(item => albumsWrapper.appendChild(item))
    }
    function orderByName(el1, el2) {
        return el1.dataset.name.localeCompare(el2.dataset.name)
    }
    function orderByYear(el1, el2) {
        if (!el1.dataset.releasedYear && !el2.dataset.releasedYear) return el1.dataset.createdYear - el2.dataset.createdYear
        else return el1.dataset.releasedYear - el2.dataset.releasedYear
    }

    filters.forEach(filter => {
        filter.onclick = () => {
            albums = [...albumsNodeList]
            let {name} = filter.dataset
            if (name === 'filters__best') filteredArray = [...albumsNodeList]
            else if (name === 'filters__worst') filteredArray = albums.reverse()
            else if (name === 'filters__newest') filteredArray = albums.sort((el1, el2) => orderByYear(el2, el1))
            else if (name === 'filters__oldest') filteredArray = albums.sort((el1, el2) => orderByYear(el1, el2))
            else if (name === 'filters__nameAsc') filteredArray = albums.sort((el1, el2) => orderByName(el1, el2))
            else if (name === 'filters__nameDesc') filteredArray = albums.sort((el1, el2) => orderByName(el2, el1))
            
            rerenderItems(albums, filteredArray)
        }
    })
}) 
=======
const searchbar = document.querySelector(".filters__searchbar");
console.log(searchbar)
let searchValue = '';
searchbar.addEventListener('keydown', event => {
    console.log("dupa")
    if (event.key === "Backspace") searchValue = searchValue.slice(0, -1);
    else if (event.key === "Tab" || event.key === "Enter" || event.key === "Shift" || event.key === "Control") return;
    else searchValue += event.key;

    search(searchValue);
});

function getItems() {
    let items;

    if (window.location.pathname == '/bands') items = document.querySelectorAll('.band');
    if (window.location.pathname == '/albums') items = document.querySelectorAll('.band');

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
>>>>>>> searchView
