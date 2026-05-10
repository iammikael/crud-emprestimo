<?php

namespace App\Controllers;

use App\Services\AuthService;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    protected $service;

    public function __construct(){
        $this->service = new AuthService();
    }

    public function index(){
        return view('auth/logi');
    }

    public function login(){
        
        $cnpj = $this->request->getPost('cnpj');
        $senha = $this->request->getPost('senha');

        $login = $this->service->login($cnpj,$senha);

        if(!$login){
            return redirect()
            ->back()
            ->with('erro','CNPJ ou senha invalida');
        }

        return redirect()
        ->to('/welcome_message')
        ->with('sucesso', 'Login realizado com sucesso');
    }
}
