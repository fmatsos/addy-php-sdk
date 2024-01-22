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
class ApiV1AppVersionGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Addy\\Api\\Model\\ApiV1AppVersionGetResponse200';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Addy\\Api\\Model\\ApiV1AppVersionGetResponse200';
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
        $object = new \Addy\Api\Model\ApiV1AppVersionGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('version', $data) && $data['version'] !== null) {
            $object->setVersion($data['version']);
            unset($data['version']);
        }
        elseif (\array_key_exists('version', $data) && $data['version'] === null) {
            $object->setVersion(null);
        }
        if (\array_key_exists('major', $data) && $data['major'] !== null) {
            $object->setMajor($data['major']);
            unset($data['major']);
        }
        elseif (\array_key_exists('major', $data) && $data['major'] === null) {
            $object->setMajor(null);
        }
        if (\array_key_exists('minor', $data) && $data['minor'] !== null) {
            $object->setMinor($data['minor']);
            unset($data['minor']);
        }
        elseif (\array_key_exists('minor', $data) && $data['minor'] === null) {
            $object->setMinor(null);
        }
        if (\array_key_exists('patch', $data) && $data['patch'] !== null) {
            $object->setPatch($data['patch']);
            unset($data['patch']);
        }
        elseif (\array_key_exists('patch', $data) && $data['patch'] === null) {
            $object->setPatch(null);
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
        if ($object->isInitialized('version') && null !== $object->getVersion()) {
            $data['version'] = $object->getVersion();
        }
        if ($object->isInitialized('major') && null !== $object->getMajor()) {
            $data['major'] = $object->getMajor();
        }
        if ($object->isInitialized('minor') && null !== $object->getMinor()) {
            $data['minor'] = $object->getMinor();
        }
        if ($object->isInitialized('patch') && null !== $object->getPatch()) {
            $data['patch'] = $object->getPatch();
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
        return array('Addy\\Api\\Model\\ApiV1AppVersionGetResponse200' => true);
    }
    public function hasCacheableSupportsMethod() : bool
    {
        return true;
    }
}