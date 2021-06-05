<?php

namespace App\Controllers;

use CodeIgniter\Controller;
//use App\Models\model_user;
use PhpParser\JsonDecoder;
use PHPUnit\Util\Json;
use MongoDB\BSON\ObjectID;
use CodeIgniter\View;
use CodeIgniter\Encryption\Encryption as EncryptionEncryption;
use Config\Encryption;

class Usuario extends BaseController
{


    public function index()
    {
        return view('/usuario/inicio');
    }
    public function home()
    {
        return view('/usuario/home');
    }
    //listar admin
    public function administra()
    {     
            $administra = $this->db_mongo->chats->administrador;
            $cursor['cabecera'] = view('/template/cabecera');
            $cursor['pie'] = view('/template/piepagina');
            $cursor['listar'] = $administra ->find()->toArray();
            //var_dump($cursor);
            return view('/usuario/administra',$cursor);
    }
    //listar los datos
    public function listar()
    {   
        $usuarios = $this->db_mongo->chats->usuario;
        $cursor['cabecera'] = view('/template/cabecera');
        $cursor['pie'] = view('/template/piepagina');
        $cursor['listar'] =$usuarios->find()->toArray();
        //var_dump($cursor);
        return view('/usuario/listar', $cursor);
    }

    public function crear()
    {
        return view('/usuario/crear');
    }

    public function guardar()
    {

        $nombre =ucfirst($_POST['nombre']);
        $email =$_POST['email'];
        $password =$_POST['password'];
        $telefono = $_POST['numero'];

        if (!$this->existe_email($email)) {
            $insertResult = $this->db_mongo->chats->usuario;
            $insertOneResult = $insertResult->insertOne(
                [
                    'nombre' => $nombre,
                    'email' => $email,
                    'password' => $password,
                    'numero' => $telefono,
                ]
            );
        } 
        $session = session();
        $session->start();
        $session->set('nombre',$nombre);
        return redirect()->to(base_url('/usuario/home'));
    }
    public function borrar($id = null)
    {
        // $usuario = new Model_user();
        $deleteResult = $this->db_mongo->chats->usuario->deleteOne(['_id' => (new \MongoDB\BSON\ObjectID($id))]);
        $lista_consulta = $this->db_mongo->chats->usuario;
        return redirect()->to(base_url('/usuario/listar'));
    }

    public function editar($id = null)
    {
        $usuarios = $this->db_mongo->chats->usuario;
        $cursor['listar'] = $usuarios->findOne(['_id' => (new \MongoDB\BSON\ObjectID($id))]);
        $cursor['cabecera'] = view('/template/cabecera');
        $cursor['pie'] = view('/template/piepagina');
        return view('/usuario/editar', $cursor);
    }
    public function actualizar()
    {
        //return var_dump($_POST);
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $telefono = $_POST['numero'];
        $id = $_POST['_id'];
        //return var_dump($_REQUEST);
        $coleccion = $this->db_mongo->chats->usuario;

        $updateResult  =  $coleccion->updateOne(
            ['_id'  => (new \MongoDB\BSON\ObjectID($id))],
            ['$set' => [
                'nombre' => $nombre,
                'email' => $email,
                'password' => $password,
                'numero' => $telefono,
            ]]
        );
        //printf ( "Coincidencia de% d documento (s) \ n " ,  $updateResult -> getMatchedCount ()); 
        //printf ( "% d documento (s) modificado (s) \ n " ,  $updateResult -> getModifiedCount ());

        return redirect()->to(base_url('/usuario/listar'));
    }

    public function login()
    {
        return view('/usuario/login');
    }
    private  function existe_email($email)
    {   

        $conn = $this->db_mongo->chats->usuario;
        $cursor['usuario'] = $conn->findOne(['email' => $email]);

        if (isset($cursor['usuario']->email) && $cursor['usuario'] != '') {
            return true;
        } else {
            return false;
        }
    }
}
