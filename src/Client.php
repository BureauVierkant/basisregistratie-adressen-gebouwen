<?php

namespace BureauVierkant\Basisregistratie;

class Client extends \Jane\OpenApiRuntime\Client\Psr7HttplugClient
{
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     *     @var int $page Paginanummer voor paginering. Gebruik het `_links.next.href` object om te navigeren.
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetPandenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\PandCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getPanden(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetPanden($queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param \stdClass $body JSON (`application/json`) object met een geoquery. Ondersteund worden `within`, `contains`, `disjoint` en `intersects` queries in combinatie met een `Point` of `Polygon` GeoJSON object.
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     *     @var int $page Paginanummer voor paginering. Gebruik het `_links.next.href` object om te navigeren.
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\PostPandenBadRequestException
     * @throws \BureauVierkant\Basisregistratie\Exception\PostPandenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\PandCollection|\Psr\Http\Message\ResponseInterface
     */
    public function postPanden(\stdClass $body, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\PostPanden($body, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetPandenByIdForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetPandenByIdNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\Pand|\Psr\Http\Message\ResponseInterface
     */
    public function getPandenById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetPandenById($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetPandenByIdVoorkomenForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetPandenByIdVoorkomenNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\PandVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getPandenByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetPandenByIdVoorkomen($id, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     *     @var int $page Paginanummer voor paginering. Gebruik het `_links.next.href` object om te navigeren.
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetLigplaatsenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\LigplaatsCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getLigplaatsen(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetLigplaatsen($queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param \stdClass $body JSON (`application/json`) object met een geoquery. Ondersteund worden `within`, `contains`, `disjoint` en `intersects` queries in combinatie met een `Point` of `Polygon` GeoJSON object.
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     *     @var int $page Paginanummer voor paginering. Gebruik het `_links.next.href` object om te navigeren.
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\PostLigplaatsenBadRequestException
     * @throws \BureauVierkant\Basisregistratie\Exception\PostLigplaatsenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\LigplaatsCollection|\Psr\Http\Message\ResponseInterface
     */
    public function postLigplaatsen(\stdClass $body, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\PostLigplaatsen($body, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetLigplaatsenByIdForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetLigplaatsenByIdNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\Ligplaats|\Psr\Http\Message\ResponseInterface
     */
    public function getLigplaatsenById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetLigplaatsenById($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetLigplaatsenByIdVoorkomenForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetLigplaatsenByIdVoorkomenNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\LigplaatsVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getLigplaatsenByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetLigplaatsenByIdVoorkomen($id, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     *     @var int $page Paginanummer voor paginering. Gebruik het `_links.next.href` object om te navigeren.
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetStandplaatsenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\StandplaatsCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getStandplaatsen(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetStandplaatsen($queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param \stdClass $body JSON (`application/json`) object met een geoquery. Ondersteund worden `within`, `contains`, `disjoint` en `intersects` queries in combinatie met een `Point` of `Polygon` GeoJSON object.
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     *     @var int $page Paginanummer voor paginering. Gebruik het `_links.next.href` object om te navigeren.
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\PostStandplaatsenBadRequestException
     * @throws \BureauVierkant\Basisregistratie\Exception\PostStandplaatsenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\StandplaatsCollection|\Psr\Http\Message\ResponseInterface
     */
    public function postStandplaatsen(\stdClass $body, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\PostStandplaatsen($body, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetStandplaatsenByIdForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetStandplaatsenByIdNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\Standplaats|\Psr\Http\Message\ResponseInterface
     */
    public function getStandplaatsenById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetStandplaatsenById($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetStandplaatsenByIdVoorkomenForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetStandplaatsenByIdVoorkomenNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\StandplaatsVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getStandplaatsenByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetStandplaatsenByIdVoorkomen($id, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $pandrelatering Filtert op verblijfsobjecten behorende bij de opgegeven pandrelatering
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     *     @var int $page Paginanummer voor paginering. Gebruik het `_links.next.href` object om te navigeren.
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetVerblijfsobjectenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\VerblijfsobjectCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getVerblijfsobjecten(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetVerblijfsobjecten($queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param \stdClass $body JSON (`application/json`) object met een geoquery. Ondersteund worden `within`, `contains`, `disjoint` en `intersects` queries in combinatie met een `Point` of `Polygon` GeoJSON object.
     * @param array $queryParameters {
     *     @var string $pandrelatering Filtert op verblijfsobjecten behorende bij de opgegeven pandrelatering
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     *     @var int $page Paginanummer voor paginering. Gebruik het `_links.next.href` object om te navigeren.
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\PostVerblijfsobjectenBadRequestException
     * @throws \BureauVierkant\Basisregistratie\Exception\PostVerblijfsobjectenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\VerblijfsobjectCollection|\Psr\Http\Message\ResponseInterface
     */
    public function postVerblijfsobjecten(\stdClass $body, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\PostVerblijfsobjecten($body, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetVerblijfsobjectenByIdForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetVerblijfsobjectenByIdNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\Verblijfsobject|\Psr\Http\Message\ResponseInterface
     */
    public function getVerblijfsobjectenById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetVerblijfsobjectenById($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetVerblijfsobjectenByIdVoorkomenForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetVerblijfsobjectenByIdVoorkomenNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\VerblijfsobjectVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getVerblijfsobjectenByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetVerblijfsobjectenByIdVoorkomen($id, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     *     @var int $page Paginanummer voor paginering. Gebruik het `_links.next.href` object om te navigeren.
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetOpenbareRuimteForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\OpenbareruimteCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenbareRuimte(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetOpenbareRuimte($queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetOpenbareRuimteByIdForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetOpenbareRuimteByIdNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\Openbareruimte|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenbareRuimteById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetOpenbareRuimteById($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetOpenbareRuimtesByIdVoorkomenForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetOpenbareRuimtesByIdVoorkomenNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\OpenbareruimteVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenbareRuimtesByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetOpenbareRuimtesByIdVoorkomen($id, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     *     @var int $page Paginanummer voor paginering. Gebruik het `_links.next.href` object om te navigeren.
     *     @var string $postcode Filtert op objecten met de opgegeven postcode (in het zogenaamde `P6` formaat: 1234AB)
     *     @var float $huisnummer Filtert op objecten met het opgegeven huisnummer (enkel het numerieke nummer, geen toevoegingen)
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetNummeraanduidingenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\NummeraanduidingCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getNummeraanduidingen(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetNummeraanduidingen($queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetNummeraanduidingenByIdForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetNummeraanduidingenByIdNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\Nummeraanduiding|\Psr\Http\Message\ResponseInterface
     */
    public function getNummeraanduidingenById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetNummeraanduidingenById($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetNummeraanduidingenByIdVoorkomenForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetNummeraanduidingenByIdVoorkomenNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\NummeraanduidingVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getNummeraanduidingenByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetNummeraanduidingenByIdVoorkomen($id, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     *     @var int $page Paginanummer voor paginering. Gebruik het `_links.next.href` object om te navigeren.
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetWoonplaatsenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\WoonplaatsCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getWoonplaatsen(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetWoonplaatsen($queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param \stdClass $body JSON (`application/json`) object met een geoquery. Ondersteund worden `within`, `contains`, `disjoint` en `intersects` queries in combinatie met een `Point` of `Polygon` GeoJSON object.
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     *     @var int $page Paginanummer voor paginering. Gebruik het `_links.next.href` object om te navigeren.
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\PostWoonplaatsenBadRequestException
     * @throws \BureauVierkant\Basisregistratie\Exception\PostWoonplaatsenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\WoonplaatsCollection|\Psr\Http\Message\ResponseInterface
     */
    public function postWoonplaatsen(\stdClass $body, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\PostWoonplaatsen($body, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     *     @var string $geldigOp Filtert op objecten die geldig zijn op de opgegeven datum `JJJJ-MM-DD`
     * }
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetWoonplaatsenByIdForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetWoonplaatsenByIdNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\Woonplaats|\Psr\Http\Message\ResponseInterface
     */
    public function getWoonplaatsenById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetWoonplaatsenById($id, $queryParameters, $headerParameters), $fetch);
    }
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \BureauVierkant\Basisregistratie\Exception\GetWoonplaatsenByIdVoorkomenForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetWoonplaatsenByIdVoorkomenNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\WoonplaatsVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getWoonplaatsenByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \BureauVierkant\Basisregistratie\Endpoint\GetWoonplaatsenByIdVoorkomen($id, $headerParameters), $fetch);
    }
    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri('https://bag.basisregistraties.overheid.nl/api/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $messageFactory = \Http\Discovery\MessageFactoryDiscovery::find();
        $streamFactory = \Http\Discovery\StreamFactoryDiscovery::find();
        $serializer = new \Symfony\Component\Serializer\Serializer(\BureauVierkant\Basisregistratie\Normalizer\NormalizerFactory::create(), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}