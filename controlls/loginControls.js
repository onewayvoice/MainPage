$(document).ready(function() {
    // Bind the form submit event to our custom function
    $('#formLogin').on('submit', function(e) {
        // Prevent the form from submitting the traditional way
        e.preventDefault();

        // Getting user input
        var username = $('#username').val();
        var password = $('#password').val();

        // Checking credentials
        if(username === 'admin' && password === '1123') {
            // Redirecting to another page if the credentials match
            window.location.href = 'controls.html';
        } else {
            // Optionally, alert the user if the credentials are incorrect
            alert('Falsche Benutzername oder Passwort!');
        }
    });
});
