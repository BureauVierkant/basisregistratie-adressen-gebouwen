<?php

namespace BureauVierkant\Basisregistratie\Model;

class OpenbareruimteLinksBijbehorendeWoonplaats
{
    /**
     * Link naar de woonplaats
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar de woonplaats
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar de woonplaats
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