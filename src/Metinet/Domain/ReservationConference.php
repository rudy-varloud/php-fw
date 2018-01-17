<?php
/**
 * Created by PhpStorm.
 * Participant: lp
 * Date: 17/01/2018
 * Time: 14:36
 */

namespace Metinet\Domain;


class ReservationConference
{
    private $idReservation;
    private $idConference;
    private $nbPlaceDejaReserve;
    private $idUtilisateur;

    /**
     * ReservationConference constructor.
     * @param $idReservation
     * @param $idConference
     * @param $nbPlaceDejaReserve
     * @param $prenom
     * @param $nom
     */
    public function __construct(int $idReservation, int $idConference, int $nbPlaceDejaReserve)
    {
        $this->idReservation = $idReservation;
        $this->idConference = $idConference;
        $this->nbPlaceDejaReserve = $nbPlaceDejaReserve;
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

    public function verifierDisponibilite(){
        // Verifie si le nombre de place deja reserve est inférieur ou égale
    }




}