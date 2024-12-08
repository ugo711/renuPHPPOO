<?php

require_once'./Pokemon.php'
class Attaque{
    private $nom;
    private $puissance;
    private $precision;

    public function __construct(
        float $puissance
    ){
        $this->puissance = $puissance;
    }
    public function executerAttaque(Pokemon $adversaire) : float
    {
        $random = rand(1,100);
        $if($random <= $this->precision){
            $adversaire->attaquer();
            return $this->puissance;
        }
        return 0;
    }
}