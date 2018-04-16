<?php

namespace BureauVierkant\Basisregistratie\Model;

class OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinks
{
    /**
     * Link naar de openbare ruimte zoals dat geldig was op de datum van dit voorkomen
     *
     * @var OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinksOpenbareRuimte
     */
    protected $openbareRuimte;
    /**
     * Link naar de openbare ruimte zoals dat geldig was op de datum van dit voorkomen
     *
     * @return OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinksOpenbareRuimte
     */
    public function getOpenbareRuimte() : ?OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinksOpenbareRuimte
    {
        return $this->openbareRuimte;
    }
    /**
     * Link naar de openbare ruimte zoals dat geldig was op de datum van dit voorkomen
     *
     * @param OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinksOpenbareRuimte $openbareRuimte
     *
     * @return self
     */
    public function setOpenbareRuimte(?OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinksOpenbareRuimte $openbareRuimte) : self
    {
        $this->openbareRuimte = $openbareRuimte;
        return $this;
    }
}