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
        $cursor['cabecera'] = view('/template/cabecera');
        $cursor['pie'] = view('/template/piepagina');
        $cursor['listar'] = $mensajes->find()->toArray();
        //var_dump($cursor);
        return view('/mensaje/listar', $cursor);
    }
    public function chat($id_contacto = 0)
    {
        $usuarios = $this->db_mongo->chats->usuario;
        $mensaje = $this->db_mongo->chats->mensaje;
        $cursor['user'] = $usuarios->find()->toArray();

        if (strlen($id_contacto) > 15) {
            $session = session();
            $session->start();
            $idremitente = $session->get('_ideuser');
            $cursor['contacto'] = $usuarios->findOne(['_id' => (new \MongoDB\BSON\ObjectID($id_contacto))]);
            $enviado=$mensaje->find(
                [
                    'id_remitente' => (new \MongoDB\BSON\ObjectID($idremitente)),
                    'id_destinatario' => (new \MongoDB\BSON\ObjectID($id_contacto))

                ]
            )->toArray();
            $recibido=$mensaje->find(
                [
                    'id_remitente' => (new \MongoDB\BSON\ObjectID($id_contacto)),
                    'id_destinatario' => (new \MongoDB\BSON\ObjectID($idremitente)),
                ]
            )->toArray();
            
            $session->set('n_recibido',count($recibido));
           
            $arrayunido=array_merge($enviado,$recibido);
             usort($arrayunido, function ($a, $b){
                return strtotime(trim($a['fecha'].$a['hora'])) > strtotime(trim($b['fecha'].$b['hora']));
             });
             //var_dump($arrayunido);
             $cursor['mensajes'] =$arrayunido;
            //var_dump($cursor['mensajes']);
        }
        return view('/mensaje/chat',$cursor);

    }
    

    public function crear()
    {
        return view('/mensaje/crear');
    }

    public function guardar()
    {
        $mensaje = $_POST['mensaje'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $remitente = $_POST['id_remitente'];
        $destinatario = $_POST['id_destinatario'];

        $insertResult = $this->db_mongo->chats->mensaje;
        $insertOneResult = $insertResult->insertOne(
            [
                'mensaje' => $mensaje,
                'fecha' => $fecha,
                'hora' => $hora,
                'id_remitente' => $remitente,
                'id_destinatario' => $remitente,
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
        return view('/mensaje/editar', $cursor);
    }
    public function actualizar()
    {
        $mensaje = $_POST['mensaje'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $remitente = $_POST['id_remitente'];
        $destinatario = $_POST['id_destinatario'];
        $id = $_POST['_id'];
        //return var_dump($_REQUEST);
        $coleccion = $this->db_mongo->chats->mensaje;

        $updateResult  =  $coleccion->updateOne(
            ['_id'  => (new \MongoDB\BSON\ObjectID($id))],
            ['$set' => [
                'mensaje' => $mensaje,
                'fecha' => $fecha,
                'hora' => $hora,
                'id_remitente' => $remitente,
                'id_destinatario' => $destinatario,
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
            } else {
                //$session = \Config\Services::session();
                $session = session();
                $session->start();
                $session->set('nombre', $cursor['usuario']->nombre);
                return view('/usuario/home');
            }
        } else {
            return redirect()->to(base_url('/usuario/login'));
        }
    }
    public function crearMensaje()
    {
        //var_dump($_POST);
        $session = session();
        $session->start();


        $mensaje = $_POST['mensaje'];
        $fecha = date('d-m-Y');
        $hora = date('H:i:s');
        $remitente = $session->get('_ideuser');
        $destinatario = (new \MongoDB\BSON\ObjectID($_POST['_idcontacto']));

        $insertResult = $this->db_mongo->chats->mensaje;
        $insertOneResult = $insertResult->insertOne(
            [
                'mensaje' => $mensaje,
                'fecha' => $fecha,
                'hora' => $hora,
                'id_remitente' => $remitente,
                'id_destinatario' => $destinatario,
            ]
        );
        return redirect()->to(base_url('/mensaje/chat/' . $_POST['_idcontacto']));
    }
    public function chatjquery($id_contacto = 0)
    {
        $usuarios = $this->db_mongo->chats->usuario;
        $mensaje = $this->db_mongo->chats->mensaje;
        $cursor['user'] = $usuarios->find()->toArray();


        if (strlen($id_contacto) > 15) {
            $session = session();
            $session->start();
            $idremitente = $session->get('_ideuser');
            $cursor['contacto'] = $usuarios->find(['_id' => (new \MongoDB\BSON\ObjectID($id_contacto))]);
            $recibido=$mensaje->find(
                [
                    'id_remitente' => (new \MongoDB\BSON\ObjectID($id_contacto)),
                    'id_destinatario' => (new \MongoDB\BSON\ObjectID($idremitente)),
                ]
            )->toArray();
            if (count($recibido)>$session->n_recibido) {
                $respuesta['msj']=end($recibido);

                $recibido=$mensaje->find(
                    [
                        'id_remitente' => (new \MongoDB\BSON\ObjectID($id_contacto)),
                        'id_destinatario' => (new \MongoDB\BSON\ObjectID($idremitente)),
                    ]
                )->toArray();
                $session->set('n_recibido',count($recibido));
            }else{
                $respuesta['msj']=0;
            }
             //var_dump($arrayunido);
            //var_dump($cursor['mensajes']);
        }else{
            $respuesta['msj']=0;
        }
        echo json_encode($respuesta);

    }
}
