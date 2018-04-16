<?php

namespace BureauVierkant\Basisregistratie\Endpoint;

/**
 * Class PostWoonplaatsen
 *
 * @package BureauVierkant\Basisregistratie\Endpoint
 */
class PostWoonplaatsen extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{

    /**
     *
     *
     * @param \stdClass $body JSON (`application/json`) object met een geoquery. Ondersteund worden `within`, `contains`, `disjoint` en `intersects` queries in combinatie met een `Point` of `Polygon` GeoJSON object.
     * @param array $queryParameters {
     * @param array $headerParameters {
     */
    function __construct(\stdClass $body, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->body = $body;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    /**
     * @return string
     */
    function getMethod() : string
    {
        return 'POST';
    }

    /**
     * @return string
     */
    function getUri() : string
    {
        return '/woonplaatsen';
    }

    /**
     * @param \Symfony\Component\Serializer\SerializerInterface $serializer
     * @param \Http\Message\StreamFactory|NULL $streamFactory
     *
     * @return array
     */
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
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

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
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
     * @throws \BureauVierkant\Basisregistratie\Exception\PostWoonplaatsenBadRequestException
     * @throws \BureauVierkant\Basisregistratie\Exception\PostWoonplaatsenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\WoonplaatsCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'BureauVierkant\\Basisregistratie\\Model\\WoonplaatsCollection', 'json');
        }
        if (400 === $status) {
            throw new \BureauVierkant\Basisregistratie\Exception\PostWoonplaatsenBadRequestException();
        }
        if (403 === $status) {
            throw new \BureauVierkant\Basisregistratie\Exception\PostWoonplaatsenForbiddenException();
        }
    }
}