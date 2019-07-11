<?php

	class Conductor{
		private $nombre;
		private $apellido;
		private $edad;
		private $registro;

		public function __construct(String $nombre, Int $edad, Int $registro)
		{
			$this->setNombre($nombre);
			$this->setEdad($edad);
			$this->setRegistro($registro);
		}

		public function setNombre (String $nombre){
			$this->nombre = $nombre;
		}

		public function getNombre (){
			return $this->nombre;
		}

		public function setApellido (String $apellido){
			$this->apellido = $apellido;
		}

		public function getApellido (){
			return $this->apellido;
		}

		public function setEdad (Int $edad){
			$this->edad = $edad;
		}

		public function getEdad (){
			return $this->edad;
		}

		public function setRegistro (Int $registro){
			$this->registro = $registro;
		}

		public function getRegistro (){
			return $this->registro;
		}

		public function conducirAuto (Auto $auto)
		{
			// $this->auto = $auto;
			return $auto->arrancar();
		}

		public function marcaAuto (Auto $auto)
		{
			return $auto->getMarca();
		}
	}
