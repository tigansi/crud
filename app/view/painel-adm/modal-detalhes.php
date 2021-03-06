<!-- Modal Cadastro de livro -->
<div id="modal-detalhes-livros" class="modal">
    <div class="modal-content flow-text">
        <h4 class="flow-text">Detalhes do Livro</h4>
        <form id="form-detalhes-livro" method="post" autocomplete="off">
            <div class="input-field">
                <input type="text" id="det-titulo" value=" " class="validate">
                <label for="det-titulo">Título</label>
            </div>

            <div class="input-field">
                <input type="text" id="det-autor" value=" " class="validate">
                <label for="det-autor">Autor</label>
            </div>

            <div class="input-field">
                <input type="text" id="det-isbn" readonly value=" " class="validate disble">
                <label for="det-isbn">ISBN</label>
            </div>

            <div class="input-field">
                <textarea class="materialize-textarea flow-text validate" id="det-desc"> </textarea>
                <label for="det-desc">Descrição</label>
            </div>

            <div for="" id="info-alteracao"></div>

            <div class="right">
                <button class="modal-close waves-effect waves-green btn-flat">
                    Fechar
                    <i class="material-icons left">close</i>
                </button>

                <button type="submit" id="btn-cadastrar-livro" class="green btn waves">Alterar
                    <i class="material-icons large left">edit</i>
                </button>
            </div>
        </form>
    </div>
    <div class="modal-footer">

    </div>
</div>