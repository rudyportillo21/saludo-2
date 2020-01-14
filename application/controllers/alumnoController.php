<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//La clase debe llamarse igual al archivo
//Haciendo uso de la HERENCIA, agregamos la clase CI_Controller
class alumnoController extends CI_Controller {

	//Metodo constructor que nos ayudara a ejecutar acciones necesarias para el funcionamiento
	public function __construct(){
		//este constructor activa el constructor de la clase CI_Controller
		//parent:: sirve para llamar metodos heredados si hubiera alguno llamado igual al de la clase hijo
		parent:: __construct();
		//Cargamos el archivo Modelo
		$this->load->model('alumnoModel');
	}


	public function index(){
		//Creamos un arreglo que tendra EL O LOS llamado/s a los metodos del modelo que se ocuparan en la vista  
		$datos['sexo']    = $this->alumnoModel->get_sexo();

		//Cargamos la vista y le pasamos el arreglo (en este caso llamado $data)
		$this->load->view('alumnoView',$datos);
	}

	public function ingresar(){
		//Recibimos los parametros enviados desde la vista y los guardamos en un arreglo
		$datos['nombre']   = $_POST['nombre'];
		$datos['apellido'] = $_POST['apellido'];
		$datos['edad']     = $_POST['edad'];
		$datos['sexo']     = $_POST['sexo'];

		echo "Los datos fueron validados exitosamente!!! Ya casi te ama!!";
	}

}

?>