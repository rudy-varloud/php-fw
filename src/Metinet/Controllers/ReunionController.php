<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 11:37
 */

namespace Metinet\Controllers;
use Metinet\Domain\ReunionEleve;
use Metinet\Core\Http\Request;

class ReunionController
{
    public function createReunion(){
        $objRequest = new Request();

        $nom = $_POST['name'];
        $description = $_POST['description'];
        $goals = $_POST['goals'];
        $typeEvenement = $_POST['typeEvenement'];
        $idSalle = $_POST['idSalle'];
    }
}