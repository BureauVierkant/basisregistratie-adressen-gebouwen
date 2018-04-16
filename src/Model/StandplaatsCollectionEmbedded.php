<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class StandplaatsCollectionEmbedded
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class StandplaatsCollectionEmbedded
{
    /**
     * 
     *
     * @var Standplaats[]
     */
    protected $standplaatsen;
    /**
     * 
     *
     * @return Standplaats[]
     */
    public function getStandplaatsen() : ?array
    {
        return $this->standplaatsen;
    }
    /**
     * 
     *
     * @param Standplaats[] $standplaatsen
     *
     * @return self
     */
    public function setStandplaatsen(?array $standplaatsen) : self
    {
        $this->standplaatsen = $standplaatsen;
        return $this;
    }
}