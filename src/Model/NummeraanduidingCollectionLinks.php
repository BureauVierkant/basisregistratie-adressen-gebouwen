<?php

namespace BureauVierkant\Basisregistratie\Model;

class NummeraanduidingCollectionLinks
{
    /**
     * 
     *
     * @var NummeraanduidingCollectionLinksSelf
     */
    protected $self;
    /**
     * 
     *
     * @var NummeraanduidingCollectionLinksNext
     */
    protected $next;
    /**
     * 
     *
     * @return NummeraanduidingCollectionLinksSelf
     */
    public function getSelf() : ?NummeraanduidingCollectionLinksSelf
    {
        return $this->self;
    }
    /**
     * 
     *
     * @param NummeraanduidingCollectionLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?NummeraanduidingCollectionLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * 
     *
     * @return NummeraanduidingCollectionLinksNext
     */
    public function getNext() : ?NummeraanduidingCollectionLinksNext
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param NummeraanduidingCollectionLinksNext $next
     *
     * @return self
     */
    public function setNext(?NummeraanduidingCollectionLinksNext $next) : self
    {
        $this->next = $next;
        return $this;
    }
}