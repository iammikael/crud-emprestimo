<?php

namespace App\Services;

use App\Models\EmprestimoModel;

class EmprestimoService {

    protected $model;

    public function __construct(){
        return $this->model = new EmprestimoModel;
    }

    public function listar(){
        return $this->model->findAll();
    }

    public function buscar($id){
        return $this->model->find($id);
    }

    public function criar(array $dados){
        return $this->model->insert($dados);
    }

    public function atualizar($id, array $dados){
        return $this->model->uptade($id,$dados);
    }

    public function excluir($id){
        return $this->model->delete($id);
    }
}
