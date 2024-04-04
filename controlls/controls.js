document.addEventListener('DOMContentLoaded', function () {
    var joystick = nipplejs.create({
        zone: document.getElementById('joystick-container'),
        mode: 'static',
        position: {left: '15%', top: '50%'},
        color: 'black',
        size: 140

    });

    joystick.on('move', function (evt, data) {
        if (data.direction) {
            console.log(data.angle.degree); // Zugriff auf den Winkel in Grad
            console.log(data.distance); // Zugriff auf die Entfernung in Prozent
            // Weitere Datenverarbeitung...
        }
    });
});
