$('#form-contact').submit(function() {
    var dados = $('#form-contact').serialize();
    var url = apiUrl();
    $.ajax({
        type : 'POST',
        url  : url+'backend/routes.php?function=send-contact',
        data : dados,
        dataType: 'json',
        success :  function(result){
            swal({
                title: "INSERIDO COM SUCESSO",
                text: " ",
                button: false,
                icon: "success"
            });
            $('#form-contact')[0].reset();
        },
        error : function(result){
            
            swal({
                title: "OCORREU ALGUM ERRO",
                text: "Tente novamente",
                button: false,
                icon: "error"
            });
        }
    });

    return false;
});

$(".phone").mask("(99) 99999-9999");
