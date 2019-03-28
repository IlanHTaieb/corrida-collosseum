function hit(target) {
    document.querySelector('#' + target.id + ' form').submit()
}

function home() {
    document.querySelector('.returnhome form').submit()
}

function logout() {
    document.querySelector('.logout form').submit()
}

document.querySelector('.returnhome').addEventListener('click', () => {
    home()
});

document.querySelector('.logout').addEventListener('click', () => {
    logout()
});