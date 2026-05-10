<?php
namespace App\Services;

use App\Models\EstabelecimentoModel;

class AuthService{
    protected $model;

    public function __construct(){
        $this->model = new EstabelecimentoModel();
    }

    public function login($cnpj, $senha){

        $estabelecimento = $this->model->
        where('cnpj',$cnpj)
        ->first();

        if(!$estabelecimento){
            return false;
        }

        if(!password_verify($senha,$estabelecimento['senha'])){
            return false;
        }
        
        session()->set([
            'id' => $estabelecimento['id'],
            'cnpj' => $estabelecimento['cnpj'],
            'logado' => true
        ]);

        return true;
    }

        public function logout()
    {
        session()->destroy();
    }
}