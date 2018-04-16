<?php

namespace BureauVierkant\Basisregistratie\Model;

class PandVoorkomensCollectionEmbeddedVoorkomensItemLinks
{
    /**
     * Link naar het pand zoals dat geldig was op de datum van dit voorkomen
     *
     * @var PandVoorkomensCollectionEmbeddedVoorkomensItemLinksPand
     */
    protected $pand;
    /**
     * Link naar het pand zoals dat geldig was op de datum van dit voorkomen
     *
     * @return PandVoorkomensCollectionEmbeddedVoorkomensItemLinksPand
     */
    public function getPand() : ?PandVoorkomensCollectionEmbeddedVoorkomensItemLinksPand
    {
        return $this->pand;
    }
    /**
     * Link naar het pand zoals dat geldig was op de datum van dit voorkomen
     *
     * @param PandVoorkomensCollectionEmbeddedVoorkomensItemLinksPand $pand
     *
     * @return self
     */
    public function setPand(?PandVoorkomensCollectionEmbeddedVoorkomensItemLinksPand $pand) : self
    {
        $this->pand = $pand;
        return $this;
    }
}