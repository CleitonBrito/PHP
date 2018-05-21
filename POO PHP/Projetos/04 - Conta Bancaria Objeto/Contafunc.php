<?php

class Conta {
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;

	//Metodos

	public function abrirConta($t){
		$this->setTipo($t);
		$this->setStatus(true);
			if($t=="cc"){
				$this->setSaldo(50);
			}
			else if($t=="cp"){
				$this->setSaldo(150);
			}
	}

	public function fecharConta(){
		if($this->getSaldo() > 0){
			echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
		}
		else if($this->getSaldo() < 0){
			echo "<p>Conta está em débito. Impossível encerrar</p>";
		}
		else{
			$this->setStatus(false);
			echo "<p>Conta de {$this->getDono()} fechada com sucesso.</p>";
		}
	}

	public function depositar($v){
		if($this->getStatus()){
			$this->setSaldo($this->getSaldo() + $v);
			echo "<p>Depósito de R$ $v na conta de {$this->getDono()}</p>";
		}else{
			echo "<p>Conta fechada. Não consigo depositar.</p>";
		}
	}

	public function sacar($v){
		if($this->getStatus()){
			if($this->getSaldo() >= $v){
				$this->setSaldo($this->getSaldo() - $v);
				echo "<p>Saque de R$ $v autorizado na conta de {$this->getDono()}</p>";
			}
			else{
				echo "<p>Saldo Insuficiente para saque.</p>";
			}
		}
		else{
			echo "<p>Não posso sacar de uma conta fechada.</p>";
		}
	}

	public function pagarMensal(){
		$v;
		if($this->getTipo() == "cc"){
			$v = 12;
		}
		else if($this->getTipo() == "cp"){
			$v = 20;
		}
		if($this->getStatus()){
			if($this->getSaldo() > $v){
				$this->setSaldo($this->getSaldo() - $v);
				echo "<p>Mensalidade de R$ $v debitada na conta de {$this->getDono()}</p>";
			}
			else{
				echo "<p>Saldo insufuciente</p>";
			}
		}
		else{
			echo "<p>Impossível pagar</p>";
		}
	}

	//Contrutor
	public function __construct(){
		$this->setSaldo(0);
		$this->setStatus(false);
		echo "<p>Conta criada com sucesso!</p>";
	}
	//
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
	}

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

}