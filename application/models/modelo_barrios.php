<?
/*
	Modelo Barrios
*/
class modelo_barrios extends CI_Model {
    function __construct() {
        // Call the Model constructor
        parent::__construct();
		// Cargamos la base de datos
		$this -> load -> database();
    }

    function add_barrio () {
      // Funcion para añadir una actividad
      // Aqui hay que poner las variables que se le pasan y que es cada una
      // Recuerda, en el modelo, comprobar que los datos que te meten
      // en los parametros estan correctos, por seguridad
    }

    function update_barrio () {
      // Funcion para modificar una actividad
    }

    function del_barrio () {
      // Funcion para eliminar una actividad
    }
  }
?>
