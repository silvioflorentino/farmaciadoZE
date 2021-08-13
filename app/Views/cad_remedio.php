<style>input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<div style="width: 600px; margin:auto; padding-top:40px">

<form method="POST">
    <div class="row mb-3">
        <label for="remedio" class="col-sm-2 col-form-label">Remédio</label>
        <div class="col-sm-10">
            <input type="text" name="remedio" class="form-control" id="remedio" autocomplete="off">
        </div>
    </div>

    <div class="row mb-3">
        <label for="tarja" class="col-sm-2 col-form-label">Tarja</label>
        <div class="col-sm-10">
            <select name="tarja"class="form-select" aria-label="Default select example">
                <option selected>Selecione uma tarja</option>
                <option value="SemTarja">Sem tarja</option>
                <option value="Amarela">Amarela</option>
                <option value="VermelhaSemreceita">Vermelha sem receita</option>
                <option value="VermelhaComReceita">Vermelha com receita</option>
                <option value="Preta">Preta</option>
            </select>
        </div>
    </div>

    <div class="row mb-3">
        <label for="preco" class="col-sm-2 col-form-label">Preço</label>
        <div class="col-sm-10">
            <input type="text" onkeypress="$(this).mask('R$ #.##0,00', {reverse: true});" name="preco" class="form-control" id="preco">
        </div>
    </div>

    <div class="row mb-3">
        <label for="quantidade" class="col-sm-2 col-form-label">Quantidade</label>
        <div class="col-sm-10">
            <input type="number" name="quantidade" class="form-control" autocomplete="off" id="quantidade">
        </div>
    </div>

    <div class="row mb-3">
        <label for="embalagem" class="col-sm-2 col-form-label">Embalagem</label>
        <div class="col-sm-10">
            <input type="text" name="embalagem" class="form-control" id="embalagem">
        </div>
    </div>

    <div class="row mb-3">
        <label for="laboratorio" class="col-sm-2 col-form-label">Laboratório</label>
        <div class="col-sm-10">
            <input type="text" name="laboratorio" class="form-control" id="laboratorio">
        </div>
    </div>

    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Receita</legend>
        <div class="col-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="receita" id="sim" value="sim" checked>
                <label class="form-check-label" for="gridRadios1">
                    Sim
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="receita" id="nao" value="nao">
                <label class="form-check-label" for="gridRadios2">
                    Não
                </label>
            </div>

        </div>
    </fieldset>
    <div class="row mb-3">
        <div class="col-sm-3 offset-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="generico" id="generico">
                <label class="form-check-label" for="generico">
                    Genérico
                </label>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

</div>