<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class WoonplaatsLinks
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class WoonplaatsLinks
{
    /**
     * Link naar de resource van de woonplaats
     *
     * @var WoonplaatsLinksSelf
     */
    protected $self;
    /**
     * Een lijst van voorkomens behorende bij deze woonplaats
     *
     * @var WoonplaatsLinksVoorkomens
     */
    protected $voorkomens;
    /**
     * Link naar de resource van de woonplaats
     *
     * @return WoonplaatsLinksSelf
     */
    public function getSelf() : ?WoonplaatsLinksSelf
    {
        return $this->self;
    }
    /**
     * Link naar de resource van de woonplaats
     *
     * @param WoonplaatsLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?WoonplaatsLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * Een lijst van voorkomens behorende bij deze woonplaats
     *
     * @return WoonplaatsLinksVoorkomens
     */
    public function getVoorkomens() : ?WoonplaatsLinksVoorkomens
    {
        return $this->voorkomens;
    }
    /**
     * Een lijst van voorkomens behorende bij deze woonplaats
     *
     * @param WoonplaatsLinksVoorkomens $voorkomens
     *
     * @return self
     */
    public function setVoorkomens(?WoonplaatsLinksVoorkomens $voorkomens) : self
    {
        $this->voorkomens = $voorkomens;
        return $this;
    }
}