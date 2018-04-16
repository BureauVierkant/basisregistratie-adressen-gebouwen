<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class NummeraanduidingLinks
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class NummeraanduidingLinks
{
    /**
     * Link naar de resource van de nummeraanduiding
     *
     * @var NummeraanduidingLinksSelf
     */
    protected $self;
    /**
     * Link naar de openbare ruimte bijbehorende bij deze nummeraanduiding
     *
     * @var NummeraanduidingLinksBijbehorendeOpenbareRuimte
     */
    protected $bijbehorendeOpenbareRuimte;
    /**
     * Een lijst van voorkomens behorende bij deze nummeraanduiding
     *
     * @var NummeraanduidingLinksVoorkomens
     */
    protected $voorkomens;
    /**
     * Link naar het adresseerbare object, bijvoorbeeld standplaats, ligplaats of verblijfsObject behorende bij deze nummeraanduiding
     *
     * @var NummeraanduidingLinksAdresseerbaarObject
     */
    protected $adresseerbaarObject;
    /**
     * Link naar de resource van de nummeraanduiding
     *
     * @return NummeraanduidingLinksSelf
     */
    public function getSelf() : ?NummeraanduidingLinksSelf
    {
        return $this->self;
    }
    /**
     * Link naar de resource van de nummeraanduiding
     *
     * @param NummeraanduidingLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?NummeraanduidingLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * Link naar de openbare ruimte bijbehorende bij deze nummeraanduiding
     *
     * @return NummeraanduidingLinksBijbehorendeOpenbareRuimte
     */
    public function getBijbehorendeOpenbareRuimte() : ?NummeraanduidingLinksBijbehorendeOpenbareRuimte
    {
        return $this->bijbehorendeOpenbareRuimte;
    }
    /**
     * Link naar de openbare ruimte bijbehorende bij deze nummeraanduiding
     *
     * @param NummeraanduidingLinksBijbehorendeOpenbareRuimte $bijbehorendeOpenbareRuimte
     *
     * @return self
     */
    public function setBijbehorendeOpenbareRuimte(?NummeraanduidingLinksBijbehorendeOpenbareRuimte $bijbehorendeOpenbareRuimte) : self
    {
        $this->bijbehorendeOpenbareRuimte = $bijbehorendeOpenbareRuimte;
        return $this;
    }
    /**
     * Een lijst van voorkomens behorende bij deze nummeraanduiding
     *
     * @return NummeraanduidingLinksVoorkomens
     */
    public function getVoorkomens() : ?NummeraanduidingLinksVoorkomens
    {
        return $this->voorkomens;
    }
    /**
     * Een lijst van voorkomens behorende bij deze nummeraanduiding
     *
     * @param NummeraanduidingLinksVoorkomens $voorkomens
     *
     * @return self
     */
    public function setVoorkomens(?NummeraanduidingLinksVoorkomens $voorkomens) : self
    {
        $this->voorkomens = $voorkomens;
        return $this;
    }
    /**
     * Link naar het adresseerbare object, bijvoorbeeld standplaats, ligplaats of verblijfsObject behorende bij deze nummeraanduiding
     *
     * @return NummeraanduidingLinksAdresseerbaarObject
     */
    public function getAdresseerbaarObject() : ?NummeraanduidingLinksAdresseerbaarObject
    {
        return $this->adresseerbaarObject;
    }
    /**
     * Link naar het adresseerbare object, bijvoorbeeld standplaats, ligplaats of verblijfsObject behorende bij deze nummeraanduiding
     *
     * @param NummeraanduidingLinksAdresseerbaarObject $adresseerbaarObject
     *
     * @return self
     */
    public function setAdresseerbaarObject(?NummeraanduidingLinksAdresseerbaarObject $adresseerbaarObject) : self
    {
        $this->adresseerbaarObject = $adresseerbaarObject;
        return $this;
    }
}