<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use PhpParser\JsonDecoder;
use PHPUnit\Util\Json;
use MongoDB\BSON\ObjectID;
use CodeIgniter\View;

class Login extends BaseController
{
    public function index()
    {
    }
    public function login()
    {
        $conn = $this->db_mongo->chats->usuario;
        $email = $_POST["correo"];
        $password = $_POST["password"];

        $cursor['usuario'] = $conn->findOne(['email' => $email]);
        if (isset($cursor['usuario']->password) && $cursor['usuario']->password == $password) {
            //$cursor['usuario']->rol ==1
            $session = session();
            $session->start();
            $session->set('nombre',$cursor['usuario']->nombre);
            $session->set('_ideuser',$cursor['usuario']->_id);
            $session->set('tipo',$cursor['usuario']->tipo);
            if ($cursor['usuario']->tipo==1) {

                return redirect()->to(base_url('/usuario/listar'));
            }else{
               
                return view('/usuario/home');
            }
            

        
        } else {
            return redirect()->to(base_url('/usuario/login'));
         
        }
    }
}
