<?php

namespace BureauVierkant\Basisregistratie\Model;

class VerblijfsobjectLinks
{
    /**
     * Link naar de resource van het verblijfsobject
     *
     * @var VerblijfsobjectLinksSelf
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
     * Een lijst van panden behorende bij dit verblijfsobject
     *
     * @var VerblijfsobjectLinksPandrelateringenItem[]
     */
    protected $pandrelateringen;
    /**
     * Een lijst van voorkomens behorende bij dit verblijfsobject
     *
     * @var VerblijfsobjectLinksVoorkomens
     */
    protected $voorkomens;
    /**
     * Link naar de resource van het verblijfsobject
     *
     * @return VerblijfsobjectLinksSelf
     */
    public function getSelf() : ?VerblijfsobjectLinksSelf
    {
        return $this->self;
    }
    /**
     * Link naar de resource van het verblijfsobject
     *
     * @param VerblijfsobjectLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?VerblijfsobjectLinksSelf $self) : self
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
     * Een lijst van panden behorende bij dit verblijfsobject
     *
     * @return VerblijfsobjectLinksPandrelateringenItem[]
     */
    public function getPandrelateringen() : ?array
    {
        return $this->pandrelateringen;
    }
    /**
     * Een lijst van panden behorende bij dit verblijfsobject
     *
     * @param VerblijfsobjectLinksPandrelateringenItem[] $pandrelateringen
     *
     * @return self
     */
    public function setPandrelateringen(?array $pandrelateringen) : self
    {
        $this->pandrelateringen = $pandrelateringen;
        return $this;
    }
    /**
     * Een lijst van voorkomens behorende bij dit verblijfsobject
     *
     * @return VerblijfsobjectLinksVoorkomens
     */
    public function getVoorkomens() : ?VerblijfsobjectLinksVoorkomens
    {
        return $this->voorkomens;
    }
    /**
     * Een lijst van voorkomens behorende bij dit verblijfsobject
     *
     * @param VerblijfsobjectLinksVoorkomens $voorkomens
     *
     * @return self
     */
    public function setVoorkomens(?VerblijfsobjectLinksVoorkomens $voorkomens) : self
    {
        $this->voorkomens = $voorkomens;
        return $this;
    }
}