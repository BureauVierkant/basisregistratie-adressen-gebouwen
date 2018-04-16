<?php

namespace BureauVierkant\Basisregistratie\Model;

class OpenbareruimteVoorkomensCollection
{
    /**
     * 
     *
     * @var OpenbareruimteVoorkomensCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @return OpenbareruimteVoorkomensCollectionEmbedded
     */
    public function getEmbedded() : ?OpenbareruimteVoorkomensCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param OpenbareruimteVoorkomensCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?OpenbareruimteVoorkomensCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}