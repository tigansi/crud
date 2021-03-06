$(document).ready(function () 
{
    $('.modal').modal();
    $('#cad-isbn').mask('9999');

    $('#al-titulo').hide();
    $('#al-autor').hide();
    $('#al-isbn').hide();
    $('#al-descricao').hide();

    $('#form-cadastro-livro').submit(function()
    {
        var titulo_livro = $('#cad-titulo').val();
        var autor_livro  = $('#cad-autor').val();
        var isbn_livro   = $('#cad-isbn').val();
        var desc_livro   = $('#cad-desc').val();

        if (titulo_livro == "" || autor_livro == "" || isbn_livro == "" || desc_livro == "")
        {
            if (titulo_livro == "")
                $('#al-titulo').fadeIn('slow');
                           
            if(autor_livro == "")
               $('#al-autor').fadeIn('slow');

            if(isbn_livro == "")
                $('#al-isbn').fadeIn('slow');
            
            if(desc_livro == "")
                $('#al-descricao').fadeIn('slow');
        }
        else
        {
            $('#al-titulo').fadeOut('slow');
            $('#al-autor').fadeOut('slow');
            $('#al-isbn').fadeOut('slow');
            $('#al-descricao').fadeOut('slow');

            $.ajax(
            {
                type:"POST",
                data:
                {
                    titulo_livro: titulo_livro,
                    autor_livro: autor_livro,
                    isbn_livro: isbn_livro,
                    desc_livro: desc_livro
                },
                url:"controller/Cadastro.php",
                success:function(data)
                {
                    console.log(data);
                }
            });
        }
            

        return false;
    });
});