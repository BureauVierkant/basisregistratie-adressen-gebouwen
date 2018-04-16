<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class NummeraanduidingLinksSelf
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class NummeraanduidingLinksSelf
{
    /**
     * Link naar de resource van de nummeraanduiding
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar de resource van de nummeraanduiding
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar de resource van de nummeraanduiding
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