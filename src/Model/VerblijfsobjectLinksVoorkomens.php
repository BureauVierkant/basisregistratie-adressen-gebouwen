<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class VerblijfsobjectLinksVoorkomens
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class VerblijfsobjectLinksVoorkomens
{
    /**
     * Link naar de bijbehorende voorkomens
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar de bijbehorende voorkomens
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar de bijbehorende voorkomens
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