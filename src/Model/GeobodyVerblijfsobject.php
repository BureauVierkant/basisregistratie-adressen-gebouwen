<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class GeobodyVerblijfsobject
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class GeobodyVerblijfsobject
{
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @var GeobodyVerblijfsobjectGeometrie
     */
    protected $geometrie;
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @return GeobodyVerblijfsobjectGeometrie
     */
    public function getGeometrie() : ?GeobodyVerblijfsobjectGeometrie
    {
        return $this->geometrie;
    }
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @param GeobodyVerblijfsobjectGeometrie $geometrie
     *
     * @return self
     */
    public function setGeometrie(?GeobodyVerblijfsobjectGeometrie $geometrie) : self
    {
        $this->geometrie = $geometrie;
        return $this;
    }
}