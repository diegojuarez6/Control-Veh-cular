<?php
require_once ('./Vehiculo.php');

/**
 * Clase para describir una moto
 *
 * @author Diego 
 */
class Moto extends Vehiculo{

	private $dimensiones;
	private $noLlantas;
	private $noPasajeros;
	private $tipo;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function Moto()
	{
	}

	
	public function finalize()
	{
	}
        
        //Getters and Setters de Moto
        function getDimensiones() {
            return $this->dimensiones;
        }

        function getNoLlantas() {
            return $this->noLlantas;
        }

        function getNoPasajeros() {
            return $this->noPasajeros;
        }

        function getTipo() {
            return $this->tipo;
        }

        function setDimensiones($dimensiones) {
            $this->dimensiones = $dimensiones;
        }

        function setNoLlantas($noLlantas) {
            $this->noLlantas = $noLlantas;
        }

        function setNoPasajeros($noPasajeros) {
            $this->noPasajeros = $noPasajeros;
        }

        function setTipo($tipo) {
            $this->tipo = $tipo;
        }

}
?>
