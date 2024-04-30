var entries = []; // Hier werden die Tagebucheinträge gespeichert

function addEntry() {
    var startDate = document.getElementById("startDate").value;
    var endDate = document.getElementById("endDate").value;
    var activity = document.getElementById("activity").value;

    // Überprüfe, ob alle Felder ausgefüllt sind
    if (startDate !== "" && endDate !== "" && activity !== "") {
        // Erstelle einen neuen Eintrag
        var entry = {
            startDate: startDate,
            endDate: endDate,
            activity: activity
        };

        // Füge den Eintrag zur Liste hinzu
        entries.push(entry);

        // Aktualisiere die Anzeige der Tagebucheinträge
        displayEntries();
    } else {
        alert("Bitte fülle alle Felder aus.");
    }
}

function displayEntries() {
    var entriesContainer = document.getElementById("entriesContainer");
    entriesContainer.style.display = "block";

    // Erzeuge die HTML-Tabelle für die Einträge
    var entriesTable = '<table class="entries-table">' +
        '<tr>' +
        '<th>Benutzername</th>' +
        '<th>Datum Anfang</th>' +
        '<th>Datum Ende</th>' +
        '<th>Tätigkeit</th>' +
        '</tr>';

    // Iteriere durch die Einträge und füge sie zur Tabelle hinzu
    for (var i = 0; i < entries.length; i++) {
        entriesTable += '<tr>' +
            '<td>' + document.getElementById("username").value + '</td>' +
            '<td>' + entries[i].startDate + '</td>' +
            '<td>' + entries[i].endDate + '</td>' +
            '<td>' + entries[i].activity + '</td>' +
            '</tr>';
    }

    entriesTable += '</table>';

    // Setze den HTML-Code in das Container-Element
    entriesContainer.innerHTML = entriesTable;
}
