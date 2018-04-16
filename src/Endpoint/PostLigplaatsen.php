<?php

namespace BureauVierkant\Basisregistratie\Endpoint;

class PostLigplaatsen extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
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
     */
    function __construct(\stdClass $body, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->body = $body;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'POST';
    }
    function getUri() : string
    {
        return '/ligplaatsen';
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('geldigOp', 'page'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1));
        $optionsResolver->setAllowedTypes('geldigOp', array('string'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Api-Key', 'Accept'));
        $optionsResolver->setRequired(array('X-Api-Key'));
        $optionsResolver->setDefaults(array('Accept' => 'application/hal+json'));
        $optionsResolver->setAllowedTypes('X-Api-Key', array('string'));
        $optionsResolver->setAllowedTypes('Accept', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \BureauVierkant\Basisregistratie\Exception\PostLigplaatsenBadRequestException
     * @throws \BureauVierkant\Basisregistratie\Exception\PostLigplaatsenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\LigplaatsCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'BureauVierkant\\Basisregistratie\\Model\\LigplaatsCollection', 'json');
        }
        if (400 === $status) {
            throw new \BureauVierkant\Basisregistratie\Exception\PostLigplaatsenBadRequestException();
        }
        if (403 === $status) {
            throw new \BureauVierkant\Basisregistratie\Exception\PostLigplaatsenForbiddenException();
        }
    }
}