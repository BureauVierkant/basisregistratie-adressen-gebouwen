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
 * Class NummeraanduidingLinksNormalizer
 *
 * @package BureauVierkant\Basisregistratie\Normalizer
 */
class NummeraanduidingLinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
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
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\NummeraanduidingLinks';
    }

    /**
     * @param mixed $data
     * @param null $format
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\NummeraanduidingLinks;
    }

    /**
     * @param mixed $data
     * @param string $class
     * @param null $format
     * @param array $context
     *
     * @return \BureauVierkant\Basisregistratie\Model\NummeraanduidingLinks|object
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\NummeraanduidingLinks();
        if (property_exists($data, 'self')) {
            $object->setSelf($this->denormalizer->denormalize($data->{'self'}, 'BureauVierkant\\Basisregistratie\\Model\\NummeraanduidingLinksSelf', 'json', $context));
        }
        if (property_exists($data, 'bijbehorendeOpenbareRuimte')) {
            $object->setBijbehorendeOpenbareRuimte($this->denormalizer->denormalize($data->{'bijbehorendeOpenbareRuimte'}, 'BureauVierkant\\Basisregistratie\\Model\\NummeraanduidingLinksBijbehorendeOpenbareRuimte', 'json', $context));
        }
        if (property_exists($data, 'voorkomens')) {
            $object->setVoorkomens($this->denormalizer->denormalize($data->{'voorkomens'}, 'BureauVierkant\\Basisregistratie\\Model\\NummeraanduidingLinksVoorkomens', 'json', $context));
        }
        if (property_exists($data, 'adresseerbaarObject')) {
            $object->setAdresseerbaarObject($this->denormalizer->denormalize($data->{'adresseerbaarObject'}, 'BureauVierkant\\Basisregistratie\\Model\\NummeraanduidingLinksAdresseerbaarObject', 'json', $context));
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
        if (null !== $object->getBijbehorendeOpenbareRuimte()) {
            $data->{'bijbehorendeOpenbareRuimte'} = $this->normalizer->normalize($object->getBijbehorendeOpenbareRuimte(), 'json', $context);
        }
        if (null !== $object->getVoorkomens()) {
            $data->{'voorkomens'} = $this->normalizer->normalize($object->getVoorkomens(), 'json', $context);
        }
        if (null !== $object->getAdresseerbaarObject()) {
            $data->{'adresseerbaarObject'} = $this->normalizer->normalize($object->getAdresseerbaarObject(), 'json', $context);
        }
        return $data;
    }
}