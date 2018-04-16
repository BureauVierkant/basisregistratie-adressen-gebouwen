<?php

namespace BureauVierkant\Basisregistratie\Model;

class StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinks
{
    /**
     * Link naar de standplaats zoals dat geldig was op de datum van dit voorkomen
     *
     * @var StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksStandplaats
     */
    protected $standplaats;
    /**
     * Link naar de standplaats zoals dat geldig was op de datum van dit voorkomen
     *
     * @return StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksStandplaats
     */
    public function getStandplaats() : ?StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksStandplaats
    {
        return $this->standplaats;
    }
    /**
     * Link naar de standplaats zoals dat geldig was op de datum van dit voorkomen
     *
     * @param StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksStandplaats $standplaats
     *
     * @return self
     */
    public function setStandplaats(?StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksStandplaats $standplaats) : self
    {
        $this->standplaats = $standplaats;
        return $this;
    }
}