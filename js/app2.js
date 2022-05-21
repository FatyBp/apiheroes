$(document).ready(function() {
    let info = "hola";

    $.ajax({
        type: "POST",
        data: "informacion" + info,
        url: "./server.php",
        success: function(respuesta) {
            console.log(respuesta);
        }
    })
});