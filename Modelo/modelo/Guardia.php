<?php
require_once ('./ControlAcceso.php');
require_once ('./CajonEstacionamiento.php');
/**
 * Clase para descripcion de un Guardia
 *
 * @author Diego
 */
class Guardia {
    
	private $direccion;
	private $noEmpleado;
	private $nombreGuardia;
	private $telefono;
	public $m_ControlAcceso;
	public $m_CajonEstacionamiento;

	function __construct()
	{
	}

	function __destruct()
	{
	}


	public function realizarControlInterno()
	{
	}

	public function registrar()
	{
	}

	public function reportarIncidencias()
	{
	}

        //Getters and Setters de Guardia
        function getDireccion() {
            return $this->direccion;
        }

        function getNoEmpleado() {
            return $this->noEmpleado;
        }

        function getNombreGuardia() {
            return $this->nombreGuardia;
        }

        function getTelefono() {
            return $this->telefono;
        }

        function getM_ControlAcceso() {
            return $this->m_ControlAcceso;
        }

        function getM_CajonEstacionamiento() {
            return $this->m_CajonEstacionamiento;
        }

        function setDireccion($direccion) {
            $this->direccion = $direccion;
        }

        function setNoEmpleado($noEmpleado) {
            $this->noEmpleado = $noEmpleado;
        }

        function setNombreGuardia($nombreGuardia) {
            $this->nombreGuardia = $nombreGuardia;
        }

        function setTelefono($telefono) {
            $this->telefono = $telefono;
        }

        function setM_ControlAcceso($m_ControlAcceso) {
            $this->m_ControlAcceso = $m_ControlAcceso;
        }

        function setM_CajonEstacionamiento($m_CajonEstacionamiento) {
            $this->m_CajonEstacionamiento = $m_CajonEstacionamiento;
        }

}
?>