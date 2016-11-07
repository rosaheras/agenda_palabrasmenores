<?php
/*
	Modelo Actividades
*/
class Modelo_actividades extends CI_Model {
    function __construct() {
        // Call the Model constructor
        parent::__construct();
		// Cargamos la base de datos
		$this -> load -> database();
    }
    
    public function entro() {
        echo "ESTOT ENTRANDO";
        return true;
    }
    
    public function dame () {
        echo "Enytro en el modelo";
        $sql="delete from imagenefffffs where idactividad=1";
        echo "<br/>".$sql."<br/>";
        $resultado = $this -> db -> query($sql);
        
        echo $resultado;
    }
  }
?>
