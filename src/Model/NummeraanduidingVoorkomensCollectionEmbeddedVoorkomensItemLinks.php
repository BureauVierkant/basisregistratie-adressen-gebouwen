<?php

namespace BureauVierkant\Basisregistratie\Model;

class NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItemLinks
{
    /**
     * Link naar de nummeraanduiding zoals dat geldig was op de datum van dit voorkomen
     *
     * @var NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItemLinksNummeraanduiding
     */
    protected $nummeraanduiding;
    /**
     * Link naar de nummeraanduiding zoals dat geldig was op de datum van dit voorkomen
     *
     * @return NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItemLinksNummeraanduiding
     */
    public function getNummeraanduiding() : ?NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItemLinksNummeraanduiding
    {
        return $this->nummeraanduiding;
    }
    /**
     * Link naar de nummeraanduiding zoals dat geldig was op de datum van dit voorkomen
     *
     * @param NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItemLinksNummeraanduiding $nummeraanduiding
     *
     * @return self
     */
    public function setNummeraanduiding(?NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItemLinksNummeraanduiding $nummeraanduiding) : self
    {
        $this->nummeraanduiding = $nummeraanduiding;
        return $this;
    }
}