<?php

namespace Core\HackingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cookie
 *
 * @ORM\Table(name="cookie")
 * @ORM\Entity(repositoryClass="Core\HackingBundle\Repository\CookieRepository")
 */
class Cookie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cookie", type="string", length=255)
     */
    private $cookie;


    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255)
     */
    private $ip;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cookie
     *
     * @param string $cookie
     *
     * @return Cookie
     */
    public function setCookie($cookie)
    {
        $this->cookie = $cookie;

        return $this;
    }

    /**
     * Get cookie
     *
     * @return string
     */
    public function getCookie()
    {
        return $this->cookie;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Cookie
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }
}
