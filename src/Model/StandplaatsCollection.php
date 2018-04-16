<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class StandplaatsCollection
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class StandplaatsCollection
{
    /**
     * 
     *
     * @var StandplaatsCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @var StandplaatsCollectionLinks
     */
    protected $links;
    /**
     * 
     *
     * @return StandplaatsCollectionEmbedded
     */
    public function getEmbedded() : ?StandplaatsCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param StandplaatsCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?StandplaatsCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
    /**
     * 
     *
     * @return StandplaatsCollectionLinks
     */
    public function getLinks() : ?StandplaatsCollectionLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param StandplaatsCollectionLinks $links
     *
     * @return self
     */
    public function setLinks(?StandplaatsCollectionLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}