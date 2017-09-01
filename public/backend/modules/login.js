'use strict';
$(document).ready(function() {
    $(window).on("load", function() {
        $('.preloader img').fadeOut();
        $('.preloader').fadeOut(1000);
    });
    new WOW().init();
    $('#login_validator').bootstrapValidator({
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'Usuário é obrigatório.'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Senha é obrigatório.'
                    }
                }
            }
        }
    });

});