<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Connectionecommerce
 *
 * @ORM\Table(name="connectionecommerce", indexes={@ORM\Index(name="fk_connectionecommerce_ecommerces1", columns={"ecommerces_idecommerce"}), @ORM\Index(name="fk_connectionecommerce_user1", columns={"user_iduser"})})
 * @ORM\Entity(repositoryClass="App\Repository\ConnectionecommerceRepository")
 */
class Connectionecommerce
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
     * @var \ECommerces
     *
     * @ORM\ManyToOne(targetEntity="ECommerces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ecommerces_idecommerce", referencedColumnName="idecommerce")
     * })
     */
    private $eCommerceseCommerce;

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

    public function getECommerceseCommerce(): ?ECommerces
    {
        return $this->eCommerceseCommerce;
    }

    public function setECommerceseCommerce(?ECommerces $eCommerceseCommerce): self
    {
        $this->eCommerceseCommerce = $eCommerceseCommerce;

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
