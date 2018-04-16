<?php

namespace BureauVierkant\Basisregistratie\Normalizer;


use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

/**
 * Class VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer
 *
 * @package BureauVierkant\Basisregistratie\Normalizer
 */
class VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @param mixed $data
     * @param string $type
     * @param null $format
     *
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinks';
    }

    /**
     * @param mixed $data
     * @param null $format
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinks;
    }

    /**
     * @param mixed $data
     * @param string $class
     * @param null $format
     * @param array $context
     *
     * @return \BureauVierkant\Basisregistratie\Model\VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinks|object
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinks();
        if (property_exists($data, 'verblijfsobject')) {
            $object->setVerblijfsobject($this->denormalizer->denormalize($data->{'verblijfsobject'}, 'BureauVierkant\\Basisregistratie\\Model\\VerblijfsobjectVoorkomensCollectionEmbeddedVoorkomensItemLinksVerblijfsobject', 'json', $context));
        }
        return $object;
    }

    /**
     * @param object $object
     * @param null $format
     * @param array $context
     *
     * @return array|bool|float|int|\stdClass|string
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getVerblijfsobject()) {
            $data->{'verblijfsobject'} = $this->normalizer->normalize($object->getVerblijfsobject(), 'json', $context);
        }
        return $data;
    }
}