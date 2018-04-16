<?php

namespace BureauVierkant\Basisregistratie\Model;

class WoonplaatsVoorkomensCollection
{
    /**
     * 
     *
     * @var WoonplaatsVoorkomensCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @return WoonplaatsVoorkomensCollectionEmbedded
     */
    public function getEmbedded() : ?WoonplaatsVoorkomensCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param WoonplaatsVoorkomensCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?WoonplaatsVoorkomensCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}