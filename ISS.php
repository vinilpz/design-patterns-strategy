<?php

class ISS implements Imposto
{
    public function calcula(Orcamento $orcamento){
        return $orcamento->getValue() * 0.1;
    }
}