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
class ApiV1AliasesGetResponse200DataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Addy\\Api\\Model\\ApiV1AliasesGetResponse200DataItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Addy\\Api\\Model\\ApiV1AliasesGetResponse200DataItem';
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
        $object = new \Addy\Api\Model\ApiV1AliasesGetResponse200DataItem();
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
        if (\array_key_exists('aliasable_id', $data) && $data['aliasable_id'] !== null) {
            $object->setAliasableId($data['aliasable_id']);
            unset($data['aliasable_id']);
        }
        elseif (\array_key_exists('aliasable_id', $data) && $data['aliasable_id'] === null) {
            $object->setAliasableId(null);
        }
        if (\array_key_exists('aliasable_type', $data) && $data['aliasable_type'] !== null) {
            $object->setAliasableType($data['aliasable_type']);
            unset($data['aliasable_type']);
        }
        elseif (\array_key_exists('aliasable_type', $data) && $data['aliasable_type'] === null) {
            $object->setAliasableType(null);
        }
        if (\array_key_exists('local_part', $data) && $data['local_part'] !== null) {
            $object->setLocalPart($data['local_part']);
            unset($data['local_part']);
        }
        elseif (\array_key_exists('local_part', $data) && $data['local_part'] === null) {
            $object->setLocalPart(null);
        }
        if (\array_key_exists('extension', $data) && $data['extension'] !== null) {
            $object->setExtension($data['extension']);
            unset($data['extension']);
        }
        elseif (\array_key_exists('extension', $data) && $data['extension'] === null) {
            $object->setExtension(null);
        }
        if (\array_key_exists('domain', $data) && $data['domain'] !== null) {
            $object->setDomain($data['domain']);
            unset($data['domain']);
        }
        elseif (\array_key_exists('domain', $data) && $data['domain'] === null) {
            $object->setDomain(null);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
            unset($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('active', $data) && $data['active'] !== null) {
            $object->setActive($data['active']);
            unset($data['active']);
        }
        elseif (\array_key_exists('active', $data) && $data['active'] === null) {
            $object->setActive(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
            unset($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('from_name', $data) && $data['from_name'] !== null) {
            $object->setFromName($data['from_name']);
            unset($data['from_name']);
        }
        elseif (\array_key_exists('from_name', $data) && $data['from_name'] === null) {
            $object->setFromName(null);
        }
        if (\array_key_exists('emails_forwarded', $data) && $data['emails_forwarded'] !== null) {
            $object->setEmailsForwarded($data['emails_forwarded']);
            unset($data['emails_forwarded']);
        }
        elseif (\array_key_exists('emails_forwarded', $data) && $data['emails_forwarded'] === null) {
            $object->setEmailsForwarded(null);
        }
        if (\array_key_exists('emails_blocked', $data) && $data['emails_blocked'] !== null) {
            $object->setEmailsBlocked($data['emails_blocked']);
            unset($data['emails_blocked']);
        }
        elseif (\array_key_exists('emails_blocked', $data) && $data['emails_blocked'] === null) {
            $object->setEmailsBlocked(null);
        }
        if (\array_key_exists('emails_replied', $data) && $data['emails_replied'] !== null) {
            $object->setEmailsReplied($data['emails_replied']);
            unset($data['emails_replied']);
        }
        elseif (\array_key_exists('emails_replied', $data) && $data['emails_replied'] === null) {
            $object->setEmailsReplied(null);
        }
        if (\array_key_exists('emails_sent', $data) && $data['emails_sent'] !== null) {
            $object->setEmailsSent($data['emails_sent']);
            unset($data['emails_sent']);
        }
        elseif (\array_key_exists('emails_sent', $data) && $data['emails_sent'] === null) {
            $object->setEmailsSent(null);
        }
        if (\array_key_exists('recipients', $data) && $data['recipients'] !== null) {
            $values = array();
            foreach ($data['recipients'] as $value) {
                $values[] = $value;
            }
            $object->setRecipients($values);
            unset($data['recipients']);
        }
        elseif (\array_key_exists('recipients', $data) && $data['recipients'] === null) {
            $object->setRecipients(null);
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
        if (\array_key_exists('deleted_at', $data) && $data['deleted_at'] !== null) {
            $object->setDeletedAt($data['deleted_at']);
            unset($data['deleted_at']);
        }
        elseif (\array_key_exists('deleted_at', $data) && $data['deleted_at'] === null) {
            $object->setDeletedAt(null);
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
        if ($object->isInitialized('aliasableId') && null !== $object->getAliasableId()) {
            $data['aliasable_id'] = $object->getAliasableId();
        }
        if ($object->isInitialized('aliasableType') && null !== $object->getAliasableType()) {
            $data['aliasable_type'] = $object->getAliasableType();
        }
        if ($object->isInitialized('localPart') && null !== $object->getLocalPart()) {
            $data['local_part'] = $object->getLocalPart();
        }
        if ($object->isInitialized('extension') && null !== $object->getExtension()) {
            $data['extension'] = $object->getExtension();
        }
        if ($object->isInitialized('domain') && null !== $object->getDomain()) {
            $data['domain'] = $object->getDomain();
        }
        if ($object->isInitialized('email') && null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if ($object->isInitialized('active') && null !== $object->getActive()) {
            $data['active'] = $object->getActive();
        }
        if ($object->isInitialized('description') && null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if ($object->isInitialized('fromName') && null !== $object->getFromName()) {
            $data['from_name'] = $object->getFromName();
        }
        if ($object->isInitialized('emailsForwarded') && null !== $object->getEmailsForwarded()) {
            $data['emails_forwarded'] = $object->getEmailsForwarded();
        }
        if ($object->isInitialized('emailsBlocked') && null !== $object->getEmailsBlocked()) {
            $data['emails_blocked'] = $object->getEmailsBlocked();
        }
        if ($object->isInitialized('emailsReplied') && null !== $object->getEmailsReplied()) {
            $data['emails_replied'] = $object->getEmailsReplied();
        }
        if ($object->isInitialized('emailsSent') && null !== $object->getEmailsSent()) {
            $data['emails_sent'] = $object->getEmailsSent();
        }
        if ($object->isInitialized('recipients') && null !== $object->getRecipients()) {
            $values = array();
            foreach ($object->getRecipients() as $value) {
                $values[] = $value;
            }
            $data['recipients'] = $values;
        }
        if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt();
        }
        if ($object->isInitialized('deletedAt') && null !== $object->getDeletedAt()) {
            $data['deleted_at'] = $object->getDeletedAt();
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
        return array('Addy\\Api\\Model\\ApiV1AliasesGetResponse200DataItem' => true);
    }
    public function hasCacheableSupportsMethod() : bool
    {
        return true;
    }
}