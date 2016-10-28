<?
/*
	Modelo Imagenes
*/
class Modelo_imagenes extends CI_Model {
    function __construct() {
        // Call the Model constructor
        parent::__construct();
		// Cargamos la base de datos
		$this -> load -> database();
    }

    function add_imagen () {
      // Funcion para añadir una actividad
      // Aqui hay que poner las variables que se le pasan y que es cada una
      // Recuerda, en el modelo, comprobar que los datos que te meten
      // en los parametros estan correctos, por seguridad
    }

    function update_imagen () {
      // Funcion para modificar una actividad
    }

    function del_imagen () {
      // Funcion para eliminar una actividad
    }
  }
?>
