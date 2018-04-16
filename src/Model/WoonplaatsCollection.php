<?php

namespace BureauVierkant\Basisregistratie\Model;

class WoonplaatsCollection
{
    /**
     * 
     *
     * @var WoonplaatsCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @var WoonplaatsCollectionLinks
     */
    protected $links;
    /**
     * 
     *
     * @return WoonplaatsCollectionEmbedded
     */
    public function getEmbedded() : ?WoonplaatsCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param WoonplaatsCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?WoonplaatsCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
    /**
     * 
     *
     * @return WoonplaatsCollectionLinks
     */
    public function getLinks() : ?WoonplaatsCollectionLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param WoonplaatsCollectionLinks $links
     *
     * @return self
     */
    public function setLinks(?WoonplaatsCollectionLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}