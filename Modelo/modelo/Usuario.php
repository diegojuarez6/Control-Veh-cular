<?php
require_once ('./Vehiculo.php');

/**
 * Clase para la identificacion del Usuario
 *
 * @author Diego
 */
class Usuario {

	private $correoElectronico;
	public $m_Vehiculo;
	private $nombreCompleto;
	private $numeroTelefono;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function Usuario()
	{
	}

	
	public function finalize()
	{
	}

	public function realizaAclaracion()
	{
	}
        
        //Getters and Setters de Usuario

        function getCorreoElectronico() {
            return $this->correoElectronico;
        }

        function getM_Vehiculo() {
            return $this->m_Vehiculo;
        }

        function getNombreCompleto() {
            return $this->nombreCompleto;
        }

        function getNumeroTelefono() {
            return $this->numeroTelefono;
        }

        function setCorreoElectronico($correoElectronico) {
            $this->correoElectronico = $correoElectronico;
        }

        function setM_Vehiculo($m_Vehiculo) {
            $this->m_Vehiculo = $m_Vehiculo;
        }

        function setNombreCompleto($nombreCompleto) {
            $this->nombreCompleto = $nombreCompleto;
        }

        function setNumeroTelefono($numeroTelefono) {
            $this->numeroTelefono = $numeroTelefono;
        }
}
?>
