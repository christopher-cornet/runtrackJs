$(document).ready(function() {
    $("#button").click(function() {
        fetch('expression.txt')
        .then(response => response.text()) 
        .then(data => {
            document.querySelector("p").innerHTML = data;
        });
    });
});