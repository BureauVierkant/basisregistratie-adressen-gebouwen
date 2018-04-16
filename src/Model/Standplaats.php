<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class Standplaats
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class Standplaats
{
    /**
     * Een identificatiecode van een standplaats is een authentiek gegeven en een unieke aanduiding van de standplaats.
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
     * Links voor deze standplaats
     *
     * @var StandplaatsLinks
     */
    protected $links;
    /**
     * 
     *
     * @var StandplaatsEmbedded
     */
    protected $embedded;
    /**
     * Een identificatiecode van een standplaats is een authentiek gegeven en een unieke aanduiding van de standplaats.
     *
     * @return string
     */
    public function getIdentificatiecode() : ?string
    {
        return $this->identificatiecode;
    }
    /**
     * Een identificatiecode van een standplaats is een authentiek gegeven en een unieke aanduiding van de standplaats.
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
     * Links voor deze standplaats
     *
     * @return StandplaatsLinks
     */
    public function getLinks() : ?StandplaatsLinks
    {
        return $this->links;
    }
    /**
     * Links voor deze standplaats
     *
     * @param StandplaatsLinks $links
     *
     * @return self
     */
    public function setLinks(?StandplaatsLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return StandplaatsEmbedded
     */
    public function getEmbedded() : ?StandplaatsEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param StandplaatsEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?StandplaatsEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}