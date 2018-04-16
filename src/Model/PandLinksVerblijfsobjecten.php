<?php

namespace BureauVierkant\Basisregistratie\Model;

class PandLinksVerblijfsobjecten
{
    /**
     * Link naar de query op de verblijfsobjecten gerelateerd aan het pand
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar de query op de verblijfsobjecten gerelateerd aan het pand
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar de query op de verblijfsobjecten gerelateerd aan het pand
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