<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Request;

class RemedioController extends BaseController{

    public function index()
	{
		echo view('header'); 
		echo view('cad_remedio');
		echo view('footer');
	}
    
    public function inserirRemedio(){

        $request = service('request');
        
        if($request->getMethod() === 'post'){
            $RmdModel = new \App\Models\RemedioModel();
            $generico = $request->getPost('generico')? $request->getPost('generico') :'não';
            $valor = strtr($request->getPost('preco'), ',', '.');
            var_dump($request->getPost('preco'));
            
            var_dump(strtr($request->getPost('preco'), ',', '.'));
            $precoCerto = number_format($valor, 2 , ",", ".");

            $RmdModel->set('NomeRmd',$request->getPost('remedio'));
            $RmdModel->set('TarjaRmd',$request->getPost('tarja'));
            $RmdModel->set('ReceitaRmd',$request->getPost('receita'));
            $RmdModel->set('PrecoRmd',$precoCerto);
            $RmdModel->set('QtdRmd',$request->getPost('quantidade'));
            $RmdModel->set('EmbalagRmd',$request->getPost('embalagem'));
            $RmdModel->set('LabRmd',$request->getPost('laboratorio'));
            $RmdModel->set('GenericoRmd',$generico);
           
            if($RmdModel->insert()){
                echo("<script> alert('Dados inseridos com sucesso') </script>");
            }else{
                echo("<script> alert('Dados Não inseridos') </script>");
            }
        }
        echo view('header'); 
		echo view('cad_remedio');
		echo view('footer');
    }

    public function visuNomeRemedio(){
        
        $remedioModel = new \App\Models\RemedioModel();
        $dados = $remedioModel -> find();
        $data['remedios'] = $dados;

        echo view('header'); 
        echo view('visuTudoRemedio',$data);
        echo view('footer');
    }

     public function visuPorLab(){

    }

    public function visuTarja(){

    }

    public function alterarremedio(){
        echo("Arrumar os menus");
    }

}