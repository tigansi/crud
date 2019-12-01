<div id="modal-livros-excluidos" class="modal">
    <div class="modal-content">
        <h4>Livros excluidos</h4>
        <table class="bordered centered striped responsive-table">
            <thead>
                <tr>
                    <th data-field="Titulo">Titulo</th>
                    <th data-field="Autor">Autor</th>
                    <th data-field="ISBN">ISBN</th>
                </tr>
            </thead>
            <tbody>
                <?php
               
                $query = "SELECT isbn, titulo_livro, autor FROM livros WHERE is_ativo = '0' ";

                $comando = mysqli_query($mysql->Conexao(), $query);
                foreach ($comando as $valor) :
                    ?>
                    <tr>
                        <td><?php echo $valor['titulo_livro']; ?></td>
                        <td><?php echo $valor['autor']; ?></td>
                        <td><?php echo $valor['isbn']; ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">
            <i class="material-icons left">close</i>
            Fechar
        </a>
    </div>
</div>