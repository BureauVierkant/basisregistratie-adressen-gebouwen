<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class LigplaatsLinks
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class LigplaatsLinks
{
    /**
     * Link naar de resource van de ligplaats
     *
     * @var LigplaatsLinksSelf
     */
    protected $self;
    /**
     * Een hoofdadres is het primaire adres van een gebouw of plek.
     *
     * @var Hoofdadres
     */
    protected $hoofdadres;
    /**
     * Een lijst van nevenadressen
     *
     * @var NevenadresItem[]
     */
    protected $nevenadres;
    /**
     * Voorkomens behorende bij deze ligplaats
     *
     * @var LigplaatsLinksVoorkomens
     */
    protected $voorkomens;
    /**
     * Link naar de resource van de ligplaats
     *
     * @return LigplaatsLinksSelf
     */
    public function getSelf() : ?LigplaatsLinksSelf
    {
        return $this->self;
    }
    /**
     * Link naar de resource van de ligplaats
     *
     * @param LigplaatsLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?LigplaatsLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * Een hoofdadres is het primaire adres van een gebouw of plek.
     *
     * @return Hoofdadres
     */
    public function getHoofdadres() : ?Hoofdadres
    {
        return $this->hoofdadres;
    }
    /**
     * Een hoofdadres is het primaire adres van een gebouw of plek.
     *
     * @param Hoofdadres $hoofdadres
     *
     * @return self
     */
    public function setHoofdadres(?Hoofdadres $hoofdadres) : self
    {
        $this->hoofdadres = $hoofdadres;
        return $this;
    }
    /**
     * Een lijst van nevenadressen
     *
     * @return NevenadresItem[]
     */
    public function getNevenadres() : ?array
    {
        return $this->nevenadres;
    }
    /**
     * Een lijst van nevenadressen
     *
     * @param NevenadresItem[] $nevenadres
     *
     * @return self
     */
    public function setNevenadres(?array $nevenadres) : self
    {
        $this->nevenadres = $nevenadres;
        return $this;
    }
    /**
     * Voorkomens behorende bij deze ligplaats
     *
     * @return LigplaatsLinksVoorkomens
     */
    public function getVoorkomens() : ?LigplaatsLinksVoorkomens
    {
        return $this->voorkomens;
    }
    /**
     * Voorkomens behorende bij deze ligplaats
     *
     * @param LigplaatsLinksVoorkomens $voorkomens
     *
     * @return self
     */
    public function setVoorkomens(?LigplaatsLinksVoorkomens $voorkomens) : self
    {
        $this->voorkomens = $voorkomens;
        return $this;
    }
}