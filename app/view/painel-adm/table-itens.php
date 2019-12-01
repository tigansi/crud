<table class="bordered centered striped table-responsive">
    <thead>
        <tr>
            <th data-field="Titulo">Titulo</th>
            <th data-field="Autor">Autor</th>
            <th data-field="ISBN">ISBN</th>
            <th data-field="ISBN">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require('model/MySQL.php');
        $mysql = new MySQL();
        $query = "SELECT isbn, titulo_livro, autor FROM livros WHERE is_ativo = '1' ";

        $comando = mysqli_query($mysql->Conexao(), $query);
        foreach ($comando as $valor) :
            ?>

            <tr>
                <td data-titulo-livro="<?php echo $valor['titulo_livro']; ?>"><?php echo $valor['titulo_livro']; ?></td>
                <td><?php echo $valor['autor']; ?></td>
                <td data-isbn="<?php echo $valor['isbn']; ?>"><?php echo $valor['isbn']; ?></td>
                <td>
                    <a href="Controller/BuscaInfo.php?isbn=<?php echo $valor['isbn']; ?>" id="btn-detalhes" data-target="modal-detalhes-livros" class="modal-trigger btn waves-effect waves-light">
                        Detalhes
                        <i class="material-icons left">details</i>
                    </a>
                    <a href="Controller/Delete.php?isbn=<?php echo $valor['isbn']; ?>" id="btn-deletar" data-target="modal-pergunta-exclusao" class="modal-trigger red btn waves-effect waves-light">
                        Deletar
                        <i class="material-icons left">delete</i>
                    </a>
                </td>
            </tr>

        <?php endforeach; ?>
    </tbody>
</table>