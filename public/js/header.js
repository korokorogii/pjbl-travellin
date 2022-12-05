const navbar = document.getElementsByTagName('nav')[0];
window.addEventListener('scroll', function () {
    if (window.scrollY > 1) {
        navbar.classList.replace('bg-self', 'bg-hitam');
    }
    else if (this.window.scrollY <= 0) {
        navbar.classList.replace('bg-hitam', 'bg-self');
    }
})
if (window.matchMedia("(max-width: 1200px)").matches) {
    navbar.classList.replace('bg-self', 'bg-hitam');
} else if (window.matchMedia("(min-width: 1200px)").matches) {
    navbar.classList.replace('bg-hitam', 'bg-self');
}
;