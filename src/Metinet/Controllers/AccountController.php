<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 09:59
 */

namespace Metinet\Controllers;


use Metinet\Core\Http\Request;

class AccountController
{
    public function connection(){
        $requete = new Request("connection", "GET", "['']");
        $mail = $requete->getQuery()->post('mail');
        $password = $requete->getQuery()->post('password');

    }
}