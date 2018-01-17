<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 13:49
 */

namespace Metinet\Domain;


class Salle
{
    private $id;
    private $nomSalle;
    private $nbPlace;
    private $adresse;

    /**
     * Salle constructor.
     * @param $id
     * @param $nomSalle
     * @param $nbPlace
     * @param $adresse
     */
    public function __construct($id, $nomSalle, $nbPlace, $adresse)
    {
        $this->id = $id;
        $this->nomSalle = $nomSalle;
        $this->nbPlace = $nbPlace;
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    /**
     * @return mixed
     */
    public function getNbPlace()
    {
        return $this->nbPlace;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }


}