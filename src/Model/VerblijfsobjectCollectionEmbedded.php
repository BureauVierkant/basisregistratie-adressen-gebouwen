<?php

namespace BureauVierkant\Basisregistratie\Model;

class VerblijfsobjectCollectionEmbedded
{
    /**
     * 
     *
     * @var Verblijfsobject[]
     */
    protected $verblijfsobjecten;
    /**
     * 
     *
     * @return Verblijfsobject[]
     */
    public function getVerblijfsobjecten() : ?array
    {
        return $this->verblijfsobjecten;
    }
    /**
     * 
     *
     * @param Verblijfsobject[] $verblijfsobjecten
     *
     * @return self
     */
    public function setVerblijfsobjecten(?array $verblijfsobjecten) : self
    {
        $this->verblijfsobjecten = $verblijfsobjecten;
        return $this;
    }
}