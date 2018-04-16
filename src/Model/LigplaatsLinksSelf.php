<?php

namespace BureauVierkant\Basisregistratie\Model;

class LigplaatsLinksSelf
{
    /**
     * Link naar de resource van de ligplaats
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar de resource van de ligplaats
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar de resource van de ligplaats
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