<?php

namespace BureauVierkant\Basisregistratie\Model;

class GeobodyPandGeometrie
{
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @var GeobodyPandGeometrieContains
     */
    protected $contains;
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @return GeobodyPandGeometrieContains
     */
    public function getContains() : ?GeobodyPandGeometrieContains
    {
        return $this->contains;
    }
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @param GeobodyPandGeometrieContains $contains
     *
     * @return self
     */
    public function setContains(?GeobodyPandGeometrieContains $contains) : self
    {
        $this->contains = $contains;
        return $this;
    }
}