<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class GeobodyVerblijfsobjectGeometrie
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class GeobodyVerblijfsobjectGeometrie
{
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @var GeobodyVerblijfsobjectGeometrieContains
     */
    protected $contains;
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @return GeobodyVerblijfsobjectGeometrieContains
     */
    public function getContains() : ?GeobodyVerblijfsobjectGeometrieContains
    {
        return $this->contains;
    }
    /**
     * Deze property bepaalt het type query. In dit geval `contains`, maar het kan ook `within`, `disjoint` of `intersects` zijn. Het moet een valide GeoJSON `Point` of `Polygon` object bevatten.
     *
     * @param GeobodyVerblijfsobjectGeometrieContains $contains
     *
     * @return self
     */
    public function setContains(?GeobodyVerblijfsobjectGeometrieContains $contains) : self
    {
        $this->contains = $contains;
        return $this;
    }
}