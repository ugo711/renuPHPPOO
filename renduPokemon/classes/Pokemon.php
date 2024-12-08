<?php

abstract class Pokemon{
    protected string $nom;
    protected string $type;
    protected int $pointsDeVie;
    protected int $pointsDeVieMax;
    protected int $puissanceAttaque;
    protected int $defense;

    public function __construct(string $nom, string $type, int $pointsDeVie, int $puissanceAttaque, int $defense) {
        $this->nom = $nom;
        $this->type = $type;
        $this->pointsDeVie = $pointsDeVie;
        $this->pointsDeVieMax = $pointsDeVie;
        $this->puissanceAttaque = $puissanceAttaque;
        $this->defense = $defense;
    }

    public function getNom(): string
    {
        return $this->nom;
    }
    public function getType(): string
    {
        return $this->type;
    }
    public function getPointsDeVie(): int
    {
        return $this->pointsDeVie;
    }
    public function getPuissance(): int
    {
        return $this->puissanceAttaque;
    }
    public function getDefense(): int
    {
        return $this->defense;
    }
    public function attaquer(Pokemon $adversaire): void {
        $degats = max(0, $this->puissanceAttaque - $adversaire->defense);
        $adversaire->recevoirDegats($degats);
        echo "{$this->nom} attaque {$adversaire->nom} et inflige {$degats} points de dégâts!<br>";
    }

    public function recevoirDegats(int $degats): void {
        $this->pointsDeVie -= $degats;
        $this->pointsDeVie = max(0, $this->pointsDeVie);
        echo "{$this->nom} reçoit {$degats} points de dégâts! Points de vie restants: {$this->pointsDeVie}<br>";
    }

    public function estKO(): bool
    {
        return $this->pointsDeVie <= 0;
    }

    abstract public function capaciteSpeciale(): void;
}