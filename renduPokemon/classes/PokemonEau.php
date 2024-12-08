<?php
require_once 'Pokemon.php';
class PokemonEau extends Pokemon
{
    public function capaciteSpeciale(Pokemon $adversaire = null): void {
        $bonus = $adversaire->type === 'Feu' ? 20 : 0;
        $degats = $this->puissanceAttaque + $bonus;
        $adversaire->recevoirDegats($degats);
    }
}