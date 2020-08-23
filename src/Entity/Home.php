<?php

namespace App\Entity;

use App\Repository\HomeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HomeRepository::class)
 */
class Home
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
    private $imageSlider;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkSlider;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $captionSlider;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titleOfDescription;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImageSlider(): ?string
    {
        return $this->imageSlider;
    }

    public function setImageSlider(?string $imageSlider): self
    {
        $this->imageSlider = $imageSlider;

        return $this;
    }

    public function getLinkSlider(): ?string
    {
        return $this->linkSlider;
    }

    public function setLinkSlider(?string $linkSlider): self
    {
        $this->linkSlider = $linkSlider;

        return $this;
    }

    public function getCaptionSlider(): ?string
    {
        return $this->captionSlider;
    }

    public function setCaptionSlider(?string $captionSlider): self
    {
        $this->captionSlider = $captionSlider;

        return $this;
    }

    public function getTitleOfDescription(): ?string
    {
        return $this->titleOfDescription;
    }

    public function setTitleOfDescription(?string $titleOfDescription): self
    {
        $this->titleOfDescription = $titleOfDescription;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
