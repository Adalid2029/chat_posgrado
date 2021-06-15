$(function() {
    'use strict'
    let idcontacto = $('#idcontacto').val();
    setInterval(() => {
        $.ajax({
            type: "get",
            url: base_url + "/mensaje/chatjquery/" + idcontacto,
            dataType: "json",
            success: function(data) {
                console.log(data);
                if (data.msj) {
                    let html = '<div class="received_withd_msg">' +
                        '<div class="received_msg">' +
                        '<p>' + data.msj.mensaje + '<br>' + data.msj.fecha + '</p>' +
                        '</div></div>'
                    $('#bandeja').append(html);


                }
            }
        });
    }, 1500);
})