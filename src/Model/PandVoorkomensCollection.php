<?php

namespace BureauVierkant\Basisregistratie\Model;

class PandVoorkomensCollection
{
    /**
     * 
     *
     * @var PandVoorkomensCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @return PandVoorkomensCollectionEmbedded
     */
    public function getEmbedded() : ?PandVoorkomensCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param PandVoorkomensCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?PandVoorkomensCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}