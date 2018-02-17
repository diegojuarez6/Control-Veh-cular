<?php
require_once ('./CajonEstacionamiento.php');

/**
 * Clase para controlar el acceso de cada usuario
 *
 * @author Diego
 */
class ControlAcceso {
    
	private $fecha;
	private $horaEntrada;
	private $horaSalida;
	public $m_CajonEstacionamiento;

	function __construct()
	{
	}

	function __destruct()
	{
	}
        
        //Getters and Setters de Control de acceso
        function getFecha() {
            return $this->fecha;
        }

        function getHoraEntrada() {
            return $this->horaEntrada;
        }

        function getHoraSalida() {
            return $this->horaSalida;
        }

        function getM_CajonEstacionamiento() {
            return $this->m_CajonEstacionamiento;
        }

        function setFecha($fecha) {
            $this->fecha = $fecha;
        }

        function setHoraEntrada($horaEntrada) {
            $this->horaEntrada = $horaEntrada;
        }

        function setHoraSalida($horaSalida) {
            $this->horaSalida = $horaSalida;
        }

        function setM_CajonEstacionamiento($m_CajonEstacionamiento) {
            $this->m_CajonEstacionamiento = $m_CajonEstacionamiento;
        }

}
?>
