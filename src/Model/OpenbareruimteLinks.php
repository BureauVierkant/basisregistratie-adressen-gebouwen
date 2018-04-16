<?php

namespace BureauVierkant\Basisregistratie\Model;

class OpenbareruimteLinks
{
    /**
     * Link naar de resource van de openbare ruimte
     *
     * @var OpenbareruimteLinksSelf
     */
    protected $self;
    /**
     * Link naar de woonplaats bijbehorende bij deze openbare ruimte
     *
     * @var OpenbareruimteLinksBijbehorendeWoonplaats
     */
    protected $bijbehorendeWoonplaats;
    /**
     * Een lijst van voorkomens behorende bij deze openbare ruimte
     *
     * @var OpenbareruimteLinksVoorkomens
     */
    protected $voorkomens;
    /**
     * Link naar de resource van de openbare ruimte
     *
     * @return OpenbareruimteLinksSelf
     */
    public function getSelf() : ?OpenbareruimteLinksSelf
    {
        return $this->self;
    }
    /**
     * Link naar de resource van de openbare ruimte
     *
     * @param OpenbareruimteLinksSelf $self
     *
     * @return self
     */
    public function setSelf(?OpenbareruimteLinksSelf $self) : self
    {
        $this->self = $self;
        return $this;
    }
    /**
     * Link naar de woonplaats bijbehorende bij deze openbare ruimte
     *
     * @return OpenbareruimteLinksBijbehorendeWoonplaats
     */
    public function getBijbehorendeWoonplaats() : ?OpenbareruimteLinksBijbehorendeWoonplaats
    {
        return $this->bijbehorendeWoonplaats;
    }
    /**
     * Link naar de woonplaats bijbehorende bij deze openbare ruimte
     *
     * @param OpenbareruimteLinksBijbehorendeWoonplaats $bijbehorendeWoonplaats
     *
     * @return self
     */
    public function setBijbehorendeWoonplaats(?OpenbareruimteLinksBijbehorendeWoonplaats $bijbehorendeWoonplaats) : self
    {
        $this->bijbehorendeWoonplaats = $bijbehorendeWoonplaats;
        return $this;
    }
    /**
     * Een lijst van voorkomens behorende bij deze openbare ruimte
     *
     * @return OpenbareruimteLinksVoorkomens
     */
    public function getVoorkomens() : ?OpenbareruimteLinksVoorkomens
    {
        return $this->voorkomens;
    }
    /**
     * Een lijst van voorkomens behorende bij deze openbare ruimte
     *
     * @param OpenbareruimteLinksVoorkomens $voorkomens
     *
     * @return self
     */
    public function setVoorkomens(?OpenbareruimteLinksVoorkomens $voorkomens) : self
    {
        $this->voorkomens = $voorkomens;
        return $this;
    }
}