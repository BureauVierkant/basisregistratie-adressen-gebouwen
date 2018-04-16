<?php

namespace BureauVierkant\Basisregistratie;

use Jane\OpenApiRuntime\Client\Psr7HttplugClient;

/**
 * Class Client
 *
 * @package BureauVierkant\Basisregistratie
 */
class Client extends Psr7HttplugClient
{
    /**
     *
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|Model\PandCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getPanden(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetPanden($queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param \stdClass $body JSON (`application/json`) object met een geoquery. Ondersteund worden `within`, `contains`, `disjoint` en `intersects` queries in combinatie met een `Point` of `Polygon` GeoJSON object.
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\PandCollection|\Psr\Http\Message\ResponseInterface
     */
    public function postPanden(\stdClass $body, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\PostPanden($body, $queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\Pand|\Psr\Http\Message\ResponseInterface
     */
    public function getPandenById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetPandenById($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\PandVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getPandenByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetPandenByIdVoorkomen($id, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\LigplaatsCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getLigplaatsen(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetLigplaatsen($queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param \stdClass $body JSON (`application/json`) object met een geoquery. Ondersteund worden `within`, `contains`, `disjoint` en `intersects` queries in combinatie met een `Point` of `Polygon` GeoJSON object.
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\LigplaatsCollection|\Psr\Http\Message\ResponseInterface
     */
    public function postLigplaatsen(\stdClass $body, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\PostLigplaatsen($body, $queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\Ligplaats|\Psr\Http\Message\ResponseInterface
     */
    public function getLigplaatsenById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetLigplaatsenById($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\LigplaatsVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getLigplaatsenByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetLigplaatsenByIdVoorkomen($id, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\StandplaatsCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getStandplaatsen(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetStandplaatsen($queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param \stdClass $body JSON (`application/json`) object met een geoquery. Ondersteund worden `within`, `contains`, `disjoint` en `intersects` queries in combinatie met een `Point` of `Polygon` GeoJSON object.
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\StandplaatsCollection|\Psr\Http\Message\ResponseInterface
     */
    public function postStandplaatsen(\stdClass $body, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\PostStandplaatsen($body, $queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\Standplaats|\Psr\Http\Message\ResponseInterface
     */
    public function getStandplaatsenById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetStandplaatsenById($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\StandplaatsVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getStandplaatsenByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetStandplaatsenByIdVoorkomen($id, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\VerblijfsobjectCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getVerblijfsobjecten(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetVerblijfsobjecten($queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param \stdClass $body JSON (`application/json`) object met een geoquery. Ondersteund worden `within`, `contains`, `disjoint` en `intersects` queries in combinatie met een `Point` of `Polygon` GeoJSON object.
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\VerblijfsobjectCollection|\Psr\Http\Message\ResponseInterface
     */
    public function postVerblijfsobjecten(\stdClass $body, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\PostVerblijfsobjecten($body, $queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\Verblijfsobject|\Psr\Http\Message\ResponseInterface
     */
    public function getVerblijfsobjectenById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetVerblijfsobjectenById($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\VerblijfsobjectVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getVerblijfsobjectenByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetVerblijfsobjectenByIdVoorkomen($id, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\OpenbareruimteCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenbareRuimte(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetOpenbareRuimte($queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\Openbareruimte|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenbareRuimteById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetOpenbareRuimteById($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\OpenbareruimteVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getOpenbareRuimtesByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetOpenbareRuimtesByIdVoorkomen($id, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\NummeraanduidingCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getNummeraanduidingen(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetNummeraanduidingen($queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\Nummeraanduiding|\Psr\Http\Message\ResponseInterface
     */
    public function getNummeraanduidingenById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetNummeraanduidingenById($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\NummeraanduidingVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getNummeraanduidingenByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetNummeraanduidingenByIdVoorkomen($id, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\WoonplaatsCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getWoonplaatsen(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetWoonplaatsen($queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param \stdClass $body JSON (`application/json`) object met een geoquery. Ondersteund worden `within`, `contains`, `disjoint` en `intersects` queries in combinatie met een `Point` of `Polygon` GeoJSON object.
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\WoonplaatsCollection|\Psr\Http\Message\ResponseInterface
     */
    public function postWoonplaatsen(\stdClass $body, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\PostWoonplaatsen($body, $queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\Woonplaats|\Psr\Http\Message\ResponseInterface
     */
    public function getWoonplaatsenById(string $id, array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetWoonplaatsenById($id, $queryParameters, $headerParameters), $fetch);
    }

    /**
     *
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @return null|Model\WoonplaatsVoorkomensCollection|\Psr\Http\Message\ResponseInterface
     */
    public function getWoonplaatsenByIdVoorkomen(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new Endpoint\GetWoonplaatsenByIdVoorkomen($id, $headerParameters), $fetch);
    }

    /**
     * @param null $httpClient
     *
     * @return static
     */
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
        $serializer = new \Symfony\Component\Serializer\Serializer(Normalizer\NormalizerFactory::create(), array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())));
        return new static($httpClient, $messageFactory, $serializer, $streamFactory);
    }
}
