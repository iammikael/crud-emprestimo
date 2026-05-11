<?php

namespace App\Services;

use App\Models\EmprestimoModel;
use App\Models\PatrimonioModel;
use App\Models\EstabelecimentoModel;
use App\Exceptions\PageNotFoundException;
use Exception;

class EmprestimoService
{
    protected EmprestimoModel $model;
    protected PatrimonioModel $patrimonioModel;
    protected EstabelecimentoModel $estabelecimentoModel;

    public function __construct()
    {
        $this->model = new EmprestimoModel();
        $this->patrimonioModel = new PatrimonioModel();
        $this->estabelecimentoModel = new EstabelecimentoModel();
    }

    public function listar()
    {
        return $this->model->findAll();
    }

    public function buscar($id)
    {
        return $this->model->find($id);
    }

    public function criar(array $dados)
    {
        return $this->model->insert($dados);
    }

    public function atualizar($id, array $dados)
    {
        return $this->model->update($id, $dados);
    }

    public function excluir($id)
    {
        return $this->model->delete($id);
    }

    public function formCriacao($patrimonio_id)
    {
        $patrimonio = $this->patrimonioModel
            ->select('patrimonios.*, estabelecimentos.razao_social, estabelecimentos.cnpj')
            ->join('estabelecimentos', 'estabelecimentos.id = patrimonios.estab_pai_id')
            ->where('patrimonios.id', $patrimonio_id)
            ->first();

        if (!$patrimonio) {
            throw new PageNotFoundException('Patrimônio não encontrado');
        }

        return [
            'patrimonio' => $patrimonio,
            'data_emprestimo' => date('Y-m-d H:i:s')
        ];
    }

    public function formEmprestimo(array $dados)
    {
  
        $patrimonioIds = (array) ($dados['patrimonio_id'] ?? []);

        if (empty($patrimonioIds)) {
            throw new Exception("Nenhum patrimônio informado.");
        }


        $patrimonios = $this->patrimonioModel
            ->whereIn('id', $patrimonioIds)
            ->findAll();

        if (!$patrimonios) {
            throw new Exception("Patrimônio não encontrado.");
        }


        foreach ($patrimonios as $p) {
            if (($p['status'] ?? null) === 'baixado') {
                throw new Exception("Patrimônio {$p['id']} está baixado.");
            }
        }


        $atendente = $this->estabelecimentoModel->find($dados['estab_atendente_id'] ?? null);

        if (!$atendente) {
            throw new Exception('Estabelecimento atendente inválido.');
        }


        $dataInsert = [
            'dados_estab_req_id'   => session()->get('estabelecimento_id'),
            'dados_estab_atend_id' => $dados['estab_atendente_id'],
            'patrimonio_id'        => $patrimonioIds[0], // só 1 por enquanto
            'data_emprest'         => date('Y-m-d H:i:s'),
            'data_devolucao'       => $dados['data_devolucao']
        ];

    
        $insert = $this->model->insert($dataInsert);


        if ($insert === false) {
            throw new Exception(json_encode($this->model->errors()));
        }

        return $insert;
    }
}