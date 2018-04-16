<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class PandLinks
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class PandLinks
{
    /**
     * Link naar de resource van het pand
     *
     * @var PandLinksSelf
     */
    protected $self;
    /**
     * Voorkomens behorende bij dit pand
     *
     * @var PandLinksVoorkomens
     */
    protected $voorkomens;
    /**
     * Verblijfsobjecten gerelateerd aan het pand
     *
     * @var PandLinksVerblijfsobjecten
     */
    protected $verblijfsobjecten;
    /**
     * Link naar de resource van het pand
     *
     * @return PandLinksSelf
     */
    public function getSelf() : ?PandLinksSelf
    {
        return $this->self;
    }
    /**
     * Link naar de resource van het pand
     *
     * @param PandLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?PandLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * Voorkomens behorende bij dit pand
     *
     * @return PandLinksVoorkomens
     */
    public function getVoorkomens() : ?PandLinksVoorkomens
    {
        return $this->voorkomens;
    }
    /**
     * Voorkomens behorende bij dit pand
     *
     * @param PandLinksVoorkomens $voorkomens
     *
     * @return self
     */
    public function setVoorkomens(?PandLinksVoorkomens $voorkomens) : self
    {
        $this->voorkomens = $voorkomens;
        return $this;
    }
    /**
     * Verblijfsobjecten gerelateerd aan het pand
     *
     * @return PandLinksVerblijfsobjecten
     */
    public function getVerblijfsobjecten() : ?PandLinksVerblijfsobjecten
    {
        return $this->verblijfsobjecten;
    }
    /**
     * Verblijfsobjecten gerelateerd aan het pand
     *
     * @param PandLinksVerblijfsobjecten $verblijfsobjecten
     *
     * @return self
     */
    public function setVerblijfsobjecten(?PandLinksVerblijfsobjecten $verblijfsobjecten) : self
    {
        $this->verblijfsobjecten = $verblijfsobjecten;
        return $this;
    }
}