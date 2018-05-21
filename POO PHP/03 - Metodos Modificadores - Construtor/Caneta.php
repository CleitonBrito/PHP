<?php

class Caneta {
	private $modelo;
	private $cor;
	private $ponta;
	private $tampada;

	public function __construct($m, $c, $p){ /*Método construtor: __construct ou com o próprio nome da classe.*/
		$this->modelo = $m;
		//OU $this->setModelo($m); Caso eu tivesse o getModelo;
		$this->cor = $c;
		$this->ponta = $p;
		$this->tampar();
	}

	public function tampar(){
		$this->tampada = true;
	}
}
