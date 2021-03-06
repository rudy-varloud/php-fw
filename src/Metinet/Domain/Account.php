<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 09:50
 */

namespace Metinet\Domain;


class Account
{
    private $mail;
    private $password;

    /**
     * Account constructor.
     * @param $mail
     * @param $password
     */
    public function __construct($mail, $password)
    {
        $this->mail = $mail;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }




}