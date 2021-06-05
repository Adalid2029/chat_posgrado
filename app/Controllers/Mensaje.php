<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use PhpParser\JsonDecoder;
use PHPUnit\Util\Json;
use MongoDB\BSON\ObjectID;
use CodeIgniter\View;

class Mensaje extends BaseController
{
   public function index()
    {
    }
//listar los datos
    public function listar()
    {
        $mensajes = $this->db_mongo->chats->mensaje;
        $cursor['cabecera']=view('/template/cabecera');
        $cursor['pie']=view('/template/piepagina');
        $cursor['listar'] = $mensajes->find()->toArray();
        //var_dump($cursor);
        return view('/mensaje/listar', $cursor);
    }
    public function chat(){
        $usuarios = $this->db_mongo->chats->usuario;
        $cursor['user'] = $usuarios->find()->toArray();
        //var_dump($cursor['listar']);
        return view('/mensaje/chat',$cursor);
        }
        
    public function crear()
    {   
         return view('/mensaje/crear'); 
    }

    public function guardar()
    {
        $nombre=$_POST['nombre'];
        $fecha=$_POST['fecha'];
        $mensaje=$_POST['mensaje'];

        $insertResult = $this->db_mongo->chats->mensaje;
        $insertOneResult = $insertResult->insertOne([
                'nombre' => $nombre,
                'fecha' => $fecha,
                'mensaje' => $mensaje,
            ]
        );
        return redirect()->to(base_url('/mensaje/listar'));
    }
    public function borrar($id = null)
    {
        $deleteResult = $this->db_mongo->chats->mensaje->deleteOne(['_id' => (new \MongoDB\BSON\ObjectID($id))]);
        $lista_consulta = $this->db_mongo->chats->mensaje;
        return redirect()->to(base_url('/mensaje/listar'));
    }

    public function editar($id = null)
    {
        $mensajes = $this->db_mongo->chats->mensaje;
        $cursor['listar'] = $mensajes->findOne(['_id' => (new \MongoDB\BSON\ObjectID($id))]);
        $cursor['cabecera']=view('/template/cabecera');
        $cursor['pie']=view('/template/piepagina');
        return view('/mensaje/editar', $cursor);
        
    }
    public function actualizar()
    {
        $nombre=$_POST['nombre'];
        $fecha=$_POST['fecha'];
        $mensaje=$_POST['mensaje'];
        $id=$_POST['_id'];
        //return var_dump($_REQUEST);
        $coleccion = $this->db_mongo->chats->mensaje;

        $updateResult  =  $coleccion -> updateOne ( 
            [ '_id'  =>   (new \MongoDB\BSON\ObjectID($id)) ], 
            ['$set'=>[
                'nombre' => $nombre,
                'fecha' => $fecha,
                'mensaje' => $mensaje,
            ]]
        );

        return redirect()->to(base_url('/mensaje/listar'));
    }
 
     public function login()
    {
        $conn = $this->db_mongo->chats->usuario;
        $email = $_POST["correo"];
        $password = $_POST["password"];

        $cursor['usuario'] = $conn->findOne(['email' => $email]);

        if (isset($cursor['usuario']->password) && $cursor['usuario']->password == $password) {
            //$cursor['usuario']->rol ==1
            if (false) {
                return redirect()->to(base_url('/usuario/listar'));
            }else{
                //$session = \Config\Services::session();
                $session = session();
                $session->start();
                $session->set('nombre',$cursor['usuario']->nombre);
                return view('/usuario/home');
            }
            

        
        } else {
            return redirect()->to(base_url('/usuario/login'));
         
        }
    }
  

}
