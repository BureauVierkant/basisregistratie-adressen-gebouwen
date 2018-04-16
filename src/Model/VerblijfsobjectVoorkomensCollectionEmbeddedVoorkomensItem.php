<?php

namespace BureauVierkant\Basisregistratie\Model;

class VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItem
{
    /**
     * Een ingangsdatum is de begindatum vanaf wanneer een gegeven geldig is.
     *
     * @var \DateTime
     */
    protected $beginGeldigheid;
    /**
     * Een ingangsdatum is de begindatum vanaf wanneer een gegeven geldig is.
     *
     * @var null|\DateTime
     */
    protected $eindGeldigheid;
    /**
     * In onderzoek betekent dat onderzocht wordt of gegevens kloppen.
     *
     * @var bool
     */
    protected $inOnderzoek;
    /**
     * Voorkomens van objecten met een begindatum in de toekomst die zijn gemuteerd. Ze maken daarmee geen onderdeel meer uit van de levenscyclus.
     *
     * @var bool
     */
    protected $aanduidingInactief;
    /**
     * Een inactief voorkomen als gevolg van synchronisatie tussen bronhouder en de Landelijke Voorziening BAG.
     *
     * @var float
     */
    protected $aanduidingCorrectie;
    /**
     * 
     *
     * @var bool
     */
    protected $geconstateerd;
    /**
     * 
     *
     * @var GeldigVoorkomenEmbedded
     */
    protected $embedded;
    /**
     * 
     *
     * @var VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinks
     */
    protected $links;
    /**
     * Een ingangsdatum is de begindatum vanaf wanneer een gegeven geldig is.
     *
     * @return \DateTime
     */
    public function getBeginGeldigheid() : ?\DateTime
    {
        return $this->beginGeldigheid;
    }
    /**
     * Een ingangsdatum is de begindatum vanaf wanneer een gegeven geldig is.
     *
     * @param \DateTime $beginGeldigheid
     *
     * @return self
     */
    public function setBeginGeldigheid(?\DateTime $beginGeldigheid) : self
    {
        $this->beginGeldigheid = $beginGeldigheid;
        return $this;
    }
    /**
     * Een ingangsdatum is de begindatum vanaf wanneer een gegeven geldig is.
     *
     * @return null|\DateTime
     */
    public function getEindGeldigheid() : ?\DateTime
    {
        return $this->eindGeldigheid;
    }
    /**
     * Een ingangsdatum is de begindatum vanaf wanneer een gegeven geldig is.
     *
     * @param null|\DateTime $eindGeldigheid
     *
     * @return self
     */
    public function setEindGeldigheid(?\DateTime $eindGeldigheid) : self
    {
        $this->eindGeldigheid = $eindGeldigheid;
        return $this;
    }
    /**
     * In onderzoek betekent dat onderzocht wordt of gegevens kloppen.
     *
     * @return bool
     */
    public function getInOnderzoek() : ?bool
    {
        return $this->inOnderzoek;
    }
    /**
     * In onderzoek betekent dat onderzocht wordt of gegevens kloppen.
     *
     * @param bool $inOnderzoek
     *
     * @return self
     */
    public function setInOnderzoek(?bool $inOnderzoek) : self
    {
        $this->inOnderzoek = $inOnderzoek;
        return $this;
    }
    /**
     * Voorkomens van objecten met een begindatum in de toekomst die zijn gemuteerd. Ze maken daarmee geen onderdeel meer uit van de levenscyclus.
     *
     * @return bool
     */
    public function getAanduidingInactief() : ?bool
    {
        return $this->aanduidingInactief;
    }
    /**
     * Voorkomens van objecten met een begindatum in de toekomst die zijn gemuteerd. Ze maken daarmee geen onderdeel meer uit van de levenscyclus.
     *
     * @param bool $aanduidingInactief
     *
     * @return self
     */
    public function setAanduidingInactief(?bool $aanduidingInactief) : self
    {
        $this->aanduidingInactief = $aanduidingInactief;
        return $this;
    }
    /**
     * Een inactief voorkomen als gevolg van synchronisatie tussen bronhouder en de Landelijke Voorziening BAG.
     *
     * @return float
     */
    public function getAanduidingCorrectie() : ?float
    {
        return $this->aanduidingCorrectie;
    }
    /**
     * Een inactief voorkomen als gevolg van synchronisatie tussen bronhouder en de Landelijke Voorziening BAG.
     *
     * @param float $aanduidingCorrectie
     *
     * @return self
     */
    public function setAanduidingCorrectie(?float $aanduidingCorrectie) : self
    {
        $this->aanduidingCorrectie = $aanduidingCorrectie;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getGeconstateerd() : ?bool
    {
        return $this->geconstateerd;
    }
    /**
     * 
     *
     * @param bool $geconstateerd
     *
     * @return self
     */
    public function setGeconstateerd(?bool $geconstateerd) : self
    {
        $this->geconstateerd = $geconstateerd;
        return $this;
    }
    /**
     * 
     *
     * @return GeldigVoorkomenEmbedded
     */
    public function getEmbedded() : ?GeldigVoorkomenEmbedded
    {
        return $this->embedded;
    }
    /**
     * 
     *
     * @param GeldigVoorkomenEmbedded $embedded
     *
     * @return self
     */
    public function setEmbedded(?GeldigVoorkomenEmbedded $embedded) : self
    {
        $this->embedded = $embedded;
        return $this;
    }
    /**
     * 
     *
     * @return VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinks
     */
    public function getLinks() : ?VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinks
    {
        return $this->links;
    }
    /**
     * 
     *
     * @param VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinks $links
     *
     * @return self
     */
    public function setLinks(?VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinks $links) : self
    {
        $this->links = $links;
        return $this;
    }
}