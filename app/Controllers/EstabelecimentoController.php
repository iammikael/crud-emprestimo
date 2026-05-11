<?php

namespace App\Controllers;

use App\Services\EstabelecimentoService;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EstabelecimentoController extends BaseController
{
    protected $service;
    
    public function __construct(){
        $this->service = new EstabelecimentoService();
    }

    public function index()
    {
        return $this->response->setJSON(
            $this->service->listar()
        );
    }

    public function create(){
        return view('Estabelecimentos/cadastro');
    }

    public function store()
{
    $dados = [
        'razao_social'   => $this->request->getPost('razao_social'),
        'cnpj'           => $this->request->getPost('cnpj'),
        'ramo_atividade' => $this->request->getPost('ramo_atividade'),
        'senha'          => password_hash(
            $this->request->getPost('senha'),
            PASSWORD_DEFAULT
        )
    ];
    $this->service->criar($dados);

    return redirect()
        ->to('/login')
        ->with('sucesso', 'Cadastro realizado com sucesso');
}
}
