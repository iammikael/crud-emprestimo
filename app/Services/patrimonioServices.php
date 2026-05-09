<?php

namespace App\Services;

use App\Models\PatrimonioModel;

class PatrimonioService{
    protected $model;

    public function __construct(){
        $this->model = new PatrimonioModel();
    }

    public function listar(){
        return $this->model->findAll();
    }

    public function busca($id){
        return $this->model->find($id);
    }

    public function criar(array $dados){
        return $this->model->insert($dados);
    }

    public function atualizar($id, array $dados){
        return $this->model->update($id,$dados);
    }

    public function excluir($id){
        return $this->model->delete($id);
    }
}
