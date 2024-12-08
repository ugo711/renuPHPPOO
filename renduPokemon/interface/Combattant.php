<?php 

require_once'./Pokemon.php'

interface Combattant{
    public function seBattre(Pokemon $adversaire):void;
    public function UtiliserAttaqueSpeciale(Pokemon $adversaire):void;
}