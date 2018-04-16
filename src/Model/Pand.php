<?php

namespace BureauVierkant\Basisregistratie\Model;

class Pand
{
    /**
     * Een identificatiecode van een pand is een authentiek gegeven en een unieke aanduiding van het pand.
     *
     * @var string
     */
    protected $identificatiecode;
    /**
     * Een bouwjaar is een authentiek gegeven met betrekking tot het jaar dat een pand bouwkundig gereed is of wordt opgeleverd.
     *
     * @var int
     */
    protected $oorspronkelijkBouwjaar;
    /**
     * Een codering van de verschillende waarden die de status van een pand kan aannemen.
     *
     * @var string
     */
    protected $status;
    /**
     * Links voor dit pand
     *
     * @var PandLinks
     */
    protected $links;
    /**
     * 
     *
     * @var PandEmbedded
     */
    protected $embedded;
    /**
     * Een identificatiecode van een pand is een authentiek gegeven en een unieke aanduiding van het pand.
     *
     * @return string
     */
    public function getIdentificatiecode() : ?string
    {
        return $this->identificatiecode;
    }
    /**
     * Een identificatiecode van een pand is een authentiek gegeven en een unieke aanduiding van het pand.
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
     * Een bouwjaar is een authentiek gegeven met betrekking tot het jaar dat een pand bouwkundig gereed is of wordt opgeleverd.
     *
     * @return int
     */
    public function getOorspronkelijkBouwjaar() : ?int
    {
        return $this->oorspronkelijkBouwjaar;
    }
    /**
     * Een bouwjaar is een authentiek gegeven met betrekking tot het jaar dat een pand bouwkundig gereed is of wordt opgeleverd.
     *
     * @param int $oorspronkelijkBouwjaar
     *
     * @return self
     */
    public function setOorspronkelijkBouwjaar(?int $oorspronkelijkBouwjaar) : self
    {
        $this->oorspronkelijkBouwjaar = $oorspronkelijkBouwjaar;
        return $this;
    }
    /**
     * Een codering van de verschillende waarden die de status van een pand kan aannemen.
     *
     * @return string
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * Een codering van de verschillende waarden die de status van een pand kan aannemen.
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
     * Links voor dit pand
     *
     * @return PandLinks
     */
    public function getLinks() : ?PandLinks
    {
        return $this->links;
    }
    /**
     * Links voor dit pand
     *
     * @param PandLinks $links
     *
     * @return self
     */
    public function setLinks(?PandLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
    /**
     * 
     *
     * @return PandEmbedded
     */
    public function getEmbedded() : ?PandEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param PandEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?PandEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
}