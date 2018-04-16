<?php

namespace BureauVierkant\Basisregistratie\Model;

class LigplaatsVoorkomensCollection
{
    /**
     * 
     *
     * @var LigplaatsVoorkomensCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @return LigplaatsVoorkomensCollectionEmbedded
     */
    public function getEmbedded() : ?LigplaatsVoorkomensCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param LigplaatsVoorkomensCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?LigplaatsVoorkomensCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}