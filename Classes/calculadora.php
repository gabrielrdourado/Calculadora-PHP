<?php 
	class Calculadora{
	    
	    private $total;
	    private $numero1;
	    private $numero2;

	    function __construct(){
	    	$this->total = 0;
	    	$this->numero1 = 0;
	    	$this->numero2 = 0;
	    }

	    //getters e setters
	    public function setNumero1($tmp_numero1){
	    	$this->numero1 = $tmp_numero1;
	    }
	    public function setNumero2($tmp_numero2){
	    	$this->numero2 = $tmp_numero2;
	    }

	    public function getNumero1(){
	    	return $this->numero1;
	    }
	    public function getNumero2(){
	    	return $this->numero2;
	    }
	    public function getTotal(){
	    	return $this->total;
	    }

	    //operacoes
	    public function somar(){
	    	$this->total = $this->numero1+$this->numero2;
	    }
	    public function subtrair(){
	    	$this->total = $this->numero1-$this->numero2;
	    }
	    public function multiplicar(){
	    	$this->total = $this->numero1*$this->numero2;
	    }
	    public function dividir(){
	    	$this->total=  $this->numero1/$this->numero2;
	    }
	}
?>