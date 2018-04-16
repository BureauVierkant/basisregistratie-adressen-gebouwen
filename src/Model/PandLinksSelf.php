<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class PandLinksSelf
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class PandLinksSelf
{
    /**
     * Link naar de resource van het pand
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar de resource van het pand
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar de resource van het pand
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