<?php

namespace App\Controllers;

use App\Services\EmprestimoService;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;
use CodeIgniter\Exceptions\PageNotFoundException;

class EmprestimoController extends BaseController
{
    protected $service;
    
    public function __construct(){

        $this->service = new EmprestimoService();
    }

    public function index(){
        $data['emprestimos'] = $this->service->listar();

        return view('emprestimos/index', $data);
    }

    public function create($patrimonio_id){
        $data = $this->service->formCriacao($patrimonio_id);

        return view('emprestimos/solicitarEmprestimo', $data);
    }

    public function store(){
    
        $data = $this->request->getPost();

        $this->service->formEmprestimo($data);
       return redirect()->to('/emprestimos')
        ->with('success', 'Empréstimo criado com sucesso');
    }
}
