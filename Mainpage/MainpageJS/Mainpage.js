function scrollToBottom() {
    // Scroll to the bottom of the page
    window.scrollTo({
        top: document.body.scrollHeight,
        behavior: 'smooth'
    });
}

window.onload = function() {
    let modal = document.getElementById('privacy-modal');
    let acceptBtn = document.getElementById('accept');
    let declineBtn = document.getElementById('decline');

    modal.style.display = "block";

    acceptBtn.onclick = function() {
        modal.style.display = "none";
    }

    declineBtn.onclick = function() {
        modal.style.display = "none";
        alert('Sie müssen die Datenschutz akzeptieren, um die Website nutzen zu können.');
        window.location.href = 'about:blank';
    }
};
