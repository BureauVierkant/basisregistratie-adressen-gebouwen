<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItemLinksNummeraanduiding
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItemLinksNummeraanduiding
{
    /**
     * 
     *
     * @var string
     */
    protected $href;
    /**
     * 
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * 
     *
     * @param string $href
     *
     * @return self
     */
    public function setHref(?string $href) : self
    {
        $this->href = $href;
        return $this;
    }
}