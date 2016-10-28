<?
/*
	Modelo Documentos
*/
class modelo_documentos extends CI_Model {
    function __construct() {
        // Call the Model constructor
        parent::__construct();
		// Cargamos la base de datos
		$this -> load -> database();
    }

    function add_documento () {
      // Funcion para añadir una actividad
      // Aqui hay que poner las variables que se le pasan y que es cada una
      // Recuerda, en el modelo, comprobar que los datos que te meten
      // en los parametros estan correctos, por seguridad
    }

    function update_documento () {
      // Funcion para modificar una actividad
    }

    function del_documento () {
      // Funcion para eliminar una actividad
    }
  }
?>
