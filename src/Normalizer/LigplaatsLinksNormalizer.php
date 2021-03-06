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
 * Class LigplaatsLinksNormalizer
 *
 * @package BureauVierkant\Basisregistratie\Normalizer
 */
class LigplaatsLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\LigplaatsLinks';
    }

    /**
     * @param mixed $data
     * @param null $format
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\LigplaatsLinks;
    }

    /**
     * @param mixed $data
     * @param string $class
     * @param null $format
     * @param array $context
     *
     * @return \BureauVierkant\Basisregistratie\Model\LigplaatsLinks|object
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\LigplaatsLinks();
        if (property_exists($data, 'self')) {
            $object->setSelf($this->denormalizer->denormalize($data->{'self'}, 'BureauVierkant\\Basisregistratie\\Model\\LigplaatsLinksSelf', 'json', $context));
        }
        if (property_exists($data, 'hoofdadres')) {
            $object->setHoofdadres($this->denormalizer->denormalize($data->{'hoofdadres'}, 'BureauVierkant\\Basisregistratie\\Model\\Hoofdadres', 'json', $context));
        }
        if (property_exists($data, 'nevenadres')) {
            $values = array();
            foreach ($data->{'nevenadres'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'BureauVierkant\\Basisregistratie\\Model\\NevenadresItem', 'json', $context);
            }
            $object->setNevenadres($values);
        }
        if (property_exists($data, 'voorkomens')) {
            $object->setVoorkomens($this->denormalizer->denormalize($data->{'voorkomens'}, 'BureauVierkant\\Basisregistratie\\Model\\LigplaatsLinksVoorkomens', 'json', $context));
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
        if (null !== $object->getSelf()) {
            $data->{'self'} = $this->normalizer->normalize($object->getSelf(), 'json', $context);
        }
        if (null !== $object->getHoofdadres()) {
            $data->{'hoofdadres'} = $this->normalizer->normalize($object->getHoofdadres(), 'json', $context);
        }
        if (null !== $object->getNevenadres()) {
            $values = array();
            foreach ($object->getNevenadres() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'nevenadres'} = $values;
        }
        if (null !== $object->getVoorkomens()) {
            $data->{'voorkomens'} = $this->normalizer->normalize($object->getVoorkomens(), 'json', $context);
        }
        return $data;
    }
}