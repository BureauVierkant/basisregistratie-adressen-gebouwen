<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class PandCollection
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class PandCollection
{
    /**
     * 
     *
     * @var PandCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @var PandCollectionLinks
     */
    protected $links;
    /**
     * 
     *
     * @return PandCollectionEmbedded
     */
    public function getEmbedded() : ?PandCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param PandCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?PandCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
    /**
     * 
     *
     * @return PandCollectionLinks
     */
    public function getLinks() : ?PandCollectionLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param PandCollectionLinks $links
     *
     * @return self
     */
    public function setLinks(?PandCollectionLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}