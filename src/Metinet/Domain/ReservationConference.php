<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 17/01/2018
 * Time: 14:36
 */

namespace Metinet\Domain;


class ReservationConference
{
    private $idReservation;
    private $idConference;
    private $nbPlaceDejaReserve;
    private $prenom;
    private $nom;

    /**
     * ReservationConference constructor.
     * @param $idReservation
     * @param $idConference
     * @param $nbPlaceDejaReserve
     * @param $prenom
     * @param $nom
     */
    public function __construct($idReservation, $idConference, $nbPlaceDejaReserve, $prenom, $nom)
    {
        $this->idReservation = $idReservation;
        $this->idConference = $idConference;
        $this->nbPlaceDejaReserve = $nbPlaceDejaReserve;
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * @return mixed
     */
    public function getIdConference()
    {
        return $this->idConference;
    }

    /**
     * @return mixed
     */
    public function getNbPlaceDejaReserve()
    {
        return $this->nbPlaceDejaReserve;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    public function addReservation(){

    }




}