$(document).ready(function() {
    $('.modal').modal();
});

$(function() {
    $(document).on('click', '#btn-detalhes', function(e) {
        e.preventDefault;
        var isbn = $(this).closest('tr').find('td[data-isbn]').data('isbn');

        $.ajax({
            type: "POST",
            url: "Controller/Detalhes.php",
            data: {
                isbn: isbn
            },
            success: function(data) {
                console.log(data);

                var dados = $.parseJSON(data);
                console.log(dados);

                $('#det-autor').val(dados['autor']);
            }
        });
    });
});