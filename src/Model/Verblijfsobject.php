<?php

namespace BureauVierkant\Basisregistratie\Model;

class Verblijfsobject
{
    /**
     * Een identificatiecode van een verblijfsobject is een authentiek gegeven en een unieke aanduiding van het verblijfsobject.
     *
     * @var string
     */
    protected $identificatiecode;
    /**
     * Een oppervlakte is de gebruiksoppervlakte van een verblijfsobject en een authentiek gegeven
     *
     * @var int
     */
    protected $oppervlakte;
    /**
     * Een aanduiding van alle waarden die de status van een verblijfsobject kan aannemen.
     *
     * @var string
     */
    protected $status;
    /**
     * Links voor dit verblijfsobject
     *
     * @var VerblijfsobjectLinks
     */
    protected $links;
    /**
     * 
     *
     * @var VerblijfsobjectEmbedded
     */
    protected $embedded;
    /**
     * Een identificatiecode van een verblijfsobject is een authentiek gegeven en een unieke aanduiding van het verblijfsobject.
     *
     * @return string
     */
    public function getIdentificatiecode() : ?string
    {
        return $this->identificatiecode;
    }
    /**
     * Een identificatiecode van een verblijfsobject is een authentiek gegeven en een unieke aanduiding van het verblijfsobject.
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
     * Een oppervlakte is de gebruiksoppervlakte van een verblijfsobject en een authentiek gegeven
     *
     * @return int
     */
    public function getOppervlakte() : ?int
    {
        return $this->oppervlakte;
    }
    /**
     * Een oppervlakte is de gebruiksoppervlakte van een verblijfsobject en een authentiek gegeven
     *
     * @param int $oppervlakte
     *
     * @return self
     */
    public function setOppervlakte(?int $oppervlakte) : self
    {
        $this->oppervlakte = $oppervlakte;
        return $this;
    }
    /**
     * Een aanduiding van alle waarden die de status van een verblijfsobject kan aannemen.
     *
     * @return string
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * Een aanduiding van alle waarden die de status van een verblijfsobject kan aannemen.
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
     * Links voor dit verblijfsobject
     *
     * @return VerblijfsobjectLinks
     */
    public function getLinks() : ?VerblijfsobjectLinks
    {
        return $this->links;
    }
    /**
     * Links voor dit verblijfsobject
     *
     * @param VerblijfsobjectLinks $links
     *
     * @return self
     */
    public function setLinks(?VerblijfsobjectLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return VerblijfsobjectEmbedded
     */
    public function getEmbedded() : ?VerblijfsobjectEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param VerblijfsobjectEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?VerblijfsobjectEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}