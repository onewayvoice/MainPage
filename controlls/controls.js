document.addEventListener('DOMContentLoaded', function () {
    var joystick = nipplejs.create({
        zone: document.getElementById('joystick-container'),
        mode: 'static',
        position: {left: '15%', top: '50%'},
        color: 'black',
        size: 140

    });
    let x= 0;
    let y = 0;

    function sendJoystickData(x, y) {
        // Construct the JSON payload
        const payload = {
            x: x,
            y: y
        };

        // Send the JSON payload to the server
        fetch('/move', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(payload),
        })
            .then(response => response.json())
            .then(data => console.log('Success:', data))
            .catch((error) => {
                console.error('Error:', error);
            });
    }

    joystick.on('move', function (evt, data) {
        if (data.direction) {
            console.log(data.angle.degree); // Access the angle in degrees
            console.log(data.distance); // Access the distance as a percentage

            // Calculate x and y values
            let angleInRadians = data.angle.degree * (Math.PI / 180); // Convert angle to radians
            let distance = data.distance / 100; // Assuming distance is provided as a percentage of the max distance
            x = Math.cos(angleInRadians) * distance;
            y = Math.sin(angleInRadians) * distance;

            console.log(`x: ${x}, y: ${y}`); // Log calculated x and y values
            sendJoystickData(x, y);

            // Further data processing...
        }
    });
    joystick.on('end', function () {
        // Resetting x and y to 0 when the joystick is not moving
        x = 0;
        y = 0;
        console.log('Joystick has been released. X and Y reset to 0.');
        sendJoystickData(0, 0);
    });

});