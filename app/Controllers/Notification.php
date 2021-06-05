<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use PhpParser\JsonDecoder;
use PHPUnit\Util\Json;
use MongoDB\BSON\ObjectID;
use CodeIgniter\View;

class Notification extends BaseController
{
   public function index()
    {
    }
//listar los datos
    public function listar()
    {
        $notificacion = $this->db_mongo->chats->notification;
        $cursor['cabecera']=view('/template/cabecera');
        $cursor['pie']=view('/template/piepagina');
        $cursor['listar'] = $notificacion->find()->toArray();
        //var_dump($cursor);
        return view('/notification/listar', $cursor);
    }

    public function crear()
    {   
         return view('/notification/crear'); 
    }

    public function guardar()
    {
        
        $notificacion=$_POST['notificacion'];
        $insertResult = $this->db_mongo->chats->notification;
        $insertOneResult = $insertResult->insertOne([
                'notificacion' => $notificacion,
            ]
        );
        return redirect()->to(base_url('/notification/listar'));
    }
    public function borrar($id = null)
    {
        $deleteResult = $this->db_mongo->chats->notification->deleteOne(['_id' => (new \MongoDB\BSON\ObjectID($id))]);
        $lista_consulta = $this->db_mongo->chats->notification;
        return redirect()->to(base_url('/notification/listar'));
    }

}
