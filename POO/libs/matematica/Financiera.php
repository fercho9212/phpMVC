<?php
namespace Libs\Matematica;

class Financiera{
    public function tea(float $capital,float $tasa,int $periodo)
    {
        return (number_format($capita*((1+$tasa)),2));
    }

}