<?php

namespace App\Controllers;

use App\Services\PatrimonioService;

class HomeController extends BaseController
{
    protected $service;

    public function __construct()
    {
        $this->service = new PatrimonioService();
    }

    public function index()
    {
        if (!session()->get('logado')) {
            return redirect()->to('/login');
        }

        $data['patrimonios'] = $this->service->listar();

        return view('home/index', $data);
    }
}
