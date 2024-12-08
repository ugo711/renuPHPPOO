<?php

require_once 'PokemonFeu.php';
require_once 'PokemonEau.php';
require_once 'PokemonPlante.php';
require_once 'Pokemon.php';

class Combat
{
    private Pokemon $pokemon1;
    private Pokemon $pokemon2;

    public function __construct(Pokemon $pokemon1, Pokemon $pokemon2) {
        $this->pokemon1 = $pokemon1;
        $this->pokemon2 = $pokemon2;
    }

    public function demarrerCombat(): void
    {
        while (!$this->pokemon1->estKO() && !$this->pokemon2->estKO()) 
        {
            $this->tourDeCombat($this->pokemon1, $this->pokemon2);
            if ($this->pokemon2->estKO()) break;

            $this->tourDeCombat($this->pokemon2, $this->pokemon1);
        }
        $this->determinerVainqueur();
    }
    public function tourDeCombat(Pokemon $attaquant,Pokemon $defenseur):void
    {
        $attaquant->attaquer($defenseur);
    }
    public function determinerVainqueur():void
    {
        if ($this->pokemon1->estKO()) {
            echo "<p class=\"font-bold\">{$this->pokemon2->getNom()} est le vainqueur!</p>";
        } elseif ($this->pokemon2->estKO()) {
            echo "<p class=\"font-bold\">{$this->pokemon2->getNom()} est le vainqueur!</p>";
        } else {
            echo "<p class=\"font-bold\">Le combat se termine par un match nul!<p>";
        }
    }
}