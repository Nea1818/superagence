<?php

namespace App\Entity;

use App\Entity\PropertySearch;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch
{
    
     /**
     *
     * @var int|null
     * @Assert\Range(min=10, max=300)
     */
    private $minSurface;
    
    /**
     *
     * @var int|null
     */
    private $maxPrice;

    /**
     *
     * @var ArrayCollection
     */
    private $options;

    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

    /**
     *
     * @return integer|null
     */
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }

    /**
     *
     * @param integer $minSurface
     * @return PropertySearch
     */
    public function setMinSurface(int $minSurface): PropertySearch
    {
        $this->minSurface = $minSurface;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     *
     * @param integer $maxPrice
     * @return PropertySearch
     */
    public function setMaxPrice(int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     *
     * @return ArrayCollection
     */
    public function getOptions(): ArrayCollection
    {
        return $this->options;
    }

    /**
     *
     * @param ArrayCollection $options
     * @return void
     */
    public function setOptions(ArrayCollection $options): void
    {
        $this->options = $options;
    }
}
