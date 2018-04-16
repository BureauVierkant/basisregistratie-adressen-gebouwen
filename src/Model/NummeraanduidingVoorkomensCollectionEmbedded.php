<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class NummeraanduidingVoorkomensCollectionEmbedded
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class NummeraanduidingVoorkomensCollectionEmbedded
{
    /**
     * 
     *
     * @var NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItem[]
     */
    protected $voorkomens;
    /**
     * 
     *
     * @return NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItem[]
     */
    public function getVoorkomens() : ?array
    {
        return $this->voorkomens;
    }
    /**
     * 
     *
     * @param NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItem[] $voorkomens
     *
     * @return self
     */
    public function setVoorkomens(?array $voorkomens) : self
    {
        $this->voorkomens = $voorkomens;
        return $this;
    }
}