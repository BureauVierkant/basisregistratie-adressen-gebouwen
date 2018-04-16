<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class OpenbareruimteLinksSelf
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class OpenbareruimteLinksSelf
{
    /**
     * Link naar de resource van de openbare ruimte
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar de resource van de openbare ruimte
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar de resource van de openbare ruimte
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