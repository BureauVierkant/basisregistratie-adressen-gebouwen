<?php

namespace BureauVierkant\Basisregistratie\Model;

class VerblijfsobjectCollection
{
    /**
     * 
     *
     * @var VerblijfsobjectCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @var VerblijfsobjectCollectionLinks
     */
    protected $links;
    /**
     * 
     *
     * @return VerblijfsobjectCollectionEmbedded
     */
    public function getEmbedded() : ?VerblijfsobjectCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param VerblijfsobjectCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?VerblijfsobjectCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
    /**
     * 
     *
     * @return VerblijfsobjectCollectionLinks
     */
    public function getLinks() : ?VerblijfsobjectCollectionLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param VerblijfsobjectCollectionLinks $links
     *
     * @return self
     */
    public function setLinks(?VerblijfsobjectCollectionLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}