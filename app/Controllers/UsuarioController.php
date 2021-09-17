<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class UsuarioController extends BaseController{

    public function index()
	{
		echo view('header'); 
		echo view('cad_usuario');
		echo view('footer');
	}
    
    public function inserirUsuario(){

        $request = service('request');
        
        if($request->getMethod() === 'post'){
            $UsuarioModel = new \App\Models\UsuarioModel();
            $senha1 = $request->getPost('senhausu1');
            $senha2 = $request->getPost('senhausu2');
            
            if($senha1 === $senha2){
            $senha = $senha1;
     
            $salto = ['cost' => '8'];
                $hast = password_hash($senha,PASSWORD_BCRYPT,$salto);

            $UsuarioModel->set('nomeUsu',$request->getPost('nomeusu'));
            $UsuarioModel->set('emailUsu',$request->getPost('emailusu'));
            $UsuarioModel->set('senhaUsu',$hast);
            $UsuarioModel->set('dataNascUsu',$request->getPost('datanascusu'));
            
           
             if($UsuarioModel->insert()){
                     echo("<script> alert('Dados inseridos com sucesso') </script>");
                    }else{
                    echo("<script> alert('Dados Não inseridos') </script>");
                }

            }else{
                echo("<script> alert('As senhas não conferem') </script>");
            
            };
        }
        echo view('header'); 
		echo view('cad_usuario');
		echo view('footer');
    }



    public function visualizarTodosUsuarios(){
        $UsuarioModelo = new \App\Models\UsuarioModel();
        $registros = $UsuarioModelo->find();
        $data['usuarios']=$registros;

        $request = service('request');

        if($request->getPost('CodUsu')){
            $this->excluirUsuario($request->getPost('CodUsu'));
            return redirect()->to(base_url('UsuarioController/visualizarTodosUsuarios'));
        }

        if ($request->getPost('codUsuAlterar')) {
            return $this->alterarUsuario();
         }

        
        echo view('header'); 
		echo view('visuTodosUsuarios',$data);
		echo view('footer');
    }

    public function alterarUsuario()
    {
        $request = service('request');
        $codUsuAlterar = $request->getPost('codUsuAlterar');
        $emailUsu = $request->getPost('emailUsu');

        $UsuarioModelo = new \App\Models\UsuarioModel();
        $registros = $UsuarioModelo->find($codUsuAlterar);
       
        if ($request->getPost('emailUsu')) {
            $nomeUsu = $request->getPost('nomeUsu');
            $emailUsu = $request->getPost('emailUsu');
            $dataNascUsu = $request->getPost('dataNascUsu');

            $registros->nomeUsu = $nomeUsu;
            $registros->emailUsu = $emailUsu;
            $registros->dataNascUsu = $dataNascUsu;

            $UsuarioModelo->update($codUsuAlterar,$registros);
  
            return redirect()->to(base_url('UsuarioController/visualizarTodosUsuarios/'));
        }
        $data['usuario'] = $registros;

        echo view('header');
        echo view('alterarFormUsuario', $data);
        echo view('footer');
    }


    public function visualizarCodUsuario(){
        $request = service('request');
        $codigoUsuario = $request->getPost('codigoUsuario');
        $UsuarioModelo = new \App\Models\UsuarioModel();
        $registros = $UsuarioModelo->find($codigoUsuario);
        $data['usuario']=$registros;

        echo view('header'); 
		echo view('visuCodUsuarios',$data);
		echo view('footer');

    }

    public function excluirUsuario($codigoUsuario=null){
        if(is_null($codigoUsuario)){
            return redirect()->to(base_url('UsuarioController/visualizarTodosUsuarios'));
        }

        $UsuarioModelo = new \App\Models\UsuarioModel();

        if($UsuarioModelo->delete($codigoUsuario)){
            echo("<script>alert('Dados exluidos com sucesso') </script>");
        }else{
            return redirect()->to(base_url('UsuarioController/'));
        }
       
    }
}