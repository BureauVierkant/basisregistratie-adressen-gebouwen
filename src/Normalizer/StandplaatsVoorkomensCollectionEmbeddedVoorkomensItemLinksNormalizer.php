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
class StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinks;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinks();
        if (property_exists($data, 'standplaats')) {
            $object->setStandplaats($this->denormalizer->denormalize($data->{'standplaats'}, 'BureauVierkant\\Basisregistratie\\Model\\StandplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksStandplaats', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getStandplaats()) {
            $data->{'standplaats'} = $this->normalizer->normalize($object->getStandplaats(), 'json', $context);
        }
        return $data;
    }
}