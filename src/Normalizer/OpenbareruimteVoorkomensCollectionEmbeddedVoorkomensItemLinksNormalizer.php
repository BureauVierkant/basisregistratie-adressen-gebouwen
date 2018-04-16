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
 * Class OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer
 *
 * @package BureauVierkant\Basisregistratie\Normalizer
 */
class OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinks';
    }

    /**
     * @param mixed $data
     * @param null $format
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinks;
    }

    /**
     * @param mixed $data
     * @param string $class
     * @param null $format
     * @param array $context
     *
     * @return \BureauVierkant\Basisregistratie\Model\OpenbareruimteVoorkomensCollectionEmbeddedVoorkomensItemLinks|object
     */
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
        if (null !== $object->getOpenbareRuimte()) {
            $data->{'openbareRuimte'} = $this->normalizer->normalize($object->getOpenbareRuimte(), 'json', $context);
        }
        return $data;
    }
}