<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class StandplaatsVoorkomensCollectionEmbedded
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class StandplaatsVoorkomensCollectionEmbedded
{
    /**
     * 
     *
     * @var StandplaatsVoorkomensCollectionEmbeddedVoorkomensItem[]
     */
    protected $voorkomens;
    /**
     * 
     *
     * @return StandplaatsVoorkomensCollectionEmbeddedVoorkomensItem[]
     */
    public function getVoorkomens() : ?array
    {
        return $this->voorkomens;
    }
    /**
     * 
     *
     * @param StandplaatsVoorkomensCollectionEmbeddedVoorkomensItem[] $voorkomens
     *
     * @return self
     */
    public function setVoorkomens(?array $voorkomens) : self
    {
        $this->voorkomens = $voorkomens;
        return $this;
    }
}