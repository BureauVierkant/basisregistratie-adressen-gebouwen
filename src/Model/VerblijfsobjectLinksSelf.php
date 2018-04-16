<?php

namespace BureauVierkant\Basisregistratie\Model;

class VerblijfsobjectLinksSelf
{
    /**
     * Link naar de resource van het verblijfsobject
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar de resource van het verblijfsobject
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar de resource van het verblijfsobject
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