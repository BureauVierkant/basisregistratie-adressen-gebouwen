<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class LigplaatsVoorkomensCollectionEmbedded
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class LigplaatsVoorkomensCollectionEmbedded
{
    /**
     * 
     *
     * @var LigplaatsVoorkomensCollectionEmbeddedVoorkomensItem[]
     */
    protected $voorkomens;
    /**
     * 
     *
     * @return LigplaatsVoorkomensCollectionEmbeddedVoorkomensItem[]
     */
    public function getVoorkomens() : ?array
    {
        return $this->voorkomens;
    }
    /**
     * 
     *
     * @param LigplaatsVoorkomensCollectionEmbeddedVoorkomensItem[] $voorkomens
     *
     * @return self
     */
    public function setVoorkomens(?array $voorkomens) : self
    {
        $this->voorkomens = $voorkomens;
        return $this;
    }
}