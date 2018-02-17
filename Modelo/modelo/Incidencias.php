<?php
require_once ('./Guardia.php');
require_once ('./Vehiculo.php');
/**
 * Clase para reportar una incidencia en caso de anomalia
 *
 * @author Diego
 */
class Incidencias {

	private $descripcion;
	private $fechaIncidencia;
	private $nombrePer;
	public $m_Guardia;
	public $m_Vehiculo;

	function __construct()
	{
	}

	function __destruct()
	{
	}
        
        //Getters and Setters de Incidencias
        function getDescripcion() {
            return $this->descripcion;
        }

        function getFechaIncidencia() {
            return $this->fechaIncidencia;
        }

        function getNombrePer() {
            return $this->nombrePer;
        }

        function getM_Guardia() {
            return $this->m_Guardia;
        }

        function getM_Vehiculo() {
            return $this->m_Vehiculo;
        }

        function setDescripcion($descripcion) {
            $this->descripcion = $descripcion;
        }

        function setFechaIncidencia($fechaIncidencia) {
            $this->fechaIncidencia = $fechaIncidencia;
        }

        function setNombrePer($nombrePer) {
            $this->nombrePer = $nombrePer;
        }

        function setM_Guardia($m_Guardia) {
            $this->m_Guardia = $m_Guardia;
        }

        function setM_Vehiculo($m_Vehiculo) {
            $this->m_Vehiculo = $m_Vehiculo;
        }


}
?>
