<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class LigplaatsCollectionEmbedded
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class LigplaatsCollectionEmbedded
{
    /**
     * 
     *
     * @var Ligplaats[]
     */
    protected $ligplaatsen;
    /**
     * 
     *
     * @return Ligplaats[]
     */
    public function getLigplaatsen() : ?array
    {
        return $this->ligplaatsen;
    }
    /**
     * 
     *
     * @param Ligplaats[] $ligplaatsen
     *
     * @return self
     */
    public function setLigplaatsen(?array $ligplaatsen) : self
    {
        $this->ligplaatsen = $ligplaatsen;
        return $this;
    }
}