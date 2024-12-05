// Funkcia na zmenu pozadia pri prechode myšou
function changeBackground(imageUrl) {
    const section = document.getElementById('see-my-work');
    if (section) {
        section.style.backgroundImage = `url(${imageUrl})`;
    }
}

// Defaultné pozadie pri načítaní stránky
window.onload = function() {
    // img/svadobna.jpg
    changeBackground('img/svadobna.jpg');
};
