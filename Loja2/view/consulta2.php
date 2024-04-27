<?php
    require_once('controller/cidadeController.php');
    $controller = new cidadeController();
    $result = $controller->consultar();
?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Editar</th>
            <th>Excluir</th>
        <?php
            foreach ($consulta as $linha){
                echo"<tr>
                        <td>" . $linha['id'] . "</td>
                        <td>" . $linha['nome'] . "</td>
                        <td>< a href='#'>editar</a></td>
                        <td>< a href='#'>excluir</a></td>
                     </tr>";   
            }
            
        ?>
    </table>

