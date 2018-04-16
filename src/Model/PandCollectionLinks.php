<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class PandCollectionLinks
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class PandCollectionLinks
{
    /**
     * 
     *
     * @var PandCollectionLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var PandCollectionLinksNext
     */
    protected $next;
    /**
     * 
     *
     * @return PandCollectionLinksSelf
     */
    public function getSelf() : ?PandCollectionLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param PandCollectionLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?PandCollectionLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return PandCollectionLinksNext
     */
    public function getNext() : ?PandCollectionLinksNext
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param PandCollectionLinksNext $next
     *
     * @return self
     */
    public function setNext(?PandCollectionLinksNext $next) : self
    {
        $this->next = $next;
        return $this;
    }
}