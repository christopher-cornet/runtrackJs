let laplateforme = {
    "name" : "La Plateforme_",
    "address" : "8 rue d'hozier",
    "city" : "Marseille",
    "nb_staff" : "11",
    "creation" : "2019"
}

function jsonValueKey(json) {

}

$(document).ready(function() {
    $("#button").click(function() {
        jsonValueKey(laplateforme);
    });
});