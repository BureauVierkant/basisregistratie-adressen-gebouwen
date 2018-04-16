<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class PandVoorkomensCollectionEmbedded
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class PandVoorkomensCollectionEmbedded
{
    /**
     * 
     *
     * @var PandVoorkomensCollectionEmbeddedVoorkomensItem[]
     */
    protected $voorkomens;
    /**
     * 
     *
     * @return PandVoorkomensCollectionEmbeddedVoorkomensItem[]
     */
    public function getVoorkomens() : ?array
    {
        return $this->voorkomens;
    }
    /**
     * 
     *
     * @param PandVoorkomensCollectionEmbeddedVoorkomensItem[] $voorkomens
     *
     * @return self
     */
    public function setVoorkomens(?array $voorkomens) : self
    {
        $this->voorkomens = $voorkomens;
        return $this;
    }
}