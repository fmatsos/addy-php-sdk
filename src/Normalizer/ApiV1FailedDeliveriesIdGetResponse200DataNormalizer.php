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
class ApiV1FailedDeliveriesIdGetResponse200DataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Addy\\Api\\Model\\ApiV1FailedDeliveriesIdGetResponse200Data';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Addy\\Api\\Model\\ApiV1FailedDeliveriesIdGetResponse200Data';
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
        $object = new \Addy\Api\Model\ApiV1FailedDeliveriesIdGetResponse200Data();
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
        if (\array_key_exists('recipient_id', $data) && $data['recipient_id'] !== null) {
            $object->setRecipientId($data['recipient_id']);
            unset($data['recipient_id']);
        }
        elseif (\array_key_exists('recipient_id', $data) && $data['recipient_id'] === null) {
            $object->setRecipientId(null);
        }
        if (\array_key_exists('recipient_email', $data) && $data['recipient_email'] !== null) {
            $object->setRecipientEmail($data['recipient_email']);
            unset($data['recipient_email']);
        }
        elseif (\array_key_exists('recipient_email', $data) && $data['recipient_email'] === null) {
            $object->setRecipientEmail(null);
        }
        if (\array_key_exists('alias_id', $data) && $data['alias_id'] !== null) {
            $object->setAliasId($data['alias_id']);
            unset($data['alias_id']);
        }
        elseif (\array_key_exists('alias_id', $data) && $data['alias_id'] === null) {
            $object->setAliasId(null);
        }
        if (\array_key_exists('alias_email', $data) && $data['alias_email'] !== null) {
            $object->setAliasEmail($data['alias_email']);
            unset($data['alias_email']);
        }
        elseif (\array_key_exists('alias_email', $data) && $data['alias_email'] === null) {
            $object->setAliasEmail(null);
        }
        if (\array_key_exists('bounce_type', $data) && $data['bounce_type'] !== null) {
            $object->setBounceType($data['bounce_type']);
            unset($data['bounce_type']);
        }
        elseif (\array_key_exists('bounce_type', $data) && $data['bounce_type'] === null) {
            $object->setBounceType(null);
        }
        if (\array_key_exists('remote_mta', $data) && $data['remote_mta'] !== null) {
            $object->setRemoteMta($data['remote_mta']);
            unset($data['remote_mta']);
        }
        elseif (\array_key_exists('remote_mta', $data) && $data['remote_mta'] === null) {
            $object->setRemoteMta(null);
        }
        if (\array_key_exists('sender', $data) && $data['sender'] !== null) {
            $object->setSender($data['sender']);
            unset($data['sender']);
        }
        elseif (\array_key_exists('sender', $data) && $data['sender'] === null) {
            $object->setSender(null);
        }
        if (\array_key_exists('email_type', $data) && $data['email_type'] !== null) {
            $object->setEmailType($data['email_type']);
            unset($data['email_type']);
        }
        elseif (\array_key_exists('email_type', $data) && $data['email_type'] === null) {
            $object->setEmailType(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
            unset($data['code']);
        }
        elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('attempted_at', $data) && $data['attempted_at'] !== null) {
            $object->setAttemptedAt($data['attempted_at']);
            unset($data['attempted_at']);
        }
        elseif (\array_key_exists('attempted_at', $data) && $data['attempted_at'] === null) {
            $object->setAttemptedAt(null);
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
        if ($object->isInitialized('id') && null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if ($object->isInitialized('userId') && null !== $object->getUserId()) {
            $data['user_id'] = $object->getUserId();
        }
        if ($object->isInitialized('recipientId') && null !== $object->getRecipientId()) {
            $data['recipient_id'] = $object->getRecipientId();
        }
        if ($object->isInitialized('recipientEmail') && null !== $object->getRecipientEmail()) {
            $data['recipient_email'] = $object->getRecipientEmail();
        }
        if ($object->isInitialized('aliasId') && null !== $object->getAliasId()) {
            $data['alias_id'] = $object->getAliasId();
        }
        if ($object->isInitialized('aliasEmail') && null !== $object->getAliasEmail()) {
            $data['alias_email'] = $object->getAliasEmail();
        }
        if ($object->isInitialized('bounceType') && null !== $object->getBounceType()) {
            $data['bounce_type'] = $object->getBounceType();
        }
        if ($object->isInitialized('remoteMta') && null !== $object->getRemoteMta()) {
            $data['remote_mta'] = $object->getRemoteMta();
        }
        if ($object->isInitialized('sender') && null !== $object->getSender()) {
            $data['sender'] = $object->getSender();
        }
        if ($object->isInitialized('emailType') && null !== $object->getEmailType()) {
            $data['email_type'] = $object->getEmailType();
        }
        if ($object->isInitialized('status') && null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if ($object->isInitialized('code') && null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if ($object->isInitialized('attemptedAt') && null !== $object->getAttemptedAt()) {
            $data['attempted_at'] = $object->getAttemptedAt();
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
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
        return array('Addy\\Api\\Model\\ApiV1FailedDeliveriesIdGetResponse200Data' => true);
    }
    public function hasCacheableSupportsMethod() : bool
    {
        return true;
    }
}