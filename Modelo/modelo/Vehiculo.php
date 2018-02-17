<?php


/**
 * Clase para identificar el tipo de Vehículo
 *
 * @author Diego
 */
class Vehiculo {

	private $color;
	private $licencia;
	private $marca;
	private $modelo;
	private $placa;
	private $tarjetaCirculacion;

	function __construct()
	{
	}

	function __destruct()
	{
	}



	public function Vehiculo()
	{
	}

	public function finalize()
	{
	}
        
        //Getters and Setters de Vehículo
        
        function getColor() {
            return $this->color;
        }

        function getLicencia() {
            return $this->licencia;
        }

        function getMarca() {
            return $this->marca;
        }

        function getModelo() {
            return $this->modelo;
        }

        function getPlaca() {
            return $this->placa;
        }

        function getTarjetaCirculacion() {
            return $this->tarjetaCirculacion;
        }

        function setColor($color) {
            $this->color = $color;
        }

        function setLicencia($licencia) {
            $this->licencia = $licencia;
        }

        function setMarca($marca) {
            $this->marca = $marca;
        }

        function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        function setPlaca($placa) {
            $this->placa = $placa;
        }

        function setTarjetaCirculacion($tarjetaCirculacion) {
            $this->tarjetaCirculacion = $tarjetaCirculacion;
        }

}
?>
