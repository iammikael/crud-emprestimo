<?php

namespace App\Services;

use App\Models\PatrimonioModel;

class PatrimonioService{
    protected $model;

    public function __construct(){
        return $this->model = new PatrimonioModel;
    }

    public function listar(){
        return $this->model->findAll();
    }

    public function busca($id){
        return $this->model->find($id);
    }

    public function criar($id, array $dados){
        return $this->model->insert($id,$dados);
    }

    public function excluir($id){
        return $this->model->delete($id);
    }
}
