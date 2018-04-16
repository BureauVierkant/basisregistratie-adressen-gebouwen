<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class NummeraanduidingLinksAdresseerbaarObject
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class NummeraanduidingLinksAdresseerbaarObject
{
    /**
     * Link naar het adresseerbare object van de nummeraanduiding
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar het adresseerbare object van de nummeraanduiding
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar het adresseerbare object van de nummeraanduiding
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