<?php

namespace BureauVierkant\Basisregistratie\Model;

class VerblijfsobjectCollectionLinks
{
    /**
     * 
     *
     * @var VerblijfsobjectCollectionLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var VerblijfsobjectCollectionLinksNext
     */
    protected $next;
    /**
     * 
     *
     * @return VerblijfsobjectCollectionLinksSelf
     */
    public function getSelf() : ?VerblijfsobjectCollectionLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param VerblijfsobjectCollectionLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?VerblijfsobjectCollectionLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return VerblijfsobjectCollectionLinksNext
     */
    public function getNext() : ?VerblijfsobjectCollectionLinksNext
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param VerblijfsobjectCollectionLinksNext $next
     *
     * @return self
     */
    public function setNext(?VerblijfsobjectCollectionLinksNext $next) : self
    {
        $this->next = $next;
        return $this;
    }
}