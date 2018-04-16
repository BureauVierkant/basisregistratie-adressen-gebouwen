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
class GeldigVoorkomenNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'BureauVierkant\\Basisregistratie\\Model\\GeldigVoorkomen';
    }
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \BureauVierkant\Basisregistratie\Model\GeldigVoorkomen;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \BureauVierkant\Basisregistratie\Model\GeldigVoorkomen();
        if (property_exists($data, 'beginGeldigheid')) {
            $object->setBeginGeldigheid(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'beginGeldigheid'}));
        }
        if (property_exists($data, 'eindGeldigheid')) {
            $value = $data->{'eindGeldigheid'};
            if (is_null($data->{'eindGeldigheid'})) {
                $value = $data->{'eindGeldigheid'};
            }
            if (is_string($data->{'eindGeldigheid'}) and false !== \DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'eindGeldigheid'})) {
                $value = \DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'eindGeldigheid'});
            }
            $object->setEindGeldigheid($value);
        }
        if (property_exists($data, 'inOnderzoek')) {
            $object->setInOnderzoek($data->{'inOnderzoek'});
        }
        if (property_exists($data, 'aanduidingInactief')) {
            $object->setAanduidingInactief($data->{'aanduidingInactief'});
        }
        if (property_exists($data, 'aanduidingCorrectie')) {
            $object->setAanduidingCorrectie($data->{'aanduidingCorrectie'});
        }
        if (property_exists($data, 'geconstateerd')) {
            $object->setGeconstateerd($data->{'geconstateerd'});
        }
        if (property_exists($data, '_embedded')) {
            $object->setEmbedded($this->denormalizer->denormalize($data->{'_embedded'}, 'BureauVierkant\\Basisregistratie\\Model\\GeldigVoorkomenEmbedded', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getBeginGeldigheid()) {
            $data->{'beginGeldigheid'} = $object->getBeginGeldigheid()->format("Y-m-d\TH:i:sP");
        }
        $value = $object->getEindGeldigheid();
        if (is_null($object->getEindGeldigheid())) {
            $value = $object->getEindGeldigheid();
        }
        if (is_object($object->getEindGeldigheid())) {
            $value = $object->getEindGeldigheid()->format("Y-m-d\TH:i:sP");
        }
        $data->{'eindGeldigheid'} = $value;
        if (null !== $object->getInOnderzoek()) {
            $data->{'inOnderzoek'} = $object->getInOnderzoek();
        }
        if (null !== $object->getAanduidingInactief()) {
            $data->{'aanduidingInactief'} = $object->getAanduidingInactief();
        }
        if (null !== $object->getAanduidingCorrectie()) {
            $data->{'aanduidingCorrectie'} = $object->getAanduidingCorrectie();
        }
        if (null !== $object->getGeconstateerd()) {
            $data->{'geconstateerd'} = $object->getGeconstateerd();
        }
        if (null !== $object->getEmbedded()) {
            $data->{'_embedded'} = $this->normalizer->normalize($object->getEmbedded(), 'json', $context);
        }
        return $data;
    }
}