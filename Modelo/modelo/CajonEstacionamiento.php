<?php
require_once ('./Usuario.php');
require_once ('./Vehiculo.php');


/**
 * Clase para identificar el CajonEstacionamiento
 *
 * @author Diego
 */
class CajonEstacionamiento {

	private $numCajon;
	public $m_Usuario;
	public $m_Vehiculo;

	function __construct()
	{
	}

	function __destruct()
	{
	}

        //Getters and Setters de Cajon de Estacionamiento
        function getNumCajon() {
            return $this->numCajon;
        }

        function getM_Usuario() {
            return $this->m_Usuario;
        }

        function getM_Vehiculo() {
            return $this->m_Vehiculo;
        }

        function setNumCajon($numCajon) {
            $this->numCajon = $numCajon;
        }

        function setM_Usuario($m_Usuario) {
            $this->m_Usuario = $m_Usuario;
        }

        function setM_Vehiculo($m_Vehiculo) {
            $this->m_Vehiculo = $m_Vehiculo;
        }


}
?>
