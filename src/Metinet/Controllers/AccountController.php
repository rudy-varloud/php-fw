<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
<<<<<<< HEAD
 * Time: 09:59
=======
 * Time: 09:51
>>>>>>> master
 */

namespace Metinet\Controllers;


use Metinet\Core\Http\Request;

class AccountController
{
    public function connection(){
<<<<<<< HEAD
        $requete = new Request("connection", "GET", "['']");
        $mail = $requete->getQuery()->post('mail');
        $password = $requete->getQuery()->post('password');

=======
        $requete = new Request("connection", "GET", "");
>>>>>>> master
    }
}