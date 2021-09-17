<?php

namespace App\Models;


use CodeIgniter\Model;


class UsuarioModel extends Model{

    protected $table= 'tbusuario';
    protected $primaryKey='codUsu';
    protected $allowedFields=['nomeUsu','emailUsu','senhaUsu','dataNascUsu'];
    protected $returnType='object';
}