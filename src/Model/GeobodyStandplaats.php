<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class GeobodyStandplaats
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class GeobodyStandplaats
{
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @var GeobodyStandplaatsGeometrie
     */
    protected $geometrie;
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @return GeobodyStandplaatsGeometrie
     */
    public function getGeometrie() : ?GeobodyStandplaatsGeometrie
    {
        return $this->geometrie;
    }
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @param GeobodyStandplaatsGeometrie $geometrie
     *
     * @return self
     */
    public function setGeometrie(?GeobodyStandplaatsGeometrie $geometrie) : self
    {
        $this->geometrie = $geometrie;
        return $this;
    }
}