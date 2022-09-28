<?php
    class ContaBanco{
        //Atributos
       public $numConta;
       protected $tipo;
       private $dono;
       private $saldo;
       private $status;
       //métodos
       public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t=="cc"){
            $this->setSaldo(50);
        }elseif($t=="cp"){
            $this->saldo=150;
        }
       }
       public function fecharConta(){
        if ($this->getSaldo()>0){
            echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
        }elseif ($this->getSaldo()<0){
            echo "<p>Conta em débito, impossível encerrar</p>";
        }else{
            $this->setStatus(false);
            echo "<p>conta de " . $this->getDono() . " fechada com sucesso</p>";
        }
       }
       public function depositar($v){
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo()+$v);
            //$this->saldo=$this->saldo+v;
            echo "<p>Depósito de R$ $v na conta de " . $this->getDono() . "</p>";
        }else{
            echo "<p>Conta fechada, não consigo depositar.</p>";
        }
       }
       public function sacar($v){
        if($this->getStatus()){
          if ($this->getSaldo()>=$v){
            //$this->saldo=$this->saldo-$v;
            $this->setSaldo($this->getSaldo()-$v);
            echo "<p>saque de R$ $v autorizado na conta de " . $this->getDono()."</p>";
          }else{
            echo "<p>Saldo insuficiente para saque.</p>";
          }  
        }else{
          echo "<p>Não posso sacar de uma conta fechada.</p>";  
        }
       }       
       public function pagarMensal(){
        if ($this->getTipo()=="cc"){
            $v=12;
        }else if ($this->getTipo("CP")){
            $v=20;
        }
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo()-$v);
            echo "<p>Mensalidade de R$ $v debitada na conta de " . $this->getDono() . "</p>";
        }else{
            echo "<p>Problemas com a conta. Não posso cobrar</p>";
        }
       }
       //métodos especiais
       public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso</p>";
       }
       public function getnumConta(){
        return $this->numConta;
       }
       public function getTipo(){
        return $this->tipo;
       }
       public function getDono(){
        return $this->dono;
       }
       public function getSaldo(){
        return $this->saldo;
       }
       public function getStatus(){
        return $this->status;
       }
       public function setNumConta($numConta){
        $this->numConta=$numConta;
       }
       public function setTipo($tipo){
        $this->tipo=$tipo;
       }
       public function setDono($dono){
        $this->dono=$dono;
       }
       public function setSaldo($saldo){
        $this->saldo=$saldo;
       }
       public function setStatus($status){
        $this->status=$status;
       }
    }
?>