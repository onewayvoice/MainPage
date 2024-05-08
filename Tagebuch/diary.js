function addEntry() {
    var hours = document.getElementById("stunden").value;
    var user = document.getElementById("username").value;
    var activity = document.getElementById("activity").value;

    if (hours !== "" && user !== "" && activity !== "") {
        var entry = {
            user: user,
            hours: hours,
            activity: activity
        };
        entries.push(entry);
        displayEntries();
    } else {
        alert("Bitte fülle alle Felder aus.");
    }
}

function displayEntries() {
    var entriesContainer = document.getElementById("entriesContainer");
    entriesContainer.style.display = "block";
    var entriesTable = '<table class="entries-table">' +
        '<tr>' +
        '<th>Benutzername</th>' +
        '<th>Stunden</th>' +
        '<th>Tätigkeit</th>' +
        '</tr>';

    for (var i = 0; i < entries.length; i++) {
        entriesTable += '<tr>' +
            '<td>' + entries[i].user + '</td>' +
            '<td>' + entries[i].hours + '</td>' +
            '<td>' + entries[i].activity + '</td>' +
            '</tr>';
    }
    entriesTable += '</table>';
    entriesContainer.innerHTML = entriesTable;
}

