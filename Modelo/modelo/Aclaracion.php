<?php
require_once ('Usuario.php');
require_once ('Incidencias.php');

/**
 * Clase para realizar una aclaracion
 *
 * @author Diego
 */
class Aclaracion {

	private $descripcion;
	private $fechaAclaracion;
	private $nombrePersona;
	public $m_Usuario;
	public $m_Incidencias;

	function __construct()
	{
	}

	function __destruct()
	{
	}

        //Getters and Setters de Aclaracion
        function getDescripcion() {
            return $this->descripcion;
        }

        function getFechaAclaracion() {
            return $this->fechaAclaracion;
        }

        function getNombrePersona() {
            return $this->nombrePersona;
        }

        function getM_Usuario() {
            return $this->m_Usuario;
        }

        function getM_Incidencias() {
            return $this->m_Incidencias;
        }

        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        function setFechaAclaracion($fechaAclaracion) {
            $this->fechaAclaracion = $fechaAclaracion;
        }

        function setNombrePersona($nombrePersona) {
            $this->nombrePersona = $nombrePersona;
        }

        function setM_Usuario($m_Usuario) {
            $this->m_Usuario = $m_Usuario;
        }

        function setM_Incidencias($m_Incidencias) {
            $this->m_Incidencias = $m_Incidencias;
        }

}
?>