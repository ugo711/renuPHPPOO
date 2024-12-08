<?php

require_once 'Pokemon.php';
class PokemonPlante extends Pokemon
{
    public function capaciteSpeciale(Pokemon $adversaire = null): void {
        $bonus = $adversaire->type === 'Eau' ? 20 : 0;
        $degats = $this->puissanceAttaque + $bonus;
        $adversaire->recevoirDegats($degats);
    }
}