<?php

namespace BureauVierkant\Basisregistratie\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NummeraanduidingNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\Nummeraanduiding';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\Nummeraanduiding;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\Nummeraanduiding();
        if (property_exists($data, 'identificatiecode')) {
            $object->setIdentificatiecode($data->{'identificatiecode'});
        }
        if (property_exists($data, 'huisletter')) {
            $object->setHuisletter($data->{'huisletter'});
        }
        if (property_exists($data, 'huisnummer')) {
            $object->setHuisnummer($data->{'huisnummer'});
        }
        if (property_exists($data, 'huisnummertoevoeging')) {
            $object->setHuisnummertoevoeging($data->{'huisnummertoevoeging'});
        }
        if (property_exists($data, 'postcode')) {
            $object->setPostcode($data->{'postcode'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, '_links')) {
            $object->setLinks($this->denormalizer->denormalize($data->{'_links'}, 'BureauVierkant\\Basisregistratie\\Model\\NummeraanduidingLinks', 'json', $context));
        }
        if (property_exists($data, '_embedded')) {
            $object->setEmbedded($this->denormalizer->denormalize($data->{'_embedded'}, 'BureauVierkant\\Basisregistratie\\Model\\NummeraanduidingEmbedded', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getIdentificatiecode()) {
            $data->{'identificatiecode'} = $object->getIdentificatiecode();
        }
        if (null !== $object->getHuisletter()) {
            $data->{'huisletter'} = $object->getHuisletter();
        }
        if (null !== $object->getHuisnummer()) {
            $data->{'huisnummer'} = $object->getHuisnummer();
        }
        if (null !== $object->getHuisnummertoevoeging()) {
            $data->{'huisnummertoevoeging'} = $object->getHuisnummertoevoeging();
        }
        if (null !== $object->getPostcode()) {
            $data->{'postcode'} = $object->getPostcode();
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