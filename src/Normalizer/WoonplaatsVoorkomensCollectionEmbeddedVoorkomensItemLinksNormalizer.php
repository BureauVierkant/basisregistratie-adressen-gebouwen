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
class WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinks;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinks();
        if (property_exists($data, 'woonplaats')) {
            $object->setWoonplaats($this->denormalizer->denormalize($data->{'woonplaats'}, 'BureauVierkant\\Basisregistratie\\Model\\WoonplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksWoonplaats', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getWoonplaats()) {
            $data->{'woonplaats'} = $this->normalizer->normalize($object->getWoonplaats(), 'json', $context);
        }
        return $data;
    }
}