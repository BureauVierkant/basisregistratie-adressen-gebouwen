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
 * Class NummeraanduidingCollectionEmbeddedNormalizer
 *
 * @package BureauVierkant\Basisregistratie\Normalizer
 */
class NummeraanduidingCollectionEmbeddedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\NummeraanduidingCollectionEmbedded';
    }

    /**
     * @param mixed $data
     * @param null $format
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\NummeraanduidingCollectionEmbedded;
    }

    /**
     * @param mixed $data
     * @param string $class
     * @param null $format
     * @param array $context
     *
     * @return \BureauVierkant\Basisregistratie\Model\NummeraanduidingCollectionEmbedded|object
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\NummeraanduidingCollectionEmbedded();
        if (property_exists($data, 'nummeraanduidingen')) {
            $values = array();
            foreach ($data->{'nummeraanduidingen'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BureauVierkant\\Basisregistratie\\Model\\Nummeraanduiding', 'json', $context);
            }
            $object->setNummeraanduidingen($values);
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
        if (null !== $object->getNummeraanduidingen()) {
            $values = array();
            foreach ($object->getNummeraanduidingen() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'nummeraanduidingen'} = $values;
        }
        return $data;
    }
}