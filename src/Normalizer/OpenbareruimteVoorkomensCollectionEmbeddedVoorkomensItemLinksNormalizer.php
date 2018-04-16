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
class OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinks';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinks;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinks();
        if (property_exists($data, 'openbareRuimte')) {
            $object->setOpenbareRuimte($this->denormalizer->denormalize($data->{'openbareRuimte'}, 'BureauVierkant\\Basisregistratie\\Model\\OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinksOpenbareRuimte', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getOpenbareRuimte()) {
            $data->{'openbareRuimte'} = $this->normalizer->normalize($object->getOpenbareRuimte(), 'json', $context);
        }
        return $data;
    }
}