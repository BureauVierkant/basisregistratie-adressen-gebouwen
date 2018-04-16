<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class NummeraanduidingVoorkomensCollection
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class NummeraanduidingVoorkomensCollection
{
    /**
     * 
     *
     * @var NummeraanduidingVoorkomensCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @return NummeraanduidingVoorkomensCollectionEmbedded
     */
    public function getEmbedded() : ?NummeraanduidingVoorkomensCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param NummeraanduidingVoorkomensCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?NummeraanduidingVoorkomensCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}