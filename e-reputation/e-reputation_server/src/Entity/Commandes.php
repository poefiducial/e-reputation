<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commandes
 *
 * @ORM\Table(name="commandes", indexes={@ORM\Index(name="fk_commandes_e-commerces1", columns={"e-commerces_ide-commerce"})})
 * @ORM\Entity(repositoryClass="App\Repository\CommandesRepository")
 */
class Commandes
{
    /**
     * @var int
     *
     * @ORM\Column(name="idcommande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcommande;

    /**
     * @var string
     *
     * @ORM\Column(name="commandeclient", type="string", length=45, nullable=false)
     */
    private $commandeclient;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="commandedate", type="date", nullable=false)
     */
    private $commandedate;

    /**
     * @var string
     *
     * @ORM\Column(name="commandeprix", type="string", length=45, nullable=false)
     */
    private $commandeprix;

    /**
     * @var string
     *
     * @ORM\Column(name="commandequantite", type="string", length=45, nullable=false)
     */
    private $commandequantite;

    /**
     * @var \ECommerces
     *
     * @ORM\ManyToOne(targetEntity="ECommerces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="e-commerces_ide-commerce", referencedColumnName="ide-commerce")
     * })
     */
    private $eCommerceseCommerce;

    public function getIdcommande(): ?int
    {
        return $this->idcommande;
    }

    public function getCommandeclient(): ?string
    {
        return $this->commandeclient;
    }

    public function setCommandeclient(string $commandeclient): self
    {
        $this->commandeclient = $commandeclient;

        return $this;
    }

    public function getCommandedate(): ?\DateTimeInterface
    {
        return $this->commandedate;
    }

    public function setCommandedate(\DateTimeInterface $commandedate): self
    {
        $this->commandedate = $commandedate;

        return $this;
    }

    public function getCommandeprix(): ?string
    {
        return $this->commandeprix;
    }

    public function setCommandeprix(string $commandeprix): self
    {
        $this->commandeprix = $commandeprix;

        return $this;
    }

    public function getCommandequantite(): ?string
    {
        return $this->commandequantite;
    }

    public function setCommandequantite(string $commandequantite): self
    {
        $this->commandequantite = $commandequantite;

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


}
