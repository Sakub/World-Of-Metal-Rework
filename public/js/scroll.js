window.onscroll = () => navbarScroll();

function navbarScroll() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 10) navbar.classList.add('bg-sub');
    else navbar.classList.remove('bg-sub');
}
