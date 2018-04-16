<?php

namespace BureauVierkant\Basisregistratie\Endpoint;

/**
 * Class GetVerblijfsobjectenByIdVoorkomen
 *
 * @package BureauVierkant\Basisregistratie\Endpoint
 */
class GetVerblijfsobjectenByIdVoorkomen extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $id;
    /**
     * 
     *
     * @param string $id Identifier
     * @param array $headerParameters {
     *     @var string $X-Api-Key Geldige API Key om deze request uit te kunnen voeren.
     *     @var string $Accept Accept header voor Content-Negotiation. Op dit moment wordt alleen `application/hal+json` ondersteund welke ook de standaard is.
     * }
     */
    function __construct(string $id, array $headerParameters = array())
    {
        $this->id = $id;
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
        return str_replace(array('{id}'), array($this->id), '/verblijfsobjecten/{id}/voorkomens');
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
     * @throws \BureauVierkant\Basisregistratie\Exception\GetVerblijfsobjectenByIdVoorkomenForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetVerblijfsobjectenByIdVoorkomenNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\VerblijfsobjectVoorkomensCollection
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'BureauVierkant\\Basisregistratie\\Model\\VerblijfsobjectVoorkomensCollection', 'json');
        }
        if (403 === $status) {
            throw new \BureauVierkant\Basisregistratie\Exception\GetVerblijfsobjectenByIdVoorkomenForbiddenException();
        }
        if (404 === $status) {
            throw new \BureauVierkant\Basisregistratie\Exception\GetVerblijfsobjectenByIdVoorkomenNotFoundException();
        }
    }
}