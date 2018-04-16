<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class OpenbareruimteCollectionEmbedded
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class OpenbareruimteCollectionEmbedded
{
    /**
     * 
     *
     * @var Openbareruimte[]
     */
    protected $openbareRuimtes;
    /**
     * 
     *
     * @return Openbareruimte[]
     */
    public function getOpenbareRuimtes() : ?array
    {
        return $this->openbareRuimtes;
    }
    /**
     * 
     *
     * @param Openbareruimte[] $openbareRuimtes
     *
     * @return self
     */
    public function setOpenbareRuimtes(?array $openbareRuimtes) : self
    {
        $this->openbareRuimtes = $openbareRuimtes;
        return $this;
    }
}