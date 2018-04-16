<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class WoonplaatsLinksSelf
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class WoonplaatsLinksSelf
{
    /**
     * Link naar de resource van de woonplaats
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar de resource van de woonplaats
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar de resource van de woonplaats
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