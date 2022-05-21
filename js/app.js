$(document).ready(function() {
    $.ajax({
        type: "GET",
        url: "all.json",
        success: function(respuesta) {
            let complemento = [];
            for (let i = 0; i < respuesta.length; + i++) {
                // console.log(respuesta[i].id);
                // console.log(respuesta[i].name);
                // console.log(respuesta[i].slug);
                let nombre = respuesta[i].name;
                let slug = respuesta[i].slug;
                let imagen = respuesta[i].images.sm;
                complemento += `${nombre},${slug},${imagen}||`;
            }
            $.ajax({
                type: "POST",
                data: "heroes=" + complemento,
                url: "server.php",
                success: function(resultado) {
                    if (resultado == 1) {
                        console.log('%cSe guardo con exito a la base de datos', 'color:#00ff00;font-size:25px;')
                    } else {
                        console.log('%cError al guardar', 'color:#ff0000;font-size:25px;')
                    }
                }
            });
        }
    });
})