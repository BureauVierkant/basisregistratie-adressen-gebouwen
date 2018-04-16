<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class GeobodyStandplaatsGeometrie
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class GeobodyStandplaatsGeometrie
{
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @var GeobodyStandplaatsGeometrieContains
     */
    protected $contains;
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @return GeobodyStandplaatsGeometrieContains
     */
    public function getContains() : ?GeobodyStandplaatsGeometrieContains
    {
        return $this->contains;
    }
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @param GeobodyStandplaatsGeometrieContains $contains
     *
     * @return self
     */
    public function setContains(?GeobodyStandplaatsGeometrieContains $contains) : self
    {
        $this->contains = $contains;
        return $this;
    }
}