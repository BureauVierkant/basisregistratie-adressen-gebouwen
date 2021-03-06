<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class Polygon
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class Polygon
{
    /**
     * Het type geometrie
     *
     * @var string
     */
    protected $type;
    /**
     * Een geneste lijst van coördinaten in lengte- en breedtegraden in ETRS89, [EPSG:4258](http://spatialreference.org/ref/epsg/4258/). Deze is nagenoeg gelijk aan WGS84 [EPSG:4326](http://spatialreference.org/ref/epsg/4326/) en kan als standaard lengte- en breedtegraden worden gebruikt.
     *
     * @var float[][][]
     */
    protected $coordinates;
    /**
     * Het type geometrie
     *
     * @return string
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * Het type geometrie
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     * Een geneste lijst van coördinaten in lengte- en breedtegraden in ETRS89, [EPSG:4258](http://spatialreference.org/ref/epsg/4258/). Deze is nagenoeg gelijk aan WGS84 [EPSG:4326](http://spatialreference.org/ref/epsg/4326/) en kan als standaard lengte- en breedtegraden worden gebruikt.
     *
     * @return float[][][]
     */
    public function getCoordinates() : ?array
    {
        return $this->coordinates;
    }
    /**
     * Een geneste lijst van coördinaten in lengte- en breedtegraden in ETRS89, [EPSG:4258](http://spatialreference.org/ref/epsg/4258/). Deze is nagenoeg gelijk aan WGS84 [EPSG:4326](http://spatialreference.org/ref/epsg/4326/) en kan als standaard lengte- en breedtegraden worden gebruikt.
     *
     * @param float[][][] $coordinates
     *
     * @return self
     */
    public function setCoordinates(?array $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
}