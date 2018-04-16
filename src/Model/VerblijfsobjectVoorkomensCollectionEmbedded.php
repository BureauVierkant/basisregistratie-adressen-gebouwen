<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class VerblijfsobjectVoorkomensCollectionEmbedded
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class VerblijfsobjectVoorkomensCollectionEmbedded
{
    /**
     * 
     *
     * @var VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItem[]
     */
    protected $voorkomens;
    /**
     * 
     *
     * @return VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItem[]
     */
    public function getVoorkomens() : ?array
    {
        return $this->voorkomens;
    }
    /**
     * 
     *
     * @param VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItem[] $voorkomens
     *
     * @return self
     */
    public function setVoorkomens(?array $voorkomens) : self
    {
        $this->voorkomens = $voorkomens;
        return $this;
    }
}