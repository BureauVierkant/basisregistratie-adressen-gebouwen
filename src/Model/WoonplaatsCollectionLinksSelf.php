<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class WoonplaatsCollectionLinksSelf
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class WoonplaatsCollectionLinksSelf
{
    /**
     * Link naar huidige pagina.
     *
     * @var string
     */
    protected $href;
    /**
     * Link naar huidige pagina.
     *
     * @return string
     */
    public function getHref() : ?string
    {
        return $this->href;
    }
    /**
     * Link naar huidige pagina.
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