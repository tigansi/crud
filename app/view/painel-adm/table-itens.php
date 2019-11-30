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
            foreach($comando as $valor):
        ?>

        <tr>
            <td><?php echo $valor['titulo_livro']; ?></td>
            <td><?php echo $valor['autor']; ?></td>
            <td><?php echo $valor['isbn']; ?></td>
            <td>
                <a href="Controller/BuscaInfo.php?isbn="  data-target="modal-detalhes-livros" id="btn-detalhe" class="modal-trigger  btn waves-effect waves-light">
                    Detalhes
                    <i class="material-icons left">details</i>
                </a>
                <a href="controller/Delete.php?isbn=<?php echo $valor['isbn']; ?>" class="red btn waves-effect waves-light">
                    Deletar
                    <i class="material-icons left">delete</i>
                </a>
            </td>
        </tr>

       <?php endforeach; ?>
    </tbody>
</table>

<!--
<td>
                <a href="" class="btn waves-effect waves-light">
                    Editar
                    <i class="material-icons left">edit</i>
                </a>
                <a href="" class="blue btn waves-effect waves-light">
                    Detalhes
                    <i class="material-icons left">details</i>
                </a>
                <a href="" class="red btn waves-effect waves-light">
                    Deletar
                    <i class="material-icons left">delete</i>
                </a>

            </td>
-->