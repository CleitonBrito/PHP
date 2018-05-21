<?php

class Conta {
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	//Contrutor
	public function Conta(){
		$this->saldo = 0;
		$this->status = false;
	}

	public function setNumConta($n){
		$this->numConta = $n;
	}

	public function getNumConta(){
		return $this->numConta;
	}

	public function setConta($conta){
		$this->numConta = $conta;
	}

	public function getConta(){
		return $this->numConta;
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;

	public function getTipo(){
		return $this->tipo;
	}

	public function setDono($dono){
		$this->dono = $dono;
	}

	public function getDono(){
		return $this->dono;
	}

	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}

	public function getSaldo(){
		return $this->saldo;
	}

	public function setStatus($status){
		$this->status = $status;
	}

	public function getStatus(){
		return $this->status;
	}


	//Procedimentos

	public function abrirConta($t){
		setTipo($t);
		setStatus(true);
			if($t=="cc"){
				setSaldo(50);
			}
			else if($t=="cp"){
				setSaldo(150);
			}
	}

	public function fecharConta(){
		if(saldo > 0){
			echo "Conta tem dinheiro";
		}
		else if(saldo < 0){
			echo "Conta em Débito";
		}
		else{
			setStatus(false);
		}
	}

	public function depositar($v){
		if(getStatus()){
			setSaldo(getSaldo() + $v);
		}else{
			echo "Impossível depositar";
		}
	}

	public function sacar($v){
		if(getStatus()){
			if(getSaldo() > $v){
				setSaldo(getSaldo() - $v);
			}
			else{
				echo "Saldo Insuficiente";
			}
		}
		else{
			echo "Impossível sacar";
		}
	}

	public function pagarMensal(){

	}
}