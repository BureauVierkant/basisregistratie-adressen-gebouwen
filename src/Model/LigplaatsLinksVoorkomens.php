<?php

namespace BureauVierkant\Basisregistratie\Model;

class LigplaatsLinksVoorkomens
{
    /**
     * Links naar de bijbehorende voorkomens
     *
     * @var string
     */
    protected $href;
    /**
     * Links naar de bijbehorende voorkomens
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Links naar de bijbehorende voorkomens
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