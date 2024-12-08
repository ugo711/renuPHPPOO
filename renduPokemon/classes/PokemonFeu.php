<?php 

require_once 'Pokemon.php';
class PokemonFeu extends Pokemon
{
    public function capaciteSpeciale(Pokemon $adversaire = null): void {
        $bonus = $adversaire->type === 'Plante' ? 20 : 0;
        $degats = $this->puissanceAttaque + $bonus;
        $adversaire->recevoirDegats($degats);
    }
}