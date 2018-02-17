<?php
require_once ('./Usuario.php');

/**
 * Clase para la identificación de los Alumnos
 *
 * @author Diego
 */
class Alumno extends Usuario{

	private $numControl;

	function __construct()
	{
	}

	function __destruct()
	{
	}

	public function Alumno()
	{
	}

	
	public function finalize()
	{
	}
        
        //Getters and Setters de Alumno
        
        function getNumControl() {
            return $this->numControl;
        }

        function setNumControl($numControl) {
            $this->numControl = $numControl;
        }

}
?>
