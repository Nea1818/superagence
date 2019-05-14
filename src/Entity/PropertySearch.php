<?php

namespace App\Entity;

use App\Entity\PropertySearch;
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
}