<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class Geobody
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class Geobody
{
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @var GeobodyGeometrie
     */
    protected $geometrie;
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @return GeobodyGeometrie
     */
    public function getGeometrie() : ?GeobodyGeometrie
    {
        return $this->geometrie;
    }
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @param GeobodyGeometrie $geometrie
     *
     * @return self
     */
    public function setGeometrie(?GeobodyGeometrie $geometrie) : self
    {
        $this->geometrie = $geometrie;
        return $this;
    }
}