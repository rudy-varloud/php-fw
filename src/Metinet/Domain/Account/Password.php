<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 11:29
 */

class Password
{
    private $idAccount;
    private $password;
    private $sel;

    /**
     * Password constructor.
     * @param $idAccount
     * @param $password
     * @param $sel
     */
    public function __construct( int $idAccount, string $password, string $sel)
    {
        $this->idAccount = $idAccount;
        $this->password = $password;
        $this->sel = $sel;
    }

    /**
     * @return mixed
     */
    public function getIdAccount()
    {
        return $this->idAccount;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getSel()
    {
        return $this->sel;
    }

    public function hash_password(){
        $this->password = hash($this->password).$this->sel;
    }

}