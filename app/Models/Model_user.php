<?php 
namespace App\Models;

use CodeIgniter\Model;

class Model_user extends Model{
 
	function __construct() {
		parent::__construct();
		print "En el constructor BaseClass\n";
	}
   function listar_usuario(){
        $lista_consulta = $this->db_mongo->chats->usuario;
        $lista_consulta->find()->toArray();
        return $lista_consulta;
    }
}
