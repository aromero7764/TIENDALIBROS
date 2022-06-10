//menu hamburguesa

const burguerIcon = document.querySelector('#burguer');
const navBarMenu = document.querySelector('#navMenu');

burguerIcon.addEventListener('click', () => {
    navBarMenu.classList.toggle('is-active')
});

