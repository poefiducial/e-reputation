<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="userfirstname", type="string", length=45, nullable=true)
     */
    private $userfirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="userlastname", type="string", length=45, nullable=true)
     */
    private $userlastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="useremail", type="string", length=45, nullable=true)
     */
    private $useremail;

    /**
     * @var string
     *
     * @ORM\Column(name="userpassword", type="string", length=45, nullable=false)
     */
    private $userpassword;

    /**
     * @var string
     *
     * @ORM\Column(name="userlogin", type="string", length=255, nullable=false)
     */
    private $userlogin;

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function getUserfirstname(): ?string
    {
        return $this->userfirstname;
    }

    public function setUserfirstname(?string $userfirstname): self
    {
        $this->userfirstname = $userfirstname;

        return $this;
    }

    public function getUserlastname(): ?string
    {
        return $this->userlastname;
    }

    public function setUserlastname(?string $userlastname): self
    {
        $this->userlastname = $userlastname;

        return $this;
    }

    public function getUseremail(): ?string
    {
        return $this->useremail;
    }

    public function setUseremail(?string $useremail): self
    {
        $this->useremail = $useremail;

        return $this;
    }

    public function getUserpassword(): ?string
    {
        return $this->userpassword;
    }

    public function setUserpassword(string $userpassword): self
    {
        $this->userpassword = $userpassword;

        return $this;
    }

    public function getUserlogin(): ?string
    {
        return $this->userlogin;
    }

    public function setUserlogin(string $userlogin): self
    {
        $this->userlogin = $userlogin;

        return $this;
    }

    public function __toString() {
        return ("{$this->userfirstname}"." "."{$this->userlastname}\n");
    }
}
