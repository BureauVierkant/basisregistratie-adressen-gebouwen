<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class VerblijfsobjectLinksPandrelateringenItem
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class VerblijfsobjectLinksPandrelateringenItem
{
    /**
     * Link naar een bijbehorend pand
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar een bijbehorend pand
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar een bijbehorend pand
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