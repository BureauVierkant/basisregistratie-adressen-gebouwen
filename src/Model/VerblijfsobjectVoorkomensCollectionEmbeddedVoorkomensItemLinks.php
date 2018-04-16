<?php

namespace BureauVierkant\Basisregistratie\Model;

class VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinks
{
    /**
     * Link naar het verblijfsobject zoals dat geldig was op de datum van dit voorkomen
     *
     * @var VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinksVerblijfsobject
     */
    protected $verblijfsobject;
    /**
     * Link naar het verblijfsobject zoals dat geldig was op de datum van dit voorkomen
     *
     * @return VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinksVerblijfsobject
     */
    public function getVerblijfsobject() : ?VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinksVerblijfsobject
    {
        return $this->verblijfsobject;
    }
    /**
     * Link naar het verblijfsobject zoals dat geldig was op de datum van dit voorkomen
     *
     * @param VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinksVerblijfsobject $verblijfsobject
     *
     * @return self
     */
    public function setVerblijfsobject(?VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinksVerblijfsobject $verblijfsobject) : self
    {
        $this->verblijfsobject = $verblijfsobject;
        return $this;
    }
}