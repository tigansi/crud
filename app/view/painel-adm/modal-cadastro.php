<!-- Modal Cadastro de livro -->
<div id="modal-cadastro-livros" class="modal">
    <div class="modal-content flow-text">
        <h4 class="flow-text">Cadastro de novos livros</h4>
        <form id="form-cadastro-livro" method="post" autocomplete="off">
            <div class="input-field">
                <input type="text" id="cad-titulo" class="validate">
                <label for="cad-titulo">Título</label>
                <span class="helper-text red-text" id="al-titulo" data-error="Campo em branco ou com texto">Campo em branco</span>
            </div>

            <div class="input-field">
                <input type="text" id="cad-autor" class="validate">
                <label for="cad-autor">Autor</label>
                <span class="helper-text red-text" id="al-autor" data-error="Campo em branco">Campo em branco</span>
            </div>

            <div class="input-field">
                <input type="text" id="cad-isbn" class="validate">
                <label for="cad-isbn">ISBN</label>
                <span class="helper-text red-text" id="al-isbn" data-error="Campo em branco ou com texto">Campo em branco ou com texto</span>
            </div>

            <div class="input-field">
                <textarea class="materialize-textarea flow-text validate" id="cad-desc"></textarea>
                <label for="cad-desc">Descrição</label>
                <span class="helper-text red-text" id="al-descricao" data-error="Campo em branco">Campo em branco</span>
            </div>

            <div for="" id="info-cadastro"></div>

            <div class="right">
                <button class="modal-close waves-effect waves-green btn-flat">
                    Fechar
                    <i class="material-icons left">close</i>
                </button>

                <button type="submit" id="btn-cadastrar-livro" class="right btn waves green">Cadastrar
                    <i class="material-icons large left">add</i>
                </button>
            </div>

        </form>
    </div>
    <div class="modal-footer">
        <!-- <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a> -->
    </div>
</div>