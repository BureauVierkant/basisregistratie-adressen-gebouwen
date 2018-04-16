<?php

namespace BureauVierkant\Basisregistratie\Model;

class GeobodyLigplaats
{
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @var GeobodyLigplaatsGeometrie
     */
    protected $geometrie;
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @return GeobodyLigplaatsGeometrie
     */
    public function getGeometrie() : ?GeobodyLigplaatsGeometrie
    {
        return $this->geometrie;
    }
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @param GeobodyLigplaatsGeometrie $geometrie
     *
     * @return self
     */
    public function setGeometrie(?GeobodyLigplaatsGeometrie $geometrie) : self
    {
        $this->geometrie = $geometrie;
        return $this;
    }
}