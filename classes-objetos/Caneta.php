<?php
// Classes e Objetos

class Caneta {
    // Atributos

    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    // Métodos
    function rabiscar() {

        if ($this->tampada == true) {
            echo "Não posso rabiscar";
        } else {
            echo "Estou rabiscando...";
        }   
    }

    function tampar() {

        $this->tampada = true;
    }

    function destampar() {
        
        $this->tampada = false;
    }
}