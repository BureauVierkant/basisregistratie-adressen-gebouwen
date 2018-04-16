<?php

namespace BureauVierkant\Basisregistratie\Model;

class WoonplaatsCollectionEmbedded
{
    /**
     * 
     *
     * @var Woonplaats[]
     */
    protected $woonplaatsen;
    /**
     * 
     *
     * @return Woonplaats[]
     */
    public function getWoonplaatsen() : ?array
    {
        return $this->woonplaatsen;
    }
    /**
     * 
     *
     * @param Woonplaats[] $woonplaatsen
     *
     * @return self
     */
    public function setWoonplaatsen(?array $woonplaatsen) : self
    {
        $this->woonplaatsen = $woonplaatsen;
        return $this;
    }
}