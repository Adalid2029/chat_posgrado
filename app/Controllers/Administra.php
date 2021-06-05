<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use PhpParser\JsonDecoder;
use PHPUnit\Util\Json;
use MongoDB\BSON\ObjectID;
use CodeIgniter\View;

class Administra extends BaseController
{
    public function index()
    {
    }

public function administra()
    {   
        $administra = $this->db_mongo->chats->administrador;
        $cursor['cabecera'] = view('/template/cabecera');
        $cursor['pie'] = view('/template/piepagina');
        $cursor['listar'] = $administra ->find()->toArray();
        //var_dump($cursor);
        return view('/administra/listar',  $cursor);
    }

}