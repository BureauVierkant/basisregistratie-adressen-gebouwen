<?php

namespace BureauVierkant\Basisregistratie\Endpoint;

/**
 * Class GetVerblijfsobjectenById
 *
 * @package BureauVierkant\Basisregistratie\Endpoint
 */
class GetVerblijfsobjectenById extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $id;

    /**
     *
     *
     * @param string $id Identifier
     * @param array $queryParameters {
     * @param array $headerParameters {
     */
    function __construct(string $id, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->id = $id;
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
        return str_replace(array('{id}'), array($this->id), '/verblijfsobjecten/{id}');
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
        $optionsResolver->setDefined(array('geldigOp'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('geldigOp', array('string'));
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
     * @throws \BureauVierkant\Basisregistratie\Exception\GetVerblijfsobjectenByIdForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetVerblijfsobjectenByIdNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\Verblijfsobject
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'BureauVierkant\\Basisregistratie\\Model\\Verblijfsobject', 'json');
        }
        if (403 === $status) {
            throw new \BureauVierkant\Basisregistratie\Exception\GetVerblijfsobjectenByIdForbiddenException();
        }
        if (404 === $status) {
            throw new \BureauVierkant\Basisregistratie\Exception\GetVerblijfsobjectenByIdNotFoundException();
        }
    }
}