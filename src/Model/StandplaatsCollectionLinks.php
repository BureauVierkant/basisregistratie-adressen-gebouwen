<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class StandplaatsCollectionLinks
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class StandplaatsCollectionLinks
{
    /**
     * 
     *
     * @var StandplaatsCollectionLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var StandplaatsCollectionLinksNext
     */
    protected $next;
    /**
     * 
     *
     * @return StandplaatsCollectionLinksSelf
     */
    public function getSelf() : ?StandplaatsCollectionLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param StandplaatsCollectionLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?StandplaatsCollectionLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return StandplaatsCollectionLinksNext
     */
    public function getNext() : ?StandplaatsCollectionLinksNext
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param StandplaatsCollectionLinksNext $next
     *
     * @return self
     */
    public function setNext(?StandplaatsCollectionLinksNext $next) : self
    {
        $this->next = $next;
        return $this;
    }
}