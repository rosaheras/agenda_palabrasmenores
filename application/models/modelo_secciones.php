<?php
/*
	Modelo Secciones
*/
class Modelo_secciones extends CI_Model {
    function __construct() {
        // Call the Model constructor
        parent::__construct();
		// Cargamos la base de datos
		$this -> load -> database();
    }

    function add_seccion ($nombre) {
        // Funcion para añadir una seccion
      // Aqui hay que poner las variables que se le pasan y que es cada una
      // Recuerda, en el modelo, comprobar que los datos que te meten
      // en los parametros estan correctos, por seguridad
        // $nombre --> Nombre de la seccion que se va a añadir
        $sql = "INSERT INTO secciones (nombre) VALUES ('" . $nombre . "')";
        $resultado = $this -> db -> query($sql);
    }

    function update_seccion ($idsecciones, $nombre) {
        // Funcion para modificar la seccion
        // $idsecciones --> Identificador de la seccion que se va a actualizar
        // $nombre      --> Nombre de la seccion que se va a actualizar
        $sql = "UPDATE secciones SET nombre='" . $nombre . "' WHERE idsecciones='" . $idsecciones."'";
        $resultado = $this -> db -> query($sql);
    }

    function del_seccion ($idsecciones) {
        // Funcion para eliminar una seccion
        // $idsecciones  --> Identificador de la seccion que se va a eliminar
        // Primero borramos las actividades y por lo tanto, primero las imagenes y los documentos de las actividades       
        
        // Borramos las imagenes
//OJO ???  // No la borramos del HD por si acaso
        $sql = "SELECT idactividades FROM actividades WHERE idseccion='" . $idsecciones."'";
        $resultado = $this -> db -> query($sql);
        foreach ($resutado->result() as $row) {
            $sql_borra_imagen = "DELETE FROM imagenes WHERE idactividad ='" . $row->idactividades."'";
            $resultado_borrado = $this -> db -> query($sql_borra_imagen);
        }        
        
        // Borramos los documentos
 //OJO ???  // No la borramos del HD por si acaso
        $sql = "SELECT idactividades FROM actividades WHERE idseccion='" . $idsecciones."'";
        $resultado = $this->db->query($sql);
        foreach ($resutado->result() as $row) {
            $sql_borra_documento = "DELETE FROM documentos WHERE idactividad ='" . $row->idactividades."'";
            $resultado_borrado = $this -> db -> query($sql_borra_documento);
        }  
        

        // Ahora borramos las actividades
        $sql = "DELETE FROM actividades WHERE idseccion='" . $idsecciones."'";
        $resultado = $this -> db -> query($sql);

        // Y por ultimo la seccion
        $sql = "DELETE FROM secciones WHERE idsecciones='" . $idsecciones."'";
        $resultado = $this -> db -> query($sql);
    }
  }
?>
