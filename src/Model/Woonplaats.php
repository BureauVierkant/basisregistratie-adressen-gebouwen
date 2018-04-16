<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class Woonplaats
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class Woonplaats
{
    /**
     * Een identificatiecode van een woonplaats is een authentiek gegeven zoals opgenomen in de landelijke woonplaatsentabel
     *
     * @var string
     */
    protected $identificatiecode;
    /**
     * De naam van een woonplaats is de naam die de gemeente aan een woonplaats heeft gegeven.
     *
     * @var string
     */
    protected $naam;
    /**
     * Een aanduiding van alle waarden die de status van een woonplaats kan aannemen.
     *
     * @var string
     */
    protected $status;
    /**
     * Links voor deze woonplaats
     *
     * @var WoonplaatsLinks
     */
    protected $links;
    /**
     * 
     *
     * @var WoonplaatsEmbedded
     */
    protected $embedded;
    /**
     * Een identificatiecode van een woonplaats is een authentiek gegeven zoals opgenomen in de landelijke woonplaatsentabel
     *
     * @return string
     */
    public function getIdentificatiecode() : ?string
    {
        return $this->identificatiecode;
    }
    /**
     * Een identificatiecode van een woonplaats is een authentiek gegeven zoals opgenomen in de landelijke woonplaatsentabel
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
     * De naam van een woonplaats is de naam die de gemeente aan een woonplaats heeft gegeven.
     *
     * @return string
     */
    public function getNaam() : ?string
    {
        return $this->naam;
    }
    /**
     * De naam van een woonplaats is de naam die de gemeente aan een woonplaats heeft gegeven.
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
     * Een aanduiding van alle waarden die de status van een woonplaats kan aannemen.
     *
     * @return string
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * Een aanduiding van alle waarden die de status van een woonplaats kan aannemen.
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
     * Links voor deze woonplaats
     *
     * @return WoonplaatsLinks
     */
    public function getLinks() : ?WoonplaatsLinks
    {
        return $this->links;
    }
    /**
     * Links voor deze woonplaats
     *
     * @param WoonplaatsLinks $links
     *
     * @return self
     */
    public function setLinks(?WoonplaatsLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return WoonplaatsEmbedded
     */
    public function getEmbedded() : ?WoonplaatsEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param WoonplaatsEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?WoonplaatsEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}