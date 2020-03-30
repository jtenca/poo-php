<?php

interface Controlador {
    /* 
        O abstract quer dizer que o método não será desenvolvido no Controlador, 
        e sim, na Classe
     */

    public abstract function ligar(); 
    public abstract function desligar();
    public abstract function abrirMenu();
    public abstract function fecharMenu();
    public abstract function maisVolume();
    public abstract function menosVolume();
    public abstract function ligarMudo();
    public abstract function desligarMudo();
    public abstract function play();
    public abstract function pause();


}