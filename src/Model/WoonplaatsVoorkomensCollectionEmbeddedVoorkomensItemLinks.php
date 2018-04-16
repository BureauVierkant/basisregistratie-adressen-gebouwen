<?php

namespace BureauVierkant\Basisregistratie\Model;

class WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinks
{
    /**
     * Link naar de woonplaats zoals dat geldig was op de datum van dit voorkomen
     *
     * @var WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksWoonplaats
     */
    protected $woonplaats;
    /**
     * Link naar de woonplaats zoals dat geldig was op de datum van dit voorkomen
     *
     * @return WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksWoonplaats
     */
    public function getWoonplaats() : ?WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksWoonplaats
    {
        return $this->woonplaats;
    }
    /**
     * Link naar de woonplaats zoals dat geldig was op de datum van dit voorkomen
     *
     * @param WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksWoonplaats $woonplaats
     *
     * @return self
     */
    public function setWoonplaats(?WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksWoonplaats $woonplaats) : self
    {
        $this->woonplaats = $woonplaats;
        return $this;
    }
}