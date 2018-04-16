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
class LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinks;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinks();
        if (property_exists($data, 'ligplaats')) {
            $object->setLigplaats($this->denormalizer->denormalize($data->{'ligplaats'}, 'BureauVierkant\\Basisregistratie\\Model\\LigplaatsVoorkomensCollectionEmbeddedVoorkomensItemLinksLigplaats', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLigplaats()) {
            $data->{'ligplaats'} = $this->normalizer->normalize($object->getLigplaats(), 'json', $context);
        }
        return $data;
    }
}