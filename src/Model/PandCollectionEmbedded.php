<?php

namespace BureauVierkant\Basisregistratie\Model;

class PandCollectionEmbedded
{
    /**
     * 
     *
     * @var Pand[]
     */
    protected $panden;
    /**
     * 
     *
     * @return Pand[]
     */
    public function getPanden() : ?array
    {
        return $this->panden;
    }
    /**
     * 
     *
     * @param Pand[] $panden
     *
     * @return self
     */
    public function setPanden(?array $panden) : self
    {
        $this->panden = $panden;
        return $this;
    }
}