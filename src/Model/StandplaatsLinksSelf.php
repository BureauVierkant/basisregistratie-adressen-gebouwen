<?php

namespace BureauVierkant\Basisregistratie\Model;

class StandplaatsLinksSelf
{
    /**
     * Link naar de resource van de standplaats
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar de resource van de standplaats
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar de resource van de standplaats
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