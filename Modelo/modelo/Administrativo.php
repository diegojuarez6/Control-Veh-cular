<?php
require_once ('Usuario.php');


/**
 * Clase para administrar a los empleados
 *
 * @author Diego
 */
class Administrativo extends Usuario{

	private $numEmpleado;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function Administrativo()
	{
	}

	
	public function finalize()
	{
	}

        //Getters and Setters de Administrativo        
        function getNumEmpleado() {
            return $this->numEmpleado;
        }

        function setNumEmpleado($numEmpleado) {
            $this->numEmpleado = $numEmpleado;
        }

}
?>
