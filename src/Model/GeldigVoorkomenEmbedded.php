<?php

namespace BureauVierkant\Basisregistratie\Model;

class GeldigVoorkomenEmbedded
{
    /**
     * 
     *
     * @var GeldigVoorkomenEmbeddedBron
     */
    protected $bron;
    /**
     * 
     *
     * @return GeldigVoorkomenEmbeddedBron
     */
    public function getBron() : ?GeldigVoorkomenEmbeddedBron
    {
        return $this->bron;
    }
    /**
     * 
     *
     * @param GeldigVoorkomenEmbeddedBron $bron
     *
     * @return self
     */
    public function setBron(?GeldigVoorkomenEmbeddedBron $bron) : self
    {
        $this->bron = $bron;
        return $this;
    }
}