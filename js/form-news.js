$('#form-news').submit(function() {
    var dados = $('#form-news').serialize();
    var url = apiUrl();
    $.ajax({
        type : 'POST',
        url  : url+'backend/routes.php?function=create-news',
        data : dados,
        dataType: 'json',
        success :  function(result){
            swal({
                title: "INSERIDO COM SUCESSO",
                text: " ",
                button: false,
                icon: "success"
            });
            $('#form-news')[0].reset();
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
