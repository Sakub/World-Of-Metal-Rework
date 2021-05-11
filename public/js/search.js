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
