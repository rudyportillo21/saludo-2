<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//La clase debe llamarse igual al archivo
//Usando Herencia, extendemos la clase CI_Controller
class alumnoModel extends CI_Model {

	//Metodo que sirve para mostrar todos los sexos
	public function get_sexo(){		
		$exe = $this->db->get('sexo');
		//Retornamos los resultados guardados en la variable $exe
		return $exe->result();
	}

}

?>