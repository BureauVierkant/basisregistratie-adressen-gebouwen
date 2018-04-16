<?php

namespace BureauVierkant\Basisregistratie\Model;

class WoonplaatsCollectionLinks
{
    /**
     * 
     *
     * @var WoonplaatsCollectionLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var WoonplaatsCollectionLinksNext
     */
    protected $next;
    /**
     * 
     *
     * @return WoonplaatsCollectionLinksSelf
     */
    public function getSelf() : ?WoonplaatsCollectionLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param WoonplaatsCollectionLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?WoonplaatsCollectionLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return WoonplaatsCollectionLinksNext
     */
    public function getNext() : ?WoonplaatsCollectionLinksNext
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param WoonplaatsCollectionLinksNext $next
     *
     * @return self
     */
    public function setNext(?WoonplaatsCollectionLinksNext $next) : self
    {
        $this->next = $next;
        return $this;
    }
}