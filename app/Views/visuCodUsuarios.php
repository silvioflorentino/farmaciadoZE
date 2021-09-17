<form method="POST">
    <div>
        <label for="codusu" class="form-label">Digite o Código do Usuário</label>
        <input type="number" class="form-control" name="codigoUsuario" id="codusu">
       </div>
       <div>
           <button type="submit" class="btn btn-primary">Buscar</button>
       </div>
</form>

<table class="table">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>E-mail</th>
    </thead>
    
    <tbody>
    <?php
    $codigoUsuario = isset($usuario->codUsu)?$usuario->codUsu : "";
    $nomeUsuario = isset($usuario->nomeUsu)?$usuario->nomeUsu : "";
    $emailUsuario = isset($usuario->emailUsu)?$usuario->emailUsu : "";
    ?>
        <tr>
            <td><?php echo($codigoUsuario)?> </td>
            <td> <?php echo($nomeUsuario)?> </td>
            <td> <?php echo($emailUsuario)?></td>
        </tr>
    
    </tbody