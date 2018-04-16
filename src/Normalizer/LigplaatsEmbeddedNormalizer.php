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
 * Class LigplaatsEmbeddedNormalizer
 *
 * @package BureauVierkant\Basisregistratie\Normalizer
 */
class LigplaatsEmbeddedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\LigplaatsEmbedded';
    }

    /**
     * @param mixed $data
     * @param null $format
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\LigplaatsEmbedded;
    }

    /**
     * @param mixed $data
     * @param string $class
     * @param null $format
     * @param array $context
     *
     * @return \BureauVierkant\Basisregistratie\Model\LigplaatsEmbedded|object
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\LigplaatsEmbedded();
        if (property_exists($data, 'geometrie')) {
            $object->setGeometrie($this->denormalizer->denormalize($data->{'geometrie'}, 'BureauVierkant\\Basisregistratie\\Model\\Polygon', 'json', $context));
        }
        if (property_exists($data, 'geldigVoorkomen')) {
            $object->setGeldigVoorkomen($this->denormalizer->denormalize($data->{'geldigVoorkomen'}, 'BureauVierkant\\Basisregistratie\\Model\\GeldigVoorkomen', 'json', $context));
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
        if (null !== $object->getGeometrie()) {
            $data->{'geometrie'} = $this->normalizer->normalize($object->getGeometrie(), 'json', $context);
        }
        if (null !== $object->getGeldigVoorkomen()) {
            $data->{'geldigVoorkomen'} = $this->normalizer->normalize($object->getGeldigVoorkomen(), 'json', $context);
        }
        return $data;
    }
}