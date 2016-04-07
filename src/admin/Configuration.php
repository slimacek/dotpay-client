<?php
namespace mirolabs\dotpay\client\admin;


class Configuration
{
    private $url;
    private $login;
    private $password;


    /**
     * @param string $login
     * @param string $password
     * @param string $url
     */
    public function __construct($login, $password, $url = 'https://ssl.dotpay.pl/s2/login/api/')
    {
        $this->url      = $url;
        $this->login    = $login;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * @return string
     */
    public function getBasicAuthorization()
    {
        return "Basic " . base64_encode($this->login . ':' . $this->password);
    }
}
