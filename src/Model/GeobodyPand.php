<?php

namespace BureauVierkant\Basisregistratie\Model;

class GeobodyPand
{
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @var GeobodyPandGeometrie
     */
    protected $geometrie;
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @return GeobodyPandGeometrie
     */
    public function getGeometrie() : ?GeobodyPandGeometrie
    {
        return $this->geometrie;
    }
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @param GeobodyPandGeometrie $geometrie
     *
     * @return self
     */
    public function setGeometrie(?GeobodyPandGeometrie $geometrie) : self
    {
        $this->geometrie = $geometrie;
        return $this;
    }
}