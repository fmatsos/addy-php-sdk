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
class ApiV1DomainOptionsGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Addy\\Api\\Model\\ApiV1DomainOptionsGetResponse200';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Addy\\Api\\Model\\ApiV1DomainOptionsGetResponse200';
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
        $object = new \Addy\Api\Model\ApiV1DomainOptionsGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('data', $data) && $data['data'] !== null) {
            $values = array();
            foreach ($data['data'] as $value) {
                $values[] = $value;
            }
            $object->setData($values);
            unset($data['data']);
        }
        elseif (\array_key_exists('data', $data) && $data['data'] === null) {
            $object->setData(null);
        }
        if (\array_key_exists('sharedDomains', $data) && $data['sharedDomains'] !== null) {
            $values_1 = array();
            foreach ($data['sharedDomains'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setSharedDomains($values_1);
            unset($data['sharedDomains']);
        }
        elseif (\array_key_exists('sharedDomains', $data) && $data['sharedDomains'] === null) {
            $object->setSharedDomains(null);
        }
        if (\array_key_exists('defaultAliasDomain', $data) && $data['defaultAliasDomain'] !== null) {
            $object->setDefaultAliasDomain($data['defaultAliasDomain']);
            unset($data['defaultAliasDomain']);
        }
        elseif (\array_key_exists('defaultAliasDomain', $data) && $data['defaultAliasDomain'] === null) {
            $object->setDefaultAliasDomain(null);
        }
        if (\array_key_exists('defaultAliasFormat', $data) && $data['defaultAliasFormat'] !== null) {
            $object->setDefaultAliasFormat($data['defaultAliasFormat']);
            unset($data['defaultAliasFormat']);
        }
        elseif (\array_key_exists('defaultAliasFormat', $data) && $data['defaultAliasFormat'] === null) {
            $object->setDefaultAliasFormat(null);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
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
        if ($object->isInitialized('data') && null !== $object->getData()) {
            $values = array();
            foreach ($object->getData() as $value) {
                $values[] = $value;
            }
            $data['data'] = $values;
        }
        if ($object->isInitialized('sharedDomains') && null !== $object->getSharedDomains()) {
            $values_1 = array();
            foreach ($object->getSharedDomains() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['sharedDomains'] = $values_1;
        }
        if ($object->isInitialized('defaultAliasDomain') && null !== $object->getDefaultAliasDomain()) {
            $data['defaultAliasDomain'] = $object->getDefaultAliasDomain();
        }
        if ($object->isInitialized('defaultAliasFormat') && null !== $object->getDefaultAliasFormat()) {
            $data['defaultAliasFormat'] = $object->getDefaultAliasFormat();
        }
        foreach ($object as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_2;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Addy\\Api\\Model\\ApiV1DomainOptionsGetResponse200' => true);
    }
    public function hasCacheableSupportsMethod() : bool
    {
        return true;
    }
}