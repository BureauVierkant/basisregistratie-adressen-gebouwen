<?php

namespace BureauVierkant\Basisregistratie\Endpoint;

class GetNummeraanduidingenById extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7HttplugEndpoint
{
    protected $id;
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
     */
    function __construct(string $id, array $queryParameters = array(), array $headerParameters = array())
    {
        $this->id = $id;
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7HttplugEndpointTrait;
    function getMethod() : string
    {
        return 'GET';
    }
    function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/nummeraanduidingen/{id}');
    }
    function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, \Http\Message\StreamFactory $streamFactory = null) : array
    {
        return array(array(), null);
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('geldigOp'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('geldigOp', array('string'));
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
     * @throws \BureauVierkant\Basisregistratie\Exception\GetNummeraanduidingenByIdForbiddenException
     * @throws \BureauVierkant\Basisregistratie\Exception\GetNummeraanduidingenByIdNotFoundException
     *
     * @return null|\BureauVierkant\Basisregistratie\Model\Nummeraanduiding
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'BureauVierkant\\Basisregistratie\\Model\\Nummeraanduiding', 'json');
        }
        if (403 === $status) {
            throw new \BureauVierkant\Basisregistratie\Exception\GetNummeraanduidingenByIdForbiddenException();
        }
        if (404 === $status) {
            throw new \BureauVierkant\Basisregistratie\Exception\GetNummeraanduidingenByIdNotFoundException();
        }
    }
}