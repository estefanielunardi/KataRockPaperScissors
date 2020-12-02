<?php

class Piedra
{
    public function aplastar(Elemento $elemento)
    {
        return $elemento instanceof Aplastable;
    }
}