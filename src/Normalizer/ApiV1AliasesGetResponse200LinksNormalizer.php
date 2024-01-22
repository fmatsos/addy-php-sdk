<?php

namespace Addy\Api\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Addy\Api\Runtime\Normalizer\CheckArray;
use Addy\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\CacheableSupportsMethodInterface;
class ApiV1AliasesGetResponse200LinksNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Addy\\Api\\Model\\ApiV1AliasesGetResponse200Links';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Addy\\Api\\Model\\ApiV1AliasesGetResponse200Links';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Addy\Api\Model\ApiV1AliasesGetResponse200Links();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('first', $data) && $data['first'] !== null) {
            $object->setFirst($data['first']);
            unset($data['first']);
        }
        elseif (\array_key_exists('first', $data) && $data['first'] === null) {
            $object->setFirst(null);
        }
        if (\array_key_exists('last', $data) && $data['last'] !== null) {
            $object->setLast($data['last']);
            unset($data['last']);
        }
        elseif (\array_key_exists('last', $data) && $data['last'] === null) {
            $object->setLast(null);
        }
        if (\array_key_exists('prev', $data) && $data['prev'] !== null) {
            $object->setPrev($data['prev']);
            unset($data['prev']);
        }
        elseif (\array_key_exists('prev', $data) && $data['prev'] === null) {
            $object->setPrev(null);
        }
        if (\array_key_exists('next', $data) && $data['next'] !== null) {
            $object->setNext($data['next']);
            unset($data['next']);
        }
        elseif (\array_key_exists('next', $data) && $data['next'] === null) {
            $object->setNext(null);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if ($object->isInitialized('first') && null !== $object->getFirst()) {
            $data['first'] = $object->getFirst();
        }
        if ($object->isInitialized('last') && null !== $object->getLast()) {
            $data['last'] = $object->getLast();
        }
        if ($object->isInitialized('prev') && null !== $object->getPrev()) {
            $data['prev'] = $object->getPrev();
        }
        if ($object->isInitialized('next') && null !== $object->getNext()) {
            $data['next'] = $object->getNext();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Addy\\Api\\Model\\ApiV1AliasesGetResponse200Links' => true);
    }
    public function hasCacheableSupportsMethod() : bool
    {
        return true;
    }
}