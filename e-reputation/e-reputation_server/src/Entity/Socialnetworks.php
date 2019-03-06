<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Socialnetworks
 *
 * @ORM\Table(name="socialnetworks")
 * @ORM\Entity(repositoryClass="App\Repository\SocialnetworksRepository")
 */
class Socialnetworks
{
    /**
     * @var int
     *
     * @ORM\Column(name="idsocialnetwork", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsocialnetwork;

    /**
     * @var string
     *
     * @ORM\Column(name="socialnetworkname", type="string", length=45, nullable=false)
     */
    private $socialnetworkname;

    public function getIdsocialnetwork(): ?int
    {
        return $this->idsocialnetwork;
    }

    public function getSocialnetworkname(): ?string
    {
        return $this->socialnetworkname;
    }

    public function setSocialnetworkname(string $socialnetworkname): self
    {
        $this->socialnetworkname = $socialnetworkname;

        return $this;
    }


}
