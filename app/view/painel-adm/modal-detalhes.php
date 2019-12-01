<!-- Modal Cadastro de livro -->
<div id="modal-detalhes-livros" class="modal">
    <div class="modal-content flow-text">
        <h4 class="flow-text">Cadastro de novos livros</h4>
        <form id="form-cadastro-livro" method="post" autocomplete="off">
            <div class="input-field">
                <input type="text" id="det-titulo" class="validate">
                <label for="cad-titulo">Título</label>
            </div>

            <div class="input-field">
                <input type="text" id="det-autor" class="validate">
                <label for="cad-autor">Autor</label>
            </div>

            <div class="input-field">
                <input type="text" id="det-isbn" class="validate">
                <label for="cad-isbn">ISBN</label>
            </div>

            <div class="input-field">
                <textarea class="materialize-textarea flow-text validate" id="det-desc"></textarea>
                <label for="cad-desc">Descrição</label>
            </div>

            <button type="submit" id="btn-cadastrar-livro" class="right btn waves">Alterar
                <i class="material-icons large left">edit</i>
            </button>
        </form>
    </div>
    <div class="modal-footer">
        <!-- <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a> -->
    </div>
</div>