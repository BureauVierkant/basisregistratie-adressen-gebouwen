<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class PandEmbedded
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class PandEmbedded
{
    /**
     * Geometrie is de beschrijving van de vorm van een object in de vorm van coördinaten.
     *
     * @var Polygon
     */
    protected $geometrie;
    /**
     * Een voorkomen is een combinatie van gegevens die geldig zijn op grond van één adminsitratieve gebeurtenis, totdat één of meerdere gegevens gewijzigd worden.
     *
     * @var GeldigVoorkomen
     */
    protected $geldigVoorkomen;
    /**
     * Geometrie is de beschrijving van de vorm van een object in de vorm van coördinaten.
     *
     * @return Polygon
     */
    public function getGeometrie() : ?Polygon
    {
        return $this->geometrie;
    }
    /**
     * Geometrie is de beschrijving van de vorm van een object in de vorm van coördinaten.
     *
     * @param Polygon $geometrie
     *
     * @return self
     */
    public function setGeometrie(?Polygon $geometrie) : self
    {
        $this->geometrie = $geometrie;
        return $this;
    }
    /**
     * Een voorkomen is een combinatie van gegevens die geldig zijn op grond van één adminsitratieve gebeurtenis, totdat één of meerdere gegevens gewijzigd worden.
     *
     * @return GeldigVoorkomen
     */
    public function getGeldigVoorkomen() : ?GeldigVoorkomen
    {
        return $this->geldigVoorkomen;
    }
    /**
     * Een voorkomen is een combinatie van gegevens die geldig zijn op grond van één adminsitratieve gebeurtenis, totdat één of meerdere gegevens gewijzigd worden.
     *
     * @param GeldigVoorkomen $geldigVoorkomen
     *
     * @return self
     */
    public function setGeldigVoorkomen(?GeldigVoorkomen $geldigVoorkomen) : self
    {
        $this->geldigVoorkomen = $geldigVoorkomen;
        return $this;
    }
}