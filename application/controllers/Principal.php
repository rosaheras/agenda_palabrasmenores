<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	/**
	 * Controlador principal de Arranque
	 */
	 public function __contruct() {
		 /* Funcion de construccion del objeto */
		 parent::__construct();
                 //$this -> load -> database();
		 // Cargamos los modelos
		 /*$this -> load -> model("modelo_actividades");
		 $this -> load -> model("modelo_barrios");
		 $this -> load -> model("modelo_imagenes");
		 $this -> load -> model("modelo_documentos");
                 $this -> load -> model("modelo_usuarios");
                 $this -> load -> model("modelo_secciones");*/
                 //this -> load -> model("modelo_imagenes");
                 //$this -> load -> model("modelo_actividades");
	 }

	public function index()
	{
                $this -> load -> model("modelo_imagenes");
                $this -> load -> model("modelo_actividades");
		/* Cargamos en unos array los datos falsos */
		/*$actividad = array(
			"campanya" => "Seminci 2016",
			"actividad" => "Cazar gamusinos",
			"descripcion" => "Esta actividad es la de cazar gamusinos.<br/>Pero los gamusinos corren mucho, <strong>malditos</strong>.<br/>Ahora el mal: arrebañar, ARREBAÑAR, balcón, BALCÓN.",
			"organiza" => "Un centro civico cualquiera",
			"lugar" => "Teatro Calderon, Valladolid",
			"idbarrio" => "1",
                        "idseccion" => "1",
			"fecha" => "2017-12-11",
			"usuario" => "ignacio"
		);
		$barrio = array(
			"barrio" => "delicias"
		);
		$documentos = array(
			"idactividad" => "1",
			"rutadocumento" => "/docs/fichero.pdf",
			"descripcion" => "Un fichero dummy, que esto nos va a traer mucha tela divertida"
		);
		$imagen = array(
			"idactividad" => "1",
			"rutaimagen" => "/img/imagen.gif",
			"descripcion" => "Otro fichero dummy, en este caso una imagen"
		);
                $seccion = array(
			"seccion" => "cultura"
		);
		$usuarios = array(
			"login" => "ignacio",
			"password" => "oicangi",
			"nombre" => "El señor ignacio",
                        "idacl" => "1"
                    
		);
		/* Se lo inyectamos a los modelos */
		// Recuerda pasar las variables necesarias en cada caso ;)
		// Tambien recuerda para cada prueba, comentar los controladores que no vayas a usar
		// Como ves no te he puesto las de modificar, ya que son practicamente como un INSERT

		/*his -> modelo_usuarios -> del_usuario($usuarios['login']);
                
                $this -> modelo_secciones -> add_seccion($seccion['seccion']);
		$this -> modelo_secciones -> del_seccion();

		$this -> modelo_barrios -> add_barrio($barrio['barrio']);
		$this -> modelo_barrios -> del_barrio();

		$this -> modelo_imagenes -> add_imagen($imagen['idactividad'], $imagen['rutaimagen'],$imagen['descripcion']);
		$this -> modelo_imagenes -> del_imagen();

		$this -> modelo_documentos -> add_documento($documentos['idactividad'], $documentos['rutadocumento'], $documentos['descripcion']);
		$this -> modelo_documentos -> del_documento();

		$this -> modelo_actividades -> add_actividad($actividad['campanya'], $actividad['actividad'], $actividad['descripcion'], $actividad['organiza'], $actividad['lugar'], $actividad['idbarrio'], $actividad['idseccion'], $actividad['fecha'], $actividad['usuario']);
		$this -> modelo_actividades -> del_actividad();
		/* Llamamos a una vista llamada principal */
		echo "Hasta aqui todo ok";
                $this->modelo_actividades->dame();
                
                $this->load->view('principal');
	}
}


// Por seguridad, muchas veces no se cierra el php
// Te pongo ejemplos (como este controlador) donde no
// y ejemplos, donde si, los modelos
