<?php

namespace BureauVierkant\Basisregistratie\Model;

class Nummeraanduiding
{
    /**
     * Een huisletter is een authentiek gegeven met betrekking tot een nummeraanduiding. Het is de lettering van een adresseerbaar object
     *
     * @var string
     */
    protected $identificatiecode;
    /**
     * Een huisletter is een authentiek gegeven met betrekking tot een nummeraanduiding. Het is de lettering van een adresseerbaar object
     *
     * @var string
     */
    protected $huisletter;
    /**
     * Een huisnummer is een authentiek gegeven met betrekking tot een nummeraanduiding. Het is de nummering van een adresseerbaar object.
     *
     * @var int
     */
    protected $huisnummer;
    /**
     * Een huisnummertoevoeging is een authentiek gegeven met betrekking tot een nummeraanduiding. Het is de toevoeging aan de nummering van een adresseerbaar object.
     *
     * @var string
     */
    protected $huisnummertoevoeging;
    /**
     * De postcode is een coderingssystematiek zoals ontwikkeld en beheerd door PostNL. Een postcode is een niet-authentiek gegeven met betrekking tot een nummeraanduiding
     *
     * @var string
     */
    protected $postcode;
    /**
     * Een aanduiding van alle waarden die de status van een openbare ruimte of een nummeraanduiding kan aannemen.
     *
     * @var string
     */
    protected $status;
    /**
     * Links voor deze nummeraanduiding
     *
     * @var NummeraanduidingLinks
     */
    protected $links;
    /**
     * 
     *
     * @var NummeraanduidingEmbedded
     */
    protected $embedded;
    /**
     * Een huisletter is een authentiek gegeven met betrekking tot een nummeraanduiding. Het is de lettering van een adresseerbaar object
     *
     * @return string
     */
    public function getIdentificatiecode() : ?string
    {
        return $this->identificatiecode;
    }
    /**
     * Een huisletter is een authentiek gegeven met betrekking tot een nummeraanduiding. Het is de lettering van een adresseerbaar object
     *
     * @param string $identificatiecode
     *
     * @return self
     */
    public function setIdentificatiecode(?string $identificatiecode) : self
    {
        $this->identificatiecode = $identificatiecode;
        return $this;
    }
    /**
     * Een huisletter is een authentiek gegeven met betrekking tot een nummeraanduiding. Het is de lettering van een adresseerbaar object
     *
     * @return string
     */
    public function getHuisletter() : ?string
    {
        return $this->huisletter;
    }
    /**
     * Een huisletter is een authentiek gegeven met betrekking tot een nummeraanduiding. Het is de lettering van een adresseerbaar object
     *
     * @param string $huisletter
     *
     * @return self
     */
    public function setHuisletter(?string $huisletter) : self
    {
        $this->huisletter = $huisletter;
        return $this;
    }
    /**
     * Een huisnummer is een authentiek gegeven met betrekking tot een nummeraanduiding. Het is de nummering van een adresseerbaar object.
     *
     * @return int
     */
    public function getHuisnummer() : ?int
    {
        return $this->huisnummer;
    }
    /**
     * Een huisnummer is een authentiek gegeven met betrekking tot een nummeraanduiding. Het is de nummering van een adresseerbaar object.
     *
     * @param int $huisnummer
     *
     * @return self
     */
    public function setHuisnummer(?int $huisnummer) : self
    {
        $this->huisnummer = $huisnummer;
        return $this;
    }
    /**
     * Een huisnummertoevoeging is een authentiek gegeven met betrekking tot een nummeraanduiding. Het is de toevoeging aan de nummering van een adresseerbaar object.
     *
     * @return string
     */
    public function getHuisnummertoevoeging() : ?string
    {
        return $this->huisnummertoevoeging;
    }
    /**
     * Een huisnummertoevoeging is een authentiek gegeven met betrekking tot een nummeraanduiding. Het is de toevoeging aan de nummering van een adresseerbaar object.
     *
     * @param string $huisnummertoevoeging
     *
     * @return self
     */
    public function setHuisnummertoevoeging(?string $huisnummertoevoeging) : self
    {
        $this->huisnummertoevoeging = $huisnummertoevoeging;
        return $this;
    }
    /**
     * De postcode is een coderingssystematiek zoals ontwikkeld en beheerd door PostNL. Een postcode is een niet-authentiek gegeven met betrekking tot een nummeraanduiding
     *
     * @return string
     */
    public function getPostcode() : ?string
    {
        return $this->postcode;
    }
    /**
     * De postcode is een coderingssystematiek zoals ontwikkeld en beheerd door PostNL. Een postcode is een niet-authentiek gegeven met betrekking tot een nummeraanduiding
     *
     * @param string $postcode
     *
     * @return self
     */
    public function setPostcode(?string $postcode) : self
    {
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * Een aanduiding van alle waarden die de status van een openbare ruimte of een nummeraanduiding kan aannemen.
     *
     * @return string
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * Een aanduiding van alle waarden die de status van een openbare ruimte of een nummeraanduiding kan aannemen.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * Links voor deze nummeraanduiding
     *
     * @return NummeraanduidingLinks
     */
    public function getLinks() : ?NummeraanduidingLinks
    {
        return $this->links;
    }
    /**
     * Links voor deze nummeraanduiding
     *
     * @param NummeraanduidingLinks $links
     *
     * @return self
     */
    public function setLinks(?NummeraanduidingLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return NummeraanduidingEmbedded
     */
    public function getEmbedded() : ?NummeraanduidingEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param NummeraanduidingEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?NummeraanduidingEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}