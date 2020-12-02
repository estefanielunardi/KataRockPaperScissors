<?php

class Papel 
{
    public function cubrir(Elemento $elemento)
    {
        return $elemento instanceof Cubrible;
    }
}