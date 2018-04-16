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
class PandLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\PandLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\PandLinks;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\PandLinks();
        if (property_exists($data, 'self')) {
            $object->setSelf($this->denormalizer->denormalize($data->{'self'}, 'BureauVierkant\\Basisregistratie\\Model\\PandLinksSelf', 'json', $context));
        }
        if (property_exists($data, 'voorkomens')) {
            $object->setVoorkomens($this->denormalizer->denormalize($data->{'voorkomens'}, 'BureauVierkant\\Basisregistratie\\Model\\PandLinksVoorkomens', 'json', $context));
        }
        if (property_exists($data, 'verblijfsobjecten')) {
            $object->setVerblijfsobjecten($this->denormalizer->denormalize($data->{'verblijfsobjecten'}, 'BureauVierkant\\Basisregistratie\\Model\\PandLinksVerblijfsobjecten', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getSelf()) {
            $data->{'self'} = $this->normalizer->normalize($object->getSelf(), 'json', $context);
        }
        if (null !== $object->getVoorkomens()) {
            $data->{'voorkomens'} = $this->normalizer->normalize($object->getVoorkomens(), 'json', $context);
        }
        if (null !== $object->getVerblijfsobjecten()) {
            $data->{'verblijfsobjecten'} = $this->normalizer->normalize($object->getVerblijfsobjecten(), 'json', $context);
        }
        return $data;
    }
}