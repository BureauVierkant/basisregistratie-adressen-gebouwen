<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinks
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinks
{
    /**
     * Link naar de ligplaats zoals dat geldig was op de datum van dit voorkomen
     *
     * @var LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksLigplaats
     */
    protected $ligplaats;
    /**
     * Link naar de ligplaats zoals dat geldig was op de datum van dit voorkomen
     *
     * @return LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksLigplaats
     */
    public function getLigplaats() : ?LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksLigplaats
    {
        return $this->ligplaats;
    }
    /**
     * Link naar de ligplaats zoals dat geldig was op de datum van dit voorkomen
     *
     * @param LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksLigplaats $ligplaats
     *
     * @return self
     */
    public function setLigplaats(?LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksLigplaats $ligplaats) : self
    {
        $this->ligplaats = $ligplaats;
        return $this;
    }
}