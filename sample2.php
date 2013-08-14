<?php

namespace hola\mundo{
	//
	class HolaMundo {
		public function hi(){
			echo "Hola Mundo \r\n";
		}
	}

	function holaMundo(){
		echo "Hola Mundo \r\n";
	}

	const HOLA_MUNDO = "Hola Mundo \r\n";

	# llamamos a la clase directamente
	$hola = new HolaMundo;
	$hola->hi();

	# llamamos a la funcion directamente
	holaMundo();

	# llamamos a la contante directamente
	echo HOLA_MUNDO;

	# llamamos a la clase usando namespaces
	$hola = new \hola\mundo\HolaMundo;
	$hola->hi();

	# llamamos a la funcion usando namespaces
	\hola\mundo\holaMundo();

	# llamamos a la contante usando namespaces
	echo \hola\mundo\HOLA_MUNDO;
}


namespace hello\world{
	//
	class HolaMundo {
		public function hi(){
			echo "Hola Mundo \r\n";
		}
	}

	function holaMundo(){
		echo "Hola Mundo \r\n";
	}

	const HOLA_MUNDO = "Hola Mundo \r\n";
	
	# llamamos a la clase directamente
	$hola = new HolaMundo;
	$hola->hi();

	# llamamos a la funcion directamente
	holaMundo();

	# llamamos a la contante directamente
	echo HOLA_MUNDO;

	# llamamos a la clase usando namespaces
	$hola = new \hola\mundo\HolaMundo;
	$hola->hi();

	# llamamos a la funcion usando namespaces
	\hola\mundo\holaMundo();

	# llamamos a la contante usando namespaces
	echo \hola\mundo\HOLA_MUNDO;
}

