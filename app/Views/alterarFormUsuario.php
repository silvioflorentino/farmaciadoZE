<div style="width: 600px; margin:auto; padding-top:40px">

    <form method="POST">
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="codigousuarioaltinput">Código: </label>
            <div class="col-sm-2">
                <input class="form-control text-center" type="text" name="codUsuAlterar" readonly id="codigousuarioaltinput" value="<?php echo ($usuario->codUsu) ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="nomeUsuarioinput">Nome: </label>
            <div class="col-sm-10">
                <input class="form-control " type="text" name="nomeUsu" id="nomeUsuarioinput" value="<?php echo ($usuario->nomeUsu) ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="emailusuarioinput">E-mail: </label>
            <div class="col-sm-10">
                <input class="form-control " type="text" name="emailUsu" id="emailusuarioinput" value="<?php echo ($usuario->emailUsu) ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-4 col-form-label" for="datanascsuarioinput">Data de Nascimento: </label>
            <div class="col-sm-4">
                <input class="form-control " type="date" name="dataNascUsu" id="datanascsuarioinput" value="<?php echo ($usuario->dataNascUsu) ?>">
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" class="btn btn-primary"> Alterar </button>
        </div>
</div>
</form>