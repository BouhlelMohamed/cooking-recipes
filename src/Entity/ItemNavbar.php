<?php

namespace App\Entity;

use App\Repository\ItemNavbarRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ItemNavbarRepository::class)
 */
class ItemNavbar
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $link;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $order_number;

    /**
     * @ORM\ManyToMany(targetEntity=Navbar::class, inversedBy="itemNavbars")
     */
    private $navbar;

    public function __construct()
    {
        $this->navbar = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getOrderNumber(): ?int
    {
        return $this->order_number;
    }

    public function setOrderNumber(?int $order_number): self
    {
        $this->order_number = $order_number;

        return $this;
    }

    /**
     * @return Collection|Navbar[]
     */
    public function getNavbar(): Collection
    {
        return $this->navbar;
    }

    public function addNavbar(Navbar $navbar): self
    {
        if (!$this->navbar->contains($navbar)) {
            $this->navbar[] = $navbar;
        }

        return $this;
    }

    public function removeNavbar(Navbar $navbar): self
    {
        if ($this->navbar->contains($navbar)) {
            $this->navbar->removeElement($navbar);
        }

        return $this;
    }
}
