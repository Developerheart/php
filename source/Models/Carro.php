<?php


namespace source\Models;


use CoffeeCode\DataLayer\DataLayer;

class Carro extends DataLayer
{


    public function __construct()
    {
        parent::__construct('carros', [], 'id', false);
    }


    public function add(string $marca, string $modelo, string $cor, string $placa){


        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->plca = $placa;
        $this->save();

    }


}