<?php

namespace BureauVierkant\Basisregistratie\Model;

class GeobodyStandplaatsGeometrieContains
{
    /**
     * Het type geometrie. De BAG API ondersteunt momenteel GeoJSON `Point` en `Polygon` objecten.
     *
     * @var string
     */
    protected $type;
    /**
     * De coördinaten behorende bij dit GeoJSON object.
     *
     * @var float[]
     */
    protected $coordinates;
    /**
     * Het type geometrie. De BAG API ondersteunt momenteel GeoJSON `Point` en `Polygon` objecten.
     *
     * @return string
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * Het type geometrie. De BAG API ondersteunt momenteel GeoJSON `Point` en `Polygon` objecten.
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
     * De coördinaten behorende bij dit GeoJSON object.
     *
     * @return float[]
     */
    public function getCoordinates() : ?array
    {
        return $this->coordinates;
    }
    /**
     * De coördinaten behorende bij dit GeoJSON object.
     *
     * @param float[] $coordinates
     *
     * @return self
     */
    public function setCoordinates(?array $coordinates) : self
    {
        $this->coordinates = $coordinates;
        return $this;
    }
}