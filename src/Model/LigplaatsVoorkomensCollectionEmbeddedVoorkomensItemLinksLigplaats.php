<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksLigplaats
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksLigplaats
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