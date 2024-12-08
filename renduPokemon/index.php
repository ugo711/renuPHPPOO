<?php


require_once 'classes/PokemonFeu.php';
require_once 'classes/PokemonEau.php';
require_once 'classes/PokemonPlante.php';
require_once 'classes/Pokemon.php';

// Liste des Pokémon disponibles
$pokemons = [
    new PokemonFeu('Salamèche', 'Feu', 100, 30, 15),
    new PokemonEau('Carapuce', 'Eau', 100, 25, 20),
    new PokemonPlante('Bulbizarre', 'Plante', 100, 20, 25),
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choisissez vos Pokémon</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen bg-gradient-to-b from-green-500 to-green-100">
    <h1 class="font-bold">Pokémon disponibles</h1>
    <div>
        <?php foreach ($pokemons as $pokemon): ?>
            <div class="p-[10px] m-[10px] bg-gray-500 border border-[#000000] rounded-lg w-[200px] inline-block text-center">
                <h2 class="font-bold"><?= $pokemon->getNom() ?></h2>
                <p>Type : <?= $pokemon->getType() ?></p>
                <p>Points de Vie : <?= $pokemon->getPointsDeVie() ?></p>
                <p>Attaque : <?= $pokemon->getPuissance() ?></p>
                <p>Défense : <?= $pokemon->getDefense() ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <h2 class="font-bold">Choisissez les Pokémon pour le combat</h2>
    <form action="lancement.php" method="POST">
        <label for="pokemon1">Pokémon 1:</label>
        <select name="pokemon1" id="pokemon1" required>
            <?php foreach ($pokemons as $index => $pokemon): ?>
                <option value="<?= $index ?>"><?= $pokemon->getNom() ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="pokemon2">Pokémon 2:</label>
        <select name="pokemon2" id="pokemon2" required>
            <?php foreach ($pokemons as $index => $pokemon): ?>
                <option value="<?= $index ?>"><?= $pokemon->getNom() ?></option>
            <?php endforeach; ?>
        </select>
        <br><br>
        <button type="submit" class="h-12 w-20 rounded-xl bg-green-500">Lancer le combat</button>
    </form>
</body>
</html>