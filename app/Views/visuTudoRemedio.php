<table class="table">
<thead>
    <th>Código</th>
    <th>Remédio</th>
    <th>Tarja</th>
    <th>Receita</th>
    <th>Preço</th>
    <th>Qtd</th>
    <th>Embalagem</th>
    <th>Laboratório</th>
    <th>Genérico</th>
</thead>
<?php foreach($remedios as $remedio): ?>
<tbody>
    <tr>
    <td><?php echo($remedio->CodRmd);?> </td>
    <td><?php echo($remedio->NomeRmd);?> </td>
    <td><?php echo($remedio->TarjaRmd);?> </td>
    <td><?php echo($remedio->ReceitaRmd);?> </td>
    <td><?php echo($remedio->PrecoRmd);?> </td>
    <td><?php echo($remedio->QtdRmd);?> </td>
    <td><?php echo($remedio->EmbalagRmd);?> </td>
    <td><?php echo($remedio->LabRmd);?> </td>
    <td><?php echo($remedio->GenericoRmd);?> </td>
</tr>
</tbody>
<?php endforeach; ?>
</table>