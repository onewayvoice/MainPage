function scrollToBottom() {
    // Button at beginning, Scroll to the bottom of the page
    window.scrollTo({
        top: document.body.scrollHeight,
        behavior: 'smooth'
    });
}

window.onload = function() {
    //whole window
    let modal = document.getElementById('privacy-modal');
    // the two buttons
    let acceptBtn = document.getElementById('accept');
    let declineBtn = document.getElementById('decline');


    // kontrolliert ob das cookie "meinCookie" gesetzt ist und gleich
    if (document.cookie.split(';').some((item) => item.trim().startsWith('meinCookie='))) {
        // cookie existiert
        modal.style.display = "none";
    } else {
        // cookie existiert nicht
        modal.style.display = "block";
    }

    acceptBtn.onclick = function() {
        console.log("test");
        // cookie wird gesetzt
        // Ein neues Ablaufdatum für das Cookie festlegen
        const expirationDate = new Date();
        expirationDate.setDate(expirationDate.getDate() + 7); // Beispiel: Cookie läuft in 7 Tagen ab

        // Cookie erstellen
        document.cookie = 'meinCookie=wert; expires=' + expirationDate.toUTCString() + '; path=/';

        console.log('Ein neues Cookie wurde für das nächste Mal erstellt.');
        modal.style.display = "none";
    }

    declineBtn.onclick = function() {
        modal.style.display = "none";
        alert('Sie müssen die Datenschutz akzeptieren, um die Website nutzen zu können.');
        window.location.href = 'about:blank';
    }
};
