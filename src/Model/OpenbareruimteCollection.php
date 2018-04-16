<?php

namespace BureauVierkant\Basisregistratie\Model;

class OpenbareruimteCollection
{
    /**
     * 
     *
     * @var OpenbareruimteCollectionEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @var OpenbareruimteCollectionLinks
     */
    protected $links;
    /**
     * 
     *
     * @return OpenbareruimteCollectionEmbedded
     */
    public function getEmbedded() : ?OpenbareruimteCollectionEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param OpenbareruimteCollectionEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?OpenbareruimteCollectionEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
    /**
     * 
     *
     * @return OpenbareruimteCollectionLinks
     */
    public function getLinks() : ?OpenbareruimteCollectionLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param OpenbareruimteCollectionLinks $links
     *
     * @return self
     */
    public function setLinks(?OpenbareruimteCollectionLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}