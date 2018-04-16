<?php

namespace BureauVierkant\Basisregistratie\Model;

class Ligplaats
{
    /**
     * Een identificatiecode van een ligplaats is een authentiek gegeven en een unieke aanduiding van de ligplaats.
     *
     * @var string
     */
    protected $identificatiecode;
    /**
     * Een aanduiding van alle waarden die de status van een ligplaats en een standplaats kan aannemen.
     *
     * @var string
     */
    protected $status;
    /**
     * Links voor deze ligplaats
     *
     * @var LigplaatsLinks
     */
    protected $links;
    /**
     * 
     *
     * @var LigplaatsEmbedded
     */
    protected $embedded;
    /**
     * Een identificatiecode van een ligplaats is een authentiek gegeven en een unieke aanduiding van de ligplaats.
     *
     * @return string
     */
    public function getIdentificatiecode() : ?string
    {
        return $this->identificatiecode;
    }
    /**
     * Een identificatiecode van een ligplaats is een authentiek gegeven en een unieke aanduiding van de ligplaats.
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
     * Een aanduiding van alle waarden die de status van een ligplaats en een standplaats kan aannemen.
     *
     * @return string
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * Een aanduiding van alle waarden die de status van een ligplaats en een standplaats kan aannemen.
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
     * Links voor deze ligplaats
     *
     * @return LigplaatsLinks
     */
    public function getLinks() : ?LigplaatsLinks
    {
        return $this->links;
    }
    /**
     * Links voor deze ligplaats
     *
     * @param LigplaatsLinks $links
     *
     * @return self
     */
    public function setLinks(?LigplaatsLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return LigplaatsEmbedded
     */
    public function getEmbedded() : ?LigplaatsEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param LigplaatsEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?LigplaatsEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}