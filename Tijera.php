<?php

class Tijera 
{
    public function cortar(Elemento $elemento)
    {
        return $elemento instanceof Cortable;
    }

}