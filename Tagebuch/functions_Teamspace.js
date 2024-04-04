function toggle_Teamspace() {
    let diary = document.getElementById("Diary-part");
    let control = document.getElementById("Control-part");

    if(diary.style.display === "none"){
        diary.style.display = "block";
        control.style.display = "none";
    }else{
        diary.style.display = "none";
        control.style.display = "flex";
    }
}


function logout(){
    if(document.getElementById("Diary-part").style.display === "none"){
        toggle_Teamspace();
    }
    console.log("log out");
    $("#loginForm").show();
    $("#userEntries").hide();
    document.getElementById("username").value = "";
    document.getElementById("password").value = "";
}


$(document).ready(function(){
    $("#formLogin").on('submit', function(e){
        e.preventDefault(); // Verhindert das Neuladen der Seite
        $.ajax({
            type: "POST",
            url: "../Tagebuch/Form_login.php", // Der Pfad zum PHP-Skript, das die Anmeldung verarbeitet
            data: $(this).serialize(),
            success: function(response){
                // Die Antwort des Servers verarbeiten
                var jsonData = JSON.parse(response);

                if (jsonData.success === 1) {
                    $("#loginForm").hide();
                    $("#userEntries").show();
                    $("#entries").html(jsonData.entries);
                    document.getElementById("welcomeText").innerText = "Welcome, " + document.getElementById("username").value;
                } else {
                    alert("Falsche Anmeldedaten.");
                }
            }
        });
    });
});

function openAddEntry(){
    document.getElementById('Teamspace_Base_View').style.display = 'none';
    document.getElementById('Teamspace_Entry_View').style.display = 'block';
}
function openEditEntry(id, as, beschreibung, datum){
    document.getElementById('Teamspace_Base_View').style.display = 'none';
    document.getElementById('Teamspace_editEntry').style.display = 'block';
    document.getElementById('editEintragID').value = id;
    document.getElementById('editEntryBeschreibung').value = beschreibung;
    document.getElementById('editEntryAs').value = as;
    document.getElementById('editEntryDatum').value = datum;
    return true;
}
function closeAddEntry(){
    document.getElementById('Teamspace_Base_View').style.display = 'block';
    document.getElementById('Teamspace_Entry_View').style.display = 'none';
}
function closeEditEntry(){
    document.getElementById('Teamspace_Base_View').style.display = 'block';
    document.getElementById('Teamspace_editEntry').style.display = 'none';
}

// Multiple "on Submit" functions to react to certain buttons
$(document).ready(function(){
    $('#Teamspace_addEntry').on('submit', function(e){
        e.preventDefault(); // Verhindert das Neuladen der Seite
        $.ajax({
            type: 'POST',
            url: '../Tagebuch/Form_addEntry.php', // Der Pfad zum PHP-Skript, das die Anmeldung verarbeitet
            data: $(this).serialize(),
            success: function(response){
                // Die Antwort des Servers verarbeiten
                console.log(response);

                var jsonData = JSON.parse(response);

                if (jsonData.success === 1) {
                    $('#entries').html(jsonData.entries);
                    closeAddEntry();
                } else {
                    alert('Fehler im AddEntry Form');
                }
            }
        });
    });
});
$(document).ready(function(){
    $('#Teamspace_editEntryForm').on('submit', function(e){
        e.preventDefault(); // Verhindert das Neuladen der Seite
        $.ajax({
            type: 'POST',
            url: '../Tagebuch/Form_editEntry.php', // Der Pfad zum PHP-Skript, das die Anmeldung verarbeitet
            data: $(this).serialize(),
            success: function(response){
                // Die Antwort des Servers verarbeiten

                var jsonData = JSON.parse(response);

                if (jsonData.success === 1) {
                    $('#entries').html(jsonData.entries);
                    closeEditEntry();
                } else {
                    alert('Fehler im editEntry Form');
                }
            }
        });
    });
});
$(document).ready(function(){
    $('#Teamspace_PrevPage').on('submit', function(e){
        e.preventDefault(); // Verhindert das Neuladen der Seite
        $.ajax({
            type: 'POST',
            url: '../Tagebuch/Form_PrevPage.php', // Der Pfad zum PHP-Skript, das die Anmeldung verarbeitet
            data: $(this).serialize(),
            success: function(response){
                // Die Antwort des Servers verarbeiten

                var jsonData = JSON.parse(response);

                if (jsonData.success === 1) {
                    $('#entries').html(jsonData.entries);
                    closeAddEntry();
                } else {
                    alert('Fehler im PrevPage Form');
                }
            }
        });
    });
});
$(document).ready(function(){
    $('#Teamspace_NextPage').on('submit', function(e){
        e.preventDefault(); // Verhindert das Neuladen der Seite
        $.ajax({
            type: 'POST',
            url: '../Tagebuch/Form_NextPage.php', // Der Pfad zum PHP-Skript, das die Anmeldung verarbeitet
            data: $(this).serialize(),
            success: function(response){
                // Die Antwort des Servers verarbeiten

                var jsonData = JSON.parse(response);

                if (jsonData.success === 1) {
                    $('#entries').html(jsonData.entries);
                    closeAddEntry();
                } else {
                    alert('Fehler im PrevPage Form');
                }
            }
        });
    });
});
$(document).ready(function(){
    $('.deleteForm').on('submit', function(e){
        e.preventDefault(); // Verhindert das Neuladen der Seite
        $.ajax({
            type: 'POST',
            url: '../Tagebuch/Form_deleteEntry.php', // Der Pfad zum PHP-Skript, das die Anmeldung verarbeitet
            data: $(this).serialize(),
            success: function(response){
                // Die Antwort des Servers verarbeiten

                var jsonData = JSON.parse(response);

                if (jsonData.success === 1) {
                    $('#entries').html(jsonData.entries);
                } else {
                    alert('Fehler im DeleteEntry Form');
                }
            }
        });
    });
});