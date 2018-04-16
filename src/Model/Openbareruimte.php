<?php

namespace BureauVierkant\Basisregistratie\Model;

class Openbareruimte
{
    /**
     * Een identificatiecode van een openbare ruimte is een authentiek gegeven en een unieke aanduiding van de openbare ruimte.
     *
     * @var string
     */
    protected $identificatiecode;
    /**
     * 
     *
     * @var string[]
     */
    protected $type;
    /**
     * De naam openbare ruimte is de naam die de gemeente heeft gegeven aan een openbare ruimte.
     *
     * @var string
     */
    protected $naam;
    /**
     * Een verkorte naam van de openbare ruimte als deze langer dan 24 posities is.
     *
     * @var string
     */
    protected $verkorteNaam;
    /**
     * Een aanduiding van alle waarden die de status van een openbare ruimte of een nummeraanduiding kan aannemen.
     *
     * @var string
     */
    protected $status;
    /**
     * Links voor deze openbare ruimte
     *
     * @var OpenbareruimteLinks
     */
    protected $links;
    /**
     * 
     *
     * @var OpenbareruimteEmbedded
     */
    protected $embedded;
    /**
     * Een identificatiecode van een openbare ruimte is een authentiek gegeven en een unieke aanduiding van de openbare ruimte.
     *
     * @return string
     */
    public function getIdentificatiecode() : ?string
    {
        return $this->identificatiecode;
    }
    /**
     * Een identificatiecode van een openbare ruimte is een authentiek gegeven en een unieke aanduiding van de openbare ruimte.
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
     * 
     *
     * @return string[]
     */
    public function getType() : ?array
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string[] $type
     *
     * @return self
     */
    public function setType(?array $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * De naam openbare ruimte is de naam die de gemeente heeft gegeven aan een openbare ruimte.
     *
     * @return string
     */
    public function getNaam() : ?string
    {
        return $this->naam;
    }
    /**
     * De naam openbare ruimte is de naam die de gemeente heeft gegeven aan een openbare ruimte.
     *
     * @param string $naam
     *
     * @return self
     */
    public function setNaam(?string $naam) : self
    {
        $this->naam = $naam;
        return $this;
    }
    /**
     * Een verkorte naam van de openbare ruimte als deze langer dan 24 posities is.
     *
     * @return string
     */
    public function getVerkorteNaam() : ?string
    {
        return $this->verkorteNaam;
    }
    /**
     * Een verkorte naam van de openbare ruimte als deze langer dan 24 posities is.
     *
     * @param string $verkorteNaam
     *
     * @return self
     */
    public function setVerkorteNaam(?string $verkorteNaam) : self
    {
        $this->verkorteNaam = $verkorteNaam;
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
     * Links voor deze openbare ruimte
     *
     * @return OpenbareruimteLinks
     */
    public function getLinks() : ?OpenbareruimteLinks
    {
        return $this->links;
    }
    /**
     * Links voor deze openbare ruimte
     *
     * @param OpenbareruimteLinks $links
     *
     * @return self
     */
    public function setLinks(?OpenbareruimteLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return OpenbareruimteEmbedded
     */
    public function getEmbedded() : ?OpenbareruimteEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param OpenbareruimteEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?OpenbareruimteEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}