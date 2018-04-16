<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class GeobodyWoonplaatsGeometrie
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class GeobodyWoonplaatsGeometrie
{
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @var GeobodyWoonplaatsGeometrieContains
     */
    protected $contains;
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @return GeobodyWoonplaatsGeometrieContains
     */
    public function getContains() : ?GeobodyWoonplaatsGeometrieContains
    {
        return $this->contains;
    }
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @param GeobodyWoonplaatsGeometrieContains $contains
     *
     * @return self
     */
    public function setContains(?GeobodyWoonplaatsGeometrieContains $contains) : self
    {
        $this->contains = $contains;
        return $this;
    }
}