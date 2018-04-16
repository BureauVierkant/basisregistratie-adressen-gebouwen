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
 * Class WoonplaatsCollectionEmbeddedNormalizer
 *
 * @package BureauVierkant\Basisregistratie\Normalizer
 */
class WoonplaatsCollectionEmbeddedNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\WoonplaatsCollectionEmbedded';
    }

    /**
     * @param mixed $data
     * @param null $format
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\WoonplaatsCollectionEmbedded;
    }

    /**
     * @param mixed $data
     * @param string $class
     * @param null $format
     * @param array $context
     *
     * @return \BureauVierkant\Basisregistratie\Model\WoonplaatsCollectionEmbedded|object
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\WoonplaatsCollectionEmbedded();
        if (property_exists($data, 'woonplaatsen')) {
            $values = array();
            foreach ($data->{'woonplaatsen'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BureauVierkant\\Basisregistratie\\Model\\Woonplaats', 'json', $context);
            }
            $object->setWoonplaatsen($values);
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
        if (null !== $object->getWoonplaatsen()) {
            $values = array();
            foreach ($object->getWoonplaatsen() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'woonplaatsen'} = $values;
        }
        return $data;
    }
}