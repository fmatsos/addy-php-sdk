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
class ApiV1RulesIdPatchResponse200DataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Addy\\Api\\Model\\ApiV1RulesIdPatchResponse200Data';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Addy\\Api\\Model\\ApiV1RulesIdPatchResponse200Data';
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
        $object = new \Addy\Api\Model\ApiV1RulesIdPatchResponse200Data();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
            unset($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('user_id', $data) && $data['user_id'] !== null) {
            $object->setUserId($data['user_id']);
            unset($data['user_id']);
        }
        elseif (\array_key_exists('user_id', $data) && $data['user_id'] === null) {
            $object->setUserId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
            unset($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('order', $data) && $data['order'] !== null) {
            $object->setOrder($data['order']);
            unset($data['order']);
        }
        elseif (\array_key_exists('order', $data) && $data['order'] === null) {
            $object->setOrder(null);
        }
        if (\array_key_exists('conditions', $data) && $data['conditions'] !== null) {
            $values = array();
            foreach ($data['conditions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Addy\\Api\\Model\\ApiV1RulesIdPatchResponse200DataConditionsItem', 'json', $context);
            }
            $object->setConditions($values);
            unset($data['conditions']);
        }
        elseif (\array_key_exists('conditions', $data) && $data['conditions'] === null) {
            $object->setConditions(null);
        }
        if (\array_key_exists('actions', $data) && $data['actions'] !== null) {
            $values_1 = array();
            foreach ($data['actions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Addy\\Api\\Model\\ApiV1RulesIdPatchResponse200DataActionsItem', 'json', $context);
            }
            $object->setActions($values_1);
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
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        if (\array_key_exists('updated_at', $data) && $data['updated_at'] !== null) {
            $object->setUpdatedAt($data['updated_at']);
            unset($data['updated_at']);
        }
        elseif (\array_key_exists('updated_at', $data) && $data['updated_at'] === null) {
            $object->setUpdatedAt(null);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('userId') && null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if ($object->isInitialized('name') && null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if ($object->isInitialized('order') && null !== $object->getOrder()) {
            $data['order'] = $object->getOrder();
        }
        if ($object->isInitialized('conditions') && null !== $object->getConditions()) {
            $values = array();
            foreach ($object->getConditions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['conditions'] = $values;
        }
        if ($object->isInitialized('actions') && null !== $object->getActions()) {
            $values_1 = array();
            foreach ($object->getActions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['actions'] = $values_1;
        }
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
        if ($object->isInitialized('active') && null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
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
        return array('Addy\\Api\\Model\\ApiV1RulesIdPatchResponse200Data' => true);
    }
    public function hasCacheableSupportsMethod() : bool
    {
        return true;
    }
}