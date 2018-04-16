<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class StandplaatsVoorkomensCollection
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class StandplaatsVoorkomensCollection
{
    /**
     * 
     *
     * @var StandplaatsVoorkomensCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @return StandplaatsVoorkomensCollectionEmbedded
     */
    public function getEmbedded() : ?StandplaatsVoorkomensCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param StandplaatsVoorkomensCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?StandplaatsVoorkomensCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}