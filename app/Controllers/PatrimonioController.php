<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class PatrimonioController extends BaseController
{
    protected $service;
    
    public function __construcut(){

        $this->service = new PatrimonioService();
    }

    public function index()
    {
        return $this->response->setJSON(
            $this->service->listar()
        );
    }
}
