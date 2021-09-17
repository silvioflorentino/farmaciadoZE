<?php

namespace App\Models;


use CodeIgniter\Model;


class RemedioModel extends Model{

    protected $table= 'tbremedio';
    protected $primaryKey='CodRmd';
    protected $allowedFields=['NomeRmd','TarjaRmd','ReceitaRmd','PrecoRmd','QtdRmd','EmbalagRmd','LabRmd','GenericoRmd'];
    protected $returnType='object';
}