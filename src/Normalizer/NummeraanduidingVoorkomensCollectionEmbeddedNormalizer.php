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
 * Class NummeraanduidingVoorkomensCollectionEmbeddedNormalizer
 *
 * @package BureauVierkant\Basisregistratie\Normalizer
 */
class NummeraanduidingVoorkomensCollectionEmbeddedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\NummeraanduidingVoorkomensCollectionEmbedded';
    }

    /**
     * @param mixed $data
     * @param null $format
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\NummeraanduidingVoorkomensCollectionEmbedded;
    }

    /**
     * @param mixed $data
     * @param string $class
     * @param null $format
     * @param array $context
     *
     * @return \BureauVierkant\Basisregistratie\Model\NummeraanduidingVoorkomensCollectionEmbedded|object
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\NummeraanduidingVoorkomensCollectionEmbedded();
        if (property_exists($data, 'voorkomens')) {
            $values = array();
            foreach ($data->{'voorkomens'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BureauVierkant\\Basisregistratie\\Model\\NummeraanduidingVoorkomensCollectionEmbeddedVoorkomensItem', 'json', $context);
            }
            $object->setVoorkomens($values);
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
        if (null !== $object->getVoorkomens()) {
            $values = array();
            foreach ($object->getVoorkomens() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'voorkomens'} = $values;
        }
        return $data;
    }
}