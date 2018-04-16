<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class LigplaatsCollection
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class LigplaatsCollection
{
    /**
     * 
     *
     * @var LigplaatsCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @var LigplaatsCollectionLinks
     */
    protected $links;
    /**
     * 
     *
     * @return LigplaatsCollectionEmbedded
     */
    public function getEmbedded() : ?LigplaatsCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param LigplaatsCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?LigplaatsCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
    /**
     * 
     *
     * @return LigplaatsCollectionLinks
     */
    public function getLinks() : ?LigplaatsCollectionLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param LigplaatsCollectionLinks $links
     *
     * @return self
     */
    public function setLinks(?LigplaatsCollectionLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}