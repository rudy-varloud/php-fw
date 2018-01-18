<?php
/**
 * Created by PhpStorm.
 * User: lp
 * Date: 18/01/2018
 * Time: 09:58
 */

class Account
{
    private $id;
    private $mail;
    private $password;
    private $password_hash;

    /**
     * Account constructor.
     * @param $mail
     * @param $password
     */
    public function __construct(int $id, string $mail, Password $password, Password $password_hash)
    {
        $this->id = $id;
        $this->mail = $mail;
        $this->password = $password;
        $this->password_hash = sha_1($password_hash);
    }

    public static function register($id, $mail, $password, $password_hash): self
    {
        return new self($id, $mail, $password, $password_hash);
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
    public function getPasswordHash()
    {
        return $this->password_hash;
    }







}