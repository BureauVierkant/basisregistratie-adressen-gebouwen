<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class NummeraanduidingLinksBijbehorendeOpenbareRuimte
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class NummeraanduidingLinksBijbehorendeOpenbareRuimte
{
    /**
     * Link naar de openbare ruimte
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar de openbare ruimte
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar de openbare ruimte
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