<?php

namespace App\Controllers;

use App\Services\PatrimonioService;
use App\Models\PatrimonioModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PatrimonioController extends BaseController
{
    protected $service;
    
    public function __construct(){

        $this->service = new PatrimonioService();
    }

    public function index()
    {
        return $this->response->setJSON(
            $this->service->listar()
        );
    }

    public function meusPatrimonios()
    {
        $model = new PatrimonioModel();

        $estabelecimento = session()->get('estabelecimento_id');

        $data['patrimonios'] = $model
        ->where('estab_pai_id', $estabelecimento)
        ->findAll();

        return view('patrimonios/index', $data);
    }
    public function create(){
        return view('Patrimonios/cadastroPatrimonio');
    }
    public function store()
{
    $estabelecimento = session()->get('estabelecimento_id');
    $dados = [
        'nome_patrimonio'   => $this->request->getPost('nome_patrimonio'),
        'cod_patrimonio'    => $this->request->getPost('cod_patrimonio'),
        'tipo_patrimonio'   => $this->request->getPost('tipo_patrimonio'),
	'status' => true,
        'estab_pai_id' => session()->get('estabelecimento_id'),
        'data_entrada' => date('Y-m-d H:i:s')
    ];
    $this->service->criar($dados);

    return redirect()
        ->to('/meus-patrimonios')
        ->with('sucesso', 'Patrimonio cadastrado com sucesso');
}

}
