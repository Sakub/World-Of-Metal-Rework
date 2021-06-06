document.addEventListener('DOMContentLoaded', () => {
    const worstFilter = document.querySelector("#filters__worst")
    const bestFilter = document.querySelector("#filters__best")
    const oldestFilter = document.querySelector("#filters__oldest")
    const newestFilter = document.querySelector("#filters__newest")
    const aZFilter =  document.querySelector("#filters__nameAsc")
    const zAFilter =  document.querySelector("#filters__nameDesc")
    const searchbar = document.querySelector(".filters__searchbar")

    const itemsWrapper = document.querySelector('.content__itemsWrapper')

    const filters = [worstFilter, bestFilter, oldestFilter, newestFilter, aZFilter, zAFilter]

    let itemsNodeList = document.querySelectorAll('.item');
    let searchValue = ''

    function rerenderItems(array, filteredArray) {
        array.forEach(item => item.remove())

        filteredArray.forEach(item => itemsWrapper.appendChild(item))
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
            items = [...itemsNodeList]
            let {name} = filter.dataset
            if (name === 'filters__best') filteredArray = [...itemsNodeList]
            else if (name === 'filters__worst') filteredArray = items.reverse()
            else if (name === 'filters__newest') filteredArray = items.sort((el1, el2) => orderByYear(el2, el1))
            else if (name === 'filters__oldest') filteredArray = items.sort((el1, el2) => orderByYear(el1, el2))
            else if (name === 'filters__nameAsc') filteredArray = items.sort((el1, el2) => orderByName(el1, el2))
            else if (name === 'filters__nameDesc') filteredArray = items.sort((el1, el2) => orderByName(el2, el1))
            
            rerenderItems(items, filteredArray)
        }
    })

    
    searchbar.addEventListener('keydown', event => {
    if (event.key === "Backspace") searchValue = searchValue.slice(0, -1);
    else if (event.key === "Tab" || event.key === "Enter" || event.key === "Shift" || event.key === "Control") return;
    else searchValue += event.key;

    search(searchValue);
    });

    function search(fraze) {
        let items = document.querySelectorAll('.item')

        for (let i = 0; i < items.length; i++) {
            let itemName = items[i].getAttribute('data-name').toLowerCase();

            if (itemName.indexOf(fraze) > -1) items[i].style.display = '';
            else items[i].style.display = 'none';
        }
    }
}) 

