document.getElementById("hoursForm").addEventListener("submit", function(e) {
e.preventDefault();
const formData = new FormData(this);
fetch("addeintrag.php", {
    method: "POST",
    body: formData,
})
    .then(response => response)
    .then(data => {
        console.log(data);
    })
    .catch(error => console.error("Fehler:", error));
});