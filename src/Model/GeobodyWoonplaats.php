<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class GeobodyWoonplaats
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class GeobodyWoonplaats
{
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @var GeobodyWoonplaatsGeometrie
     */
    protected $geometrie;
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @return GeobodyWoonplaatsGeometrie
     */
    public function getGeometrie() : ?GeobodyWoonplaatsGeometrie
    {
        return $this->geometrie;
    }
    /**
     * Het veld waarop geografisch gezocht moet worden. In dit geval is dit het veld `geometrie`.
     *
     * @param GeobodyWoonplaatsGeometrie $geometrie
     *
     * @return self
     */
    public function setGeometrie(?GeobodyWoonplaatsGeometrie $geometrie) : self
    {
        $this->geometrie = $geometrie;
        return $this;
    }
}