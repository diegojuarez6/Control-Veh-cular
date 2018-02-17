<?php
require_once ('./Vehiculo.php');

/**
 * Clase para identificar el tipo de Automovil
 *
 * @author Diego
 */
class Automovil extends Vehiculo{
  
        private $capacidad;
	private $tipoAuto;

	function __construct()
	{
	}

	function __destruct()
	{
	}

	public function Automovil()
	{
	}

	public function finalize()
	{
	}

        //Getters and Setters de Automovil
        function getCapacidad() {
            return $this->capacidad;
        }

        function getTipoAuto() {
            return $this->tipoAuto;
        }

        function setCapacidad($capacidad) {
            $this->capacidad = $capacidad;
        }

        function setTipoAuto($tipoAuto) {
            $this->tipoAuto = $tipoAuto;
        }
}
?>
