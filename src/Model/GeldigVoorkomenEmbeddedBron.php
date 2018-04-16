<?php

namespace BureauVierkant\Basisregistratie\Model;

/**
 * Class GeldigVoorkomenEmbeddedBron
 *
 * @package BureauVierkant\Basisregistratie\Model
 */
class GeldigVoorkomenEmbeddedBron
{
    /**
     * De unieke aanduiding van de vindplaats van een document binnen een organisatie.
     *
     * @var string
     */
    protected $documentnummer;
    /**
     * De datum waarop het brondocument is vastgesteld, op basis waarvan een opname, mutatie of een verwijdering van gegevens ten aanzien van een object heeft plaatsgevonden.
     *
     * @var string
     */
    protected $documentdatum;
    /**
     * De unieke aanduiding van de vindplaats van een document binnen een organisatie.
     *
     * @return string
     */
    public function getDocumentnummer() : ?string
    {
        return $this->documentnummer;
    }
    /**
     * De unieke aanduiding van de vindplaats van een document binnen een organisatie.
     *
     * @param string $documentnummer
     *
     * @return self
     */
    public function setDocumentnummer(?string $documentnummer) : self
    {
        $this->documentnummer = $documentnummer;
        return $this;
    }
    /**
     * De datum waarop het brondocument is vastgesteld, op basis waarvan een opname, mutatie of een verwijdering van gegevens ten aanzien van een object heeft plaatsgevonden.
     *
     * @return string
     */
    public function getDocumentdatum() : ?string
    {
        return $this->documentdatum;
    }
    /**
     * De datum waarop het brondocument is vastgesteld, op basis waarvan een opname, mutatie of een verwijdering van gegevens ten aanzien van een object heeft plaatsgevonden.
     *
     * @param string $documentdatum
     *
     * @return self
     */
    public function setDocumentdatum(?string $documentdatum) : self
    {
        $this->documentdatum = $documentdatum;
        return $this;
    }
}