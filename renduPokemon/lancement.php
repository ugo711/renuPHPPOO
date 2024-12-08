<?php

require_once 'classes/PokemonFeu.php';
require_once 'classes/PokemonEau.php';
require_once 'classes/PokemonPlante.php';
require_once 'classes/Combat.php';

$pokemons = [
    new PokemonFeu('Salamèche', 'Feu', 100, 30, 15),
    new PokemonEau('Carapuce', 'Eau', 100, 25, 20),
    new PokemonPlante('Bulbizarre', 'Plante', 100, 20, 25),
];
// Récupération des Pokémon choisis
$pokemon1Index = $_POST['pokemon1'];
$pokemon2Index = $_POST['pokemon2'];

$pokemon1 = $pokemons[$pokemon1Index];
$pokemon2 = $pokemons[$pokemon2Index];

// Lancer le combat
$combat = new Combat($pokemon1, $pokemon2);
$combat->demarrerCombat();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat du Combat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-green-200">
    <h1 class="font-bold">Combat terminé</h1>
    <a href="index.php" class="h-8 w-24 rounded-xl bg-green-500">Retour à la sélection</a>
</body>
</html>