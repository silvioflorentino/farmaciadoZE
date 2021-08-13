<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Como formatar campos do Formulário / Máscara - jQuery Mask</title>
    <meta name="description" content="Aprenda a formatar máscaras de forma muito simples e rápida usando a biblioteca jQuery Mask">
    <meta name="author" content="Prof. Anderson Luiz de Oliveira - https://www.blogson.com.br/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>CPF</label>
                <input type="text" class="form-control" onkeypress="$(this).mask('000.000.000-00');">
            </div>
            <div class="form-group col-md-4">
                <label>CNPJ</label>
                <input type="text" class="form-control" onkeypress="$(this).mask('00.000.000/0000-00')">
            </div>
            <div class="form-group col-md-4">
                <label>CEP</label>
                <input type="text" class="form-control" onkeypress="$(this).mask('00.000-000')">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Altura / Peso</label>
                <input type="text" class="form-control" maxlength="5" onkeypress="$(this).mask('90,00'), {reverse: true};">
            </div>
            <div class="form-group col-md-4">
                <label>Moeda / Dinheiro</label>
                <input type="text" class="form-control" onkeypress="$(this).mask('R$ #.##0,00', {reverse: true});">
            </div>
            <div class="form-group col-md-4">
                <label>Telefone</label>
                <input type="text" class="form-control" onkeypress="$(this).mask('(00) 0000-00009')">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label>Data</label>
                <input type="text" class="form-control" onkeypress="$(this).mask('00/00/0000')">
            </div>
                        <div class="form-group col-md-4">
                <label>Hora</label>
                <input type="text" class="form-control" onkeypress="$(this).mask('00h 00m')">
            </div>
        </div>
    </div>
</body>
</html>