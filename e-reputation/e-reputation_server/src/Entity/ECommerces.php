<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ECommerces
 *
 * @ORM\Table(name="e-commerces")
 * @ORM\Entity(repositoryClass="App\Repository\ECommercesRepository")
 */
class ECommerces
{
    /**
     * @var int
     *
     * @ORM\Column(name="ide-commerce", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ideCommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="e-commercename", type="string", length=45, nullable=false)
     */
    private $eCommercename;

    public function getIdeCommerce(): ?int
    {
        return $this->ideCommerce;
    }

    public function getECommercename(): ?string
    {
        return $this->eCommercename;
    }

    public function setECommercename(string $eCommercename): self
    {
        $this->eCommercename = $eCommercename;

        return $this;
    }


}
