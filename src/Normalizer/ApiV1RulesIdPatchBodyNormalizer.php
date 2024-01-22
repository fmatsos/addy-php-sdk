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
class ApiV1RulesIdPatchBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Addy\\Api\\Model\\ApiV1RulesIdPatchBody';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Addy\\Api\\Model\\ApiV1RulesIdPatchBody';
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
        $object = new \Addy\Api\Model\ApiV1RulesIdPatchBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('conditions', $data) && $data['conditions'] !== null) {
            $object->setConditions($this->denormalizer->denormalize($data['conditions'], 'Addy\\Api\\Model\\ApiV1RulesIdPatchBodyConditions', 'json', $context));
            unset($data['conditions']);
        }
        elseif (\array_key_exists('conditions', $data) && $data['conditions'] === null) {
            $object->setConditions(null);
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $object->setActions($this->denormalizer->denormalize($data['actions'], 'Addy\\Api\\Model\\ApiV1RulesIdPatchBodyActions', 'json', $context));
            unset($data['actions']);
        }
        elseif (\array_key_exists('actions', $data) && $data['actions'] === null) {
            $object->setActions(null);
        }
        if (\array_key_exists('operator', $data) && $data['operator'] !== null) {
            $object->setOperator($data['operator']);
            unset($data['operator']);
        }
        elseif (\array_key_exists('operator', $data) && $data['operator'] === null) {
            $object->setOperator(null);
        }
        if (\array_key_exists('forwards', $data) && $data['forwards'] !== null) {
            $object->setForwards($data['forwards']);
            unset($data['forwards']);
        }
        elseif (\array_key_exists('forwards', $data) && $data['forwards'] === null) {
            $object->setForwards(null);
        }
        if (\array_key_exists('replies', $data) && $data['replies'] !== null) {
            $object->setReplies($data['replies']);
            unset($data['replies']);
        }
        elseif (\array_key_exists('replies', $data) && $data['replies'] === null) {
            $object->setReplies(null);
        }
        if (\array_key_exists('sends', $data) && $data['sends'] !== null) {
            $object->setSends($data['sends']);
            unset($data['sends']);
        }
        elseif (\array_key_exists('sends', $data) && $data['sends'] === null) {
            $object->setSends(null);
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
        $data['name'] = $object->getName();
        $data['conditions'] = $this->normalizer->normalize($object->getConditions(), 'json', $context);
        $data['actions'] = $this->normalizer->normalize($object->getActions(), 'json', $context);
        if ($object->isInitialized('operator') && null !== $object->getOperator()) {
            $data['operator'] = $object->getOperator();
        }
        if ($object->isInitialized('forwards') && null !== $object->getForwards()) {
            $data['forwards'] = $object->getForwards();
        }
        if ($object->isInitialized('replies') && null !== $object->getReplies()) {
            $data['replies'] = $object->getReplies();
        }
        if ($object->isInitialized('sends') && null !== $object->getSends()) {
            $data['sends'] = $object->getSends();
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
        return array('Addy\\Api\\Model\\ApiV1RulesIdPatchBody' => true);
    }
    public function hasCacheableSupportsMethod() : bool
    {
        return true;
    }
}