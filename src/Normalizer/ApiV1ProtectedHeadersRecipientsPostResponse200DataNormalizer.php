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
class ApiV1ProtectedHeadersRecipientsPostResponse200DataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Addy\\Api\\Model\\ApiV1ProtectedHeadersRecipientsPostResponse200Data';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Addy\\Api\\Model\\ApiV1ProtectedHeadersRecipientsPostResponse200Data';
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
        $object = new \Addy\Api\Model\ApiV1ProtectedHeadersRecipientsPostResponse200Data();
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
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('can_reply_send', $data) && $data['can_reply_send'] !== null) {
            $object->setCanReplySend($data['can_reply_send']);
            unset($data['can_reply_send']);
        }
        elseif (\array_key_exists('can_reply_send', $data) && $data['can_reply_send'] === null) {
            $object->setCanReplySend(null);
        }
        if (\array_key_exists('should_encrypt', $data) && $data['should_encrypt'] !== null) {
            $object->setShouldEncrypt($data['should_encrypt']);
            unset($data['should_encrypt']);
        }
        elseif (\array_key_exists('should_encrypt', $data) && $data['should_encrypt'] === null) {
            $object->setShouldEncrypt(null);
        }
        if (\array_key_exists('inline_encryption', $data) && $data['inline_encryption'] !== null) {
            $object->setInlineEncryption($data['inline_encryption']);
            unset($data['inline_encryption']);
        }
        elseif (\array_key_exists('inline_encryption', $data) && $data['inline_encryption'] === null) {
            $object->setInlineEncryption(null);
        }
        if (\array_key_exists('protected_headers', $data) && $data['protected_headers'] !== null) {
            $object->setProtectedHeaders($data['protected_headers']);
            unset($data['protected_headers']);
        }
        elseif (\array_key_exists('protected_headers', $data) && $data['protected_headers'] === null) {
            $object->setProtectedHeaders(null);
        }
        if (\array_key_exists('fingerprint', $data) && $data['fingerprint'] !== null) {
            $object->setFingerprint($data['fingerprint']);
            unset($data['fingerprint']);
        }
        elseif (\array_key_exists('fingerprint', $data) && $data['fingerprint'] === null) {
            $object->setFingerprint(null);
        }
        if (\array_key_exists('email_verified_at', $data) && $data['email_verified_at'] !== null) {
            $object->setEmailVerifiedAt($data['email_verified_at']);
            unset($data['email_verified_at']);
        }
        elseif (\array_key_exists('email_verified_at', $data) && $data['email_verified_at'] === null) {
            $object->setEmailVerifiedAt(null);
        }
        if (\array_key_exists('aliases', $data) && $data['aliases'] !== null) {
            $values = array();
            foreach ($data['aliases'] as $value) {
                $values[] = $value;
            }
            $object->setAliases($values);
            unset($data['aliases']);
        }
        elseif (\array_key_exists('aliases', $data) && $data['aliases'] === null) {
            $object->setAliases(null);
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
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('canReplySend') && null !== $object->getCanReplySend()) {
            $data['can_reply_send'] = $object->getCanReplySend();
        }
        if ($object->isInitialized('shouldEncrypt') && null !== $object->getShouldEncrypt()) {
            $data['should_encrypt'] = $object->getShouldEncrypt();
        }
        if ($object->isInitialized('inlineEncryption') && null !== $object->getInlineEncryption()) {
            $data['inline_encryption'] = $object->getInlineEncryption();
        }
        if ($object->isInitialized('protectedHeaders') && null !== $object->getProtectedHeaders()) {
            $data['protected_headers'] = $object->getProtectedHeaders();
        }
        if ($object->isInitialized('fingerprint') && null !== $object->getFingerprint()) {
            $data['fingerprint'] = $object->getFingerprint();
        }
        if ($object->isInitialized('emailVerifiedAt') && null !== $object->getEmailVerifiedAt()) {
            $data['email_verified_at'] = $object->getEmailVerifiedAt();
        }
        if ($object->isInitialized('aliases') && null !== $object->getAliases()) {
            $values = array();
            foreach ($object->getAliases() as $value) {
                $values[] = $value;
            }
            $data['aliases'] = $values;
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }
        return $data;
    }
    public function getSupportedTypes(?string $format = null) : array
    {
        return array('Addy\\Api\\Model\\ApiV1ProtectedHeadersRecipientsPostResponse200Data' => true);
    }
    public function hasCacheableSupportsMethod() : bool
    {
        return true;
    }
}