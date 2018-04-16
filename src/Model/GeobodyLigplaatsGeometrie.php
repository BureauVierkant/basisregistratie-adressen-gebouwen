<?php

namespace BureauVierkant\Basisregistratie\Model;

class GeobodyLigplaatsGeometrie
{
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @var GeobodyLigplaatsGeometrieContains
     */
    protected $contains;
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @return GeobodyLigplaatsGeometrieContains
     */
    public function getContains() : ?GeobodyLigplaatsGeometrieContains
    {
        return $this->contains;
    }
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @param GeobodyLigplaatsGeometrieContains $contains
     *
     * @return self
     */
    public function setContains(?GeobodyLigplaatsGeometrieContains $contains) : self
    {
        $this->contains = $contains;
        return $this;
    }
}