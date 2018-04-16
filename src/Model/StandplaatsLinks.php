<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class StandplaatsLinks
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class StandplaatsLinks
{
    /**
     * Link naar de resource van de standplaats
     *
     * @var StandplaatsLinksSelf
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
     * Voorkomens behorende bij deze standplaats
     *
     * @var StandplaatsLinksVoorkomens
     */
    protected $voorkomens;
    /**
     * Link naar de resource van de standplaats
     *
     * @return StandplaatsLinksSelf
     */
    public function getSelf() : ?StandplaatsLinksSelf
    {
        return $this->self;
    }
    /**
     * Link naar de resource van de standplaats
     *
     * @param StandplaatsLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?StandplaatsLinksSelf $self) : self
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
     * Voorkomens behorende bij deze standplaats
     *
     * @return StandplaatsLinksVoorkomens
     */
    public function getVoorkomens() : ?StandplaatsLinksVoorkomens
    {
        return $this->voorkomens;
    }
    /**
     * Voorkomens behorende bij deze standplaats
     *
     * @param StandplaatsLinksVoorkomens $voorkomens
     *
     * @return self
     */
    public function setVoorkomens(?StandplaatsLinksVoorkomens $voorkomens) : self
    {
        $this->voorkomens = $voorkomens;
        return $this;
    }
}