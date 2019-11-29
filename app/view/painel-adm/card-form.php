<div class="valign-wrapper row painel-box">
    <div class="col l1"></div>
    <div class="col l10">
        <div class="card hoverable">
            <div class="card-action #1565c0 blue darken-3">
                <span class="card-title white-text">Lista de livros</span>
            </div>

            <div class="card-content">
                <button data-target="modal-cadastro-livros" class="modal-trigger btn waves-effect waves-light green">livros
                    <i class="material-icons large left">add</i>
                </button>

                <div class="row">
                    <div class="col l12">
                        <?php include('view/painel-adm/table-itens.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col l1"></div>
</div>

<!-- Modal Cadastro de livro -->
<?php include('modal-cadastro.php'); ?>