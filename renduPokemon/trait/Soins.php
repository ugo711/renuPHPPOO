<?php 

trait  Soins{
    public function soins():self
    public function soigner(): void {
        $this->pointsDeVie = $this->pointsDeVieMax;
        echo "{$this->nom} est soigné et retrouve tous ses points de vie ({$this->pointsDeVieMax})!<br>";
    }
}