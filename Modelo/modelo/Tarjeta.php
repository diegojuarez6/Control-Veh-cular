<?php
require_once ('./CajonEstacionamiento.php');
/**
 * Clase para identificar las Tarjetas de acceso
 *
 * @author Diego
 */
class Tarjeta {

	private $codigo;
	public $m_CajonEstacionamiento;

	function __construct()
	{
	}

	function __destruct()
	{
	}
        
        //Getters and Setters de Tarjeta
        
        function getCodigo() {
            return $this->codigo;
        }

        function getM_CajonEstacionamiento() {
            return $this->m_CajonEstacionamiento;
        }

        function setCodigo($codigo) {
            $this->codigo = $codigo;
        }

        function setM_CajonEstacionamiento($m_CajonEstacionamiento) {
            $this->m_CajonEstacionamiento = $m_CajonEstacionamiento;
        }



}
?>
