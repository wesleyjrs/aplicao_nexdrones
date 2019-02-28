$(document).ready(function(){
    $("#cpf").keyup(function (e) {

        var cpf = $(this).val(); 

        $.post('inc/inc.valida.php', {'cpf':cpf}, function(data) {

        	$("#erro").html(data); 

        });

    });
});

$(document).ready(function(){
    $("#rg").keyup(function (e) {

        var rg = $(this).val(); 

        $.post('inc/inc.valida.php', {'rg':rg}, function(data) {

        	$("#erro").html(data); 

        });

    });
});

$(document).ready(function(){
    $("#email").keyup(function (e) {

        var email = $(this).val(); 

        $.post('inc/inc.valida.php', {'email':email}, function(data) {

        	$("#erro").html(data); 

        });

    });
});