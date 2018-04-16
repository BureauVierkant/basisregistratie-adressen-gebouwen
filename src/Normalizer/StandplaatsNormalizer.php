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
 * Class StandplaatsNormalizer
 *
 * @package BureauVierkant\Basisregistratie\Normalizer
 */
class StandplaatsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\Standplaats';
    }

    /**
     * @param mixed $data
     * @param null $format
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\Standplaats;
    }

    /**
     * @param mixed $data
     * @param string $class
     * @param null $format
     * @param array $context
     *
     * @return \BureauVierkant\Basisregistratie\Model\Standplaats|object
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\Standplaats();
        if (property_exists($data, 'identificatiecode')) {
            $object->setIdentificatiecode($data->{'identificatiecode'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, '_links')) {
            $object->setLinks($this->denormalizer->denormalize($data->{'_links'}, 'BureauVierkant\\Basisregistratie\\Model\\StandplaatsLinks', 'json', $context));
        }
        if (property_exists($data, '_embedded')) {
            $object->setEmbedded($this->denormalizer->denormalize($data->{'_embedded'}, 'BureauVierkant\\Basisregistratie\\Model\\StandplaatsEmbedded', 'json', $context));
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
        if (null !== $object->getIdentificatiecode()) {
            $data->{'identificatiecode'} = $object->getIdentificatiecode();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getLinks()) {
            $data->{'_links'} = $this->normalizer->normalize($object->getLinks(), 'json', $context);
        }
        if (null !== $object->getEmbedded()) {
            $data->{'_embedded'} = $this->normalizer->normalize($object->getEmbedded(), 'json', $context);
        }
        return $data;
    }
}