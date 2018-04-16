<?php

namespace BureauVierkant\Basisregistratie\Model;

class VerblijfsobjectVoorkomensCollection
{
    /**
     * 
     *
     * @var VerblijfsobjectVoorkomensCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @return VerblijfsobjectVoorkomensCollectionEmbedded
     */
    public function getEmbedded() : ?VerblijfsobjectVoorkomensCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param VerblijfsobjectVoorkomensCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?VerblijfsobjectVoorkomensCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}