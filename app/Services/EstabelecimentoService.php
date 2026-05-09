<?php

namespace App\Services;

use App\Models\EstabelecimentoModel;

class EstabelecimentoService {

    protected $model;

    public function __construct(){
        $this->model = new EstabelecimentoModel();
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
        return $this->model->update($id,$dados);
    }

    public function excluir($id){
        return $this->model->delete($id);
    }
}
