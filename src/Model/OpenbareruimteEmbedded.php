<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class OpenbareruimteEmbedded
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class OpenbareruimteEmbedded
{
    /**
     * Een voorkomen is een combinatie van gegevens die geldig zijn op grond van één adminsitratieve gebeurtenis, totdat één of meerdere gegevens gewijzigd worden.
     *
     * @var GeldigVoorkomen
     */
    protected $geldigVoorkomen;
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