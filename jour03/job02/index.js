$(document).ready(function() {
    // Images can no longer be moved other than by clicking
    $("img").attr('draggable', false);

    // If image is clicked, move image to the first container
    $("#arc1-c2").click(function() {
        $("#arc1-c2").appendTo("#arc1");
    });
    $("#arc2-c2").click(function() {
        $("#arc2-c2").appendTo("#arc1");
    });
    $("#arc3-c2").click(function() {
        $("#arc3-c2").appendTo("#arc1");
    });
    $("#arc4-c2").click(function() {
        $("#arc4-c2").appendTo("#arc1");
    });
    $("#arc5-c2").click(function() {
        $("#arc5-c2").appendTo("#arc1");
    });
    $("#arc6-c2").click(function() {
        $("#arc6-c2").appendTo("#arc1");
    });
    

    function mix() {

    }

    function result() {
        // “Vous avez gagné”
        // “Vous avez perdu”
    }

});

// print vous avez perdu

// i=0
// si image1 == position1
// i++

// si image2 == position2
// i++

// si image3 == position3
// i++

// si image4 == position4
// i++

// si image5 == position5
// i++

// si image6 == position6
// i++

// si i === 6
// print vous avez gagné