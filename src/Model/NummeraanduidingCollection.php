<?php

namespace BureauVierkant\Basisregistratie\Model;

class NummeraanduidingCollection
{
    /**
     * 
     *
     * @var NummeraanduidingCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @var NummeraanduidingCollectionLinks
     */
    protected $links;
    /**
     * 
     *
     * @return NummeraanduidingCollectionEmbedded
     */
    public function getEmbedded() : ?NummeraanduidingCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param NummeraanduidingCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?NummeraanduidingCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
    /**
     * 
     *
     * @return NummeraanduidingCollectionLinks
     */
    public function getLinks() : ?NummeraanduidingCollectionLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param NummeraanduidingCollectionLinks $links
     *
     * @return self
     */
    public function setLinks(?NummeraanduidingCollectionLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}