<?php
	// declare(strict_types = 1); // Solo para PHP < v6

	class Auto {
		private $marca;
		private $modelo;
		private $color;
		private $motor;

		public function __construct (String $unaMarca, Int $unModelo, String $unColor = null) {
			$this->setMarca($unaMarca);
			$this->setModelo($unModelo);
			if ($unColor) {
				$this->setColor($unColor);
			}
		}

		public function setMarca (String $texto) {
			if (strlen($texto) > 3) {
				$this->marca = $texto;
			}
		}

		public function setColor (String $color) {
			$this->color = $color;
		}

		public function getMarca () : String {
			return $this->marca;
		}

		// Hacemos Type Hinting para que el parámetro SI o SI sea un Integer
		public function setModelo (Int $anio) {
			$this->modelo = $anio;
		}

		public function getModelo () : Int {
			return $this->modelo;
		}

		public function arrancar () {
			return 'Runnn Runnn';
		}
	}
