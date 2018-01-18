<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 11:47
 */

class Login
{
    private $account;

    /**
     * Login constructor.
     * @param $account
     */
    public function __construct($account)
    {
        $this->account = $account;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }


}