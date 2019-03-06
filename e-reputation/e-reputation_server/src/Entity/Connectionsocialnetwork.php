<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Connectionsocialnetwork
 *
 * @ORM\Table(name="connectionsocialnetwork", indexes={@ORM\Index(name="fk_connection_socialnetworks1", columns={"socialnetworks_idsocialnetwork"}), @ORM\Index(name="fk_connection_user1", columns={"user_iduser"})})
 * @ORM\Entity(repositoryClass="App\Repository\ConnectionsocialnetworkRepository")
 */
class Connectionsocialnetwork
{
    /**
     * @var int
     *
     * @ORM\Column(name="idconnection", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconnection;

    /**
     * @var string
     *
     * @ORM\Column(name="connectionlogin", type="string", length=45, nullable=false)
     */
    private $connectionlogin;

    /**
     * @var string
     *
     * @ORM\Column(name="connectionpassword", type="string", length=45, nullable=false)
     */
    private $connectionpassword;

    /**
     * @var \Socialnetworks
     *
     * @ORM\ManyToOne(targetEntity="Socialnetworks")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="socialnetworks_idsocialnetwork", referencedColumnName="idsocialnetwork")
     * })
     */
    private $socialnetworkssocialnetwork;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_iduser", referencedColumnName="iduser")
     * })
     */
    private $useruser;

    public function getIdconnection(): ?int
    {
        return $this->idconnection;
    }

    public function getConnectionlogin(): ?string
    {
        return $this->connectionlogin;
    }

    public function setConnectionlogin(string $connectionlogin): self
    {
        $this->connectionlogin = $connectionlogin;

        return $this;
    }

    public function getConnectionpassword(): ?string
    {
        return $this->connectionpassword;
    }

    public function setConnectionpassword(string $connectionpassword): self
    {
        $this->connectionpassword = $connectionpassword;

        return $this;
    }

    public function getSocialnetworkssocialnetwork(): ?Socialnetworks
    {
        return $this->socialnetworkssocialnetwork;
    }

    public function setSocialnetworkssocialnetwork(?Socialnetworks $socialnetworkssocialnetwork): self
    {
        $this->socialnetworkssocialnetwork = $socialnetworkssocialnetwork;

        return $this;
    }

    public function getUseruser(): ?User
    {
        return $this->useruser;
    }

    public function setUseruser(?User $useruser): self
    {
        $this->useruser = $useruser;

        return $this;
    }


}
