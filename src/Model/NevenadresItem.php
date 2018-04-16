<?php

namespace BureauVierkant\Basisregistratie\Model;

class NevenadresItem
{
    /**
     * Link naar een bijbehorend hoofdadres.
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar een bijbehorend hoofdadres.
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar een bijbehorend hoofdadres.
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