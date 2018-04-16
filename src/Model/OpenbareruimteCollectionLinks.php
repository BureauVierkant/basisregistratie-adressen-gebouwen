<?php

namespace BureauVierkant\Basisregistratie\Model;

class OpenbareruimteCollectionLinks
{
    /**
     * 
     *
     * @var OpenbareruimteCollectionLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var OpenbareruimteCollectionLinksNext
     */
    protected $next;
    /**
     * 
     *
     * @return OpenbareruimteCollectionLinksSelf
     */
    public function getSelf() : ?OpenbareruimteCollectionLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param OpenbareruimteCollectionLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?OpenbareruimteCollectionLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return OpenbareruimteCollectionLinksNext
     */
    public function getNext() : ?OpenbareruimteCollectionLinksNext
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param OpenbareruimteCollectionLinksNext $next
     *
     * @return self
     */
    public function setNext(?OpenbareruimteCollectionLinksNext $next) : self
    {
        $this->next = $next;
        return $this;
    }
}