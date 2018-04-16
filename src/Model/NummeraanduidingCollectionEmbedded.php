<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class NummeraanduidingCollectionEmbedded
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class NummeraanduidingCollectionEmbedded
{
    /**
     * 
     *
     * @var Nummeraanduiding[]
     */
    protected $nummeraanduidingen;
    /**
     * 
     *
     * @return Nummeraanduiding[]
     */
    public function getNummeraanduidingen() : ?array
    {
        return $this->nummeraanduidingen;
    }
    /**
     * 
     *
     * @param Nummeraanduiding[] $nummeraanduidingen
     *
     * @return self
     */
    public function setNummeraanduidingen(?array $nummeraanduidingen) : self
    {
        $this->nummeraanduidingen = $nummeraanduidingen;
        return $this;
    }
}