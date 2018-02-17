<?php
require_once ('./Vehiculo.php');
/**
 * Clase para la descripción de una Bicicleta
 *
 * @author Diego
 */
class Bicicleta extends Vehiculo{

	private $electrica;
	private $tamaño;
	private $tipoAsiento;
	private $tipoManublios;
	private $tipoRodado;

	function __construct()
	{
	}

	function __destruct()
	{
	}

        
	public function Bicicleta()
	{
	}

	
	public function finalize()
	{
	}
        
        //Getters and Setters de Bicicleta

        function getElectrica() {
            return $this->electrica;
        }

        function getTamaño() {
            return $this->tamaño;
        }

        function getTipoAsiento() {
            return $this->tipoAsiento;
        }

        function getTipoManublios() {
            return $this->tipoManublios;
        }

        function getTipoRodado() {
            return $this->tipoRodado;
        }

        function setElectrica($electrica) {
            $this->electrica = $electrica;
        }

        function setTamaño($tamaño) {
            $this->tamaño = $tamaño;
        }

        function setTipoAsiento($tipoAsiento) {
            $this->tipoAsiento = $tipoAsiento;
        }

        function setTipoManublios($tipoManublios) {
            $this->tipoManublios = $tipoManublios;
        }

        function setTipoRodado($tipoRodado) {
            $this->tipoRodado = $tipoRodado;
        }
}
?>
