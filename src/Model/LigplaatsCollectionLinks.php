<?php

namespace BureauVierkant\Basisregistratie\Model;

class LigplaatsCollectionLinks
{
    /**
     * 
     *
     * @var LigplaatsCollectionLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var LigplaatsCollectionLinksNext
     */
    protected $next;
    /**
     * 
     *
     * @return LigplaatsCollectionLinksSelf
     */
    public function getSelf() : ?LigplaatsCollectionLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param LigplaatsCollectionLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?LigplaatsCollectionLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return LigplaatsCollectionLinksNext
     */
    public function getNext() : ?LigplaatsCollectionLinksNext
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param LigplaatsCollectionLinksNext $next
     *
     * @return self
     */
    public function setNext(?LigplaatsCollectionLinksNext $next) : self
    {
        $this->next = $next;
        return $this;
    }
}