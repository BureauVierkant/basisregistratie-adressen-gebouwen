<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class WoonplaatsLinksVoorkomens
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class WoonplaatsLinksVoorkomens
{
    /**
     * Link naar een bijbehorend voorkomen
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar een bijbehorend voorkomen
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar een bijbehorend voorkomen
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