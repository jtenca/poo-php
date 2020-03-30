<?php

interface Controlador {
    /* 
        O abstract quer dizer que o método não será desenvolvido no Controlador, 
        e sim, na Classe
     */

    public function ligar(); 
    public function desligar();
    public function abrirMenu();
    public function fecharMenu();
    public function maisVolume();
    public function menosVolume();
    public function ligarMudo();
    public function desligarMudo();
    public function play();
    public function pause();


}