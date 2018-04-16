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
 * Class VerblijfsobjectCollectionLinksNormalizer
 *
 * @package BureauVierkant\Basisregistratie\Normalizer
 */
class VerblijfsobjectCollectionLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\VerblijfsobjectCollectionLinks';
    }

    /**
     * @param mixed $data
     * @param null $format
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\VerblijfsobjectCollectionLinks;
    }

    /**
     * @param mixed $data
     * @param string $class
     * @param null $format
     * @param array $context
     *
     * @return \BureauVierkant\Basisregistratie\Model\VerblijfsobjectCollectionLinks|object
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\VerblijfsobjectCollectionLinks();
        if (property_exists($data, 'self')) {
            $object->setSelf($this->denormalizer->denormalize($data->{'self'}, 'BureauVierkant\\Basisregistratie\\Model\\VerblijfsobjectCollectionLinksSelf', 'json', $context));
        }
        if (property_exists($data, 'next')) {
            $object->setNext($this->denormalizer->denormalize($data->{'next'}, 'BureauVierkant\\Basisregistratie\\Model\\VerblijfsobjectCollectionLinksNext', 'json', $context));
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
        if (null !== $object->getSelf()) {
            $data->{'self'} = $this->normalizer->normalize($object->getSelf(), 'json', $context);
        }
        if (null !== $object->getNext()) {
            $data->{'next'} = $this->normalizer->normalize($object->getNext(), 'json', $context);
        }
        return $data;
    }
}