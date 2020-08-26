<?php

namespace App\Entity;

use App\Repository\NavbarRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NavbarRepository::class)
 */
class Navbar
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $link;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $orderNumber;

    /**
     * @ORM\ManyToMany(targetEntity=ItemNavbar::class, mappedBy="navbar")
     */
    private $itemNavbars;

    public function __construct()
    {
        $this->itemNavbars = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getOrderNumber(): ?int
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?int $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @return Collection|ItemNavbar[]
     */
    public function getItemNavbars(): Collection
    {
        return $this->itemNavbars;
    }

    public function addItemNavbar(ItemNavbar $itemNavbar): self
    {
        if (!$this->itemNavbars->contains($itemNavbar)) {
            $this->itemNavbars[] = $itemNavbar;
            $itemNavbar->addNavbar($this);
        }

        return $this;
    }

    public function removeItemNavbar(ItemNavbar $itemNavbar): self
    {
        if ($this->itemNavbars->contains($itemNavbar)) {
            $this->itemNavbars->removeElement($itemNavbar);
            $itemNavbar->removeNavbar($this);
        }

        return $this;
    }
}
