// Function to change the background when hovering over different sections
function changeBackground(imageUrl) {
    document.getElementById('see-my-work').style.backgroundImage = 'url(' + imageUrl + ')';
}

window.onload = function() {
    changeBackground('img/svadobna.jpg'); // Default background when the page loads
};


