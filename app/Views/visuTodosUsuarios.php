<table class="table">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Deletar</th>
        <th>Alterar</th>
    </thead>
    
    <tbody>
    <?php foreach($usuarios as $usuario):?>
        <tr>
            <td><?php echo($usuario->codUsu)?> </td>
            <td> <?php echo($usuario->nomeUsu)?> </td>
        
            <td> <?php echo($usuario->emailUsu)?></td>
            
            <td>
            <form method="POST">    
           <input type="hidden" value="<?php echo($usuario->codUsu)?>" name="CodUsu">
            <button type="Submit" class="btn btn-danger">Excluir</button>
            </form>
        </td>
        <td>
            <form method="POST">    
           <input type="hidden" value="<?php echo($usuario->codUsu)?>" name="codUsuAlterar">
            <button type="Submit" class="btn btn-danger">Alterar</button>
            </form>
        </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>