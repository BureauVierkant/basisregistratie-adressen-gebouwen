<?php

namespace BureauVierkant\Basisregistratie\Endpoint;

/**
 * Class GetNummeraanduidingen
 *
 * @package BureauVierkant\Basisregistratie\Endpoint
 */
class GetNummeraanduidingen extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{

    /**
     *
     *
     * @param array $queryParameters {
     * @param array $headerParameters {
     */
    function __construct(array $queryParameters = array(), array $headerParameters = array())
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;

    /**
     * @return string
     */
    function getMethod() : string
    {
        return 'GET';
    }

    /**
     * @return string
     */
    function getUri() : string
    {
        return '/nummeraanduidingen';
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
        $optionsResolver->setDefined(array('geldigOp', 'page', 'postcode', 'huisnummer'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array('page' => 1));
        $optionsResolver->setAllowedTypes('geldigOp', array('string'));
        $optionsResolver->setAllowedTypes('page', array('int'));
        $optionsResolver->setAllowedTypes('postcode', array('string'));
        $optionsResolver->setAllowedTypes('huisnummer', array('float'));
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
     * @throws \BureauVierkant\Basisregistratie\Exception\GetNummeraanduidingenForbiddenException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\NummeraanduidingCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'BureauVierkant\\Basisregistratie\\Model\\NummeraanduidingCollection', 'json');
        }
        if (403 === $status) {
            throw new \BureauVierkant\Basisregistratie\Exception\GetNummeraanduidingenForbiddenException();
        }
    }
}