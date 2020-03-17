<?php
class Caneta {
    // Atributos

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    // Métodos
    public function rabiscar() {

        if ($this->tampada == true) {
            echo "Não posso rabiscar";
        } else {
            echo "Estou rabiscando...";
        }   
    }

    public function tampar() {

        $this->tampada = true;
    }

    private function destampar() {
        
        $this->tampada = false;
    }
}