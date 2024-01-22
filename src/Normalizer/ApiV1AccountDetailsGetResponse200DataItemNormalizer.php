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
class ApiV1AccountDetailsGetResponse200DataItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface, CacheableSupportsMethodInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization($data, $type, $format = null, array $context = array()) : bool
    {
        return $type === 'Addy\\Api\\Model\\ApiV1AccountDetailsGetResponse200DataItem';
    }
    public function supportsNormalization($data, $format = null, array $context = array()) : bool
    {
        return is_object($data) && get_class($data) === 'Addy\\Api\\Model\\ApiV1AccountDetailsGetResponse200DataItem';
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
        $object = new \Addy\Api\Model\ApiV1AccountDetailsGetResponse200DataItem();
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
        if (\array_key_exists('username', $data) && $data['username'] !== null) {
            $object->setUsername($data['username']);
            unset($data['username']);
        }
        elseif (\array_key_exists('username', $data) && $data['username'] === null) {
            $object->setUsername(null);
        }
        if (\array_key_exists('from_name', $data) && $data['from_name'] !== null) {
            $object->setFromName($data['from_name']);
            unset($data['from_name']);
        }
        elseif (\array_key_exists('from_name', $data) && $data['from_name'] === null) {
            $object->setFromName(null);
        }
        if (\array_key_exists('email_subject', $data) && $data['email_subject'] !== null) {
            $object->setEmailSubject($data['email_subject']);
            unset($data['email_subject']);
        }
        elseif (\array_key_exists('email_subject', $data) && $data['email_subject'] === null) {
            $object->setEmailSubject(null);
        }
        if (\array_key_exists('banner_location', $data) && $data['banner_location'] !== null) {
            $object->setBannerLocation($data['banner_location']);
            unset($data['banner_location']);
        }
        elseif (\array_key_exists('banner_location', $data) && $data['banner_location'] === null) {
            $object->setBannerLocation(null);
        }
        if (\array_key_exists('bandwidth', $data) && $data['bandwidth'] !== null) {
            $object->setBandwidth($data['bandwidth']);
            unset($data['bandwidth']);
        }
        elseif (\array_key_exists('bandwidth', $data) && $data['bandwidth'] === null) {
            $object->setBandwidth(null);
        }
        if (\array_key_exists('username_count', $data) && $data['username_count'] !== null) {
            $object->setUsernameCount($data['username_count']);
            unset($data['username_count']);
        }
        elseif (\array_key_exists('username_count', $data) && $data['username_count'] === null) {
            $object->setUsernameCount(null);
        }
        if (\array_key_exists('username_limit', $data) && $data['username_limit'] !== null) {
            $object->setUsernameLimit($data['username_limit']);
            unset($data['username_limit']);
        }
        elseif (\array_key_exists('username_limit', $data) && $data['username_limit'] === null) {
            $object->setUsernameLimit(null);
        }
        if (\array_key_exists('default_recipient_id', $data) && $data['default_recipient_id'] !== null) {
            $object->setDefaultRecipientId($data['default_recipient_id']);
            unset($data['default_recipient_id']);
        }
        elseif (\array_key_exists('default_recipient_id', $data) && $data['default_recipient_id'] === null) {
            $object->setDefaultRecipientId(null);
        }
        if (\array_key_exists('default_alias_domain', $data) && $data['default_alias_domain'] !== null) {
            $object->setDefaultAliasDomain($data['default_alias_domain']);
            unset($data['default_alias_domain']);
        }
        elseif (\array_key_exists('default_alias_domain', $data) && $data['default_alias_domain'] === null) {
            $object->setDefaultAliasDomain(null);
        }
        if (\array_key_exists('default_alias_format', $data) && $data['default_alias_format'] !== null) {
            $object->setDefaultAliasFormat($data['default_alias_format']);
            unset($data['default_alias_format']);
        }
        elseif (\array_key_exists('default_alias_format', $data) && $data['default_alias_format'] === null) {
            $object->setDefaultAliasFormat(null);
        }
        if (\array_key_exists('subscription', $data) && $data['subscription'] !== null) {
            $object->setSubscription($data['subscription']);
            unset($data['subscription']);
        }
        elseif (\array_key_exists('subscription', $data) && $data['subscription'] === null) {
            $object->setSubscription(null);
        }
        if (\array_key_exists('subscription_ends_at', $data) && $data['subscription_ends_at'] !== null) {
            $object->setSubscriptionEndsAt($data['subscription_ends_at']);
            unset($data['subscription_ends_at']);
        }
        elseif (\array_key_exists('subscription_ends_at', $data) && $data['subscription_ends_at'] === null) {
            $object->setSubscriptionEndsAt(null);
        }
        if (\array_key_exists('bandwidth_limit', $data) && $data['bandwidth_limit'] !== null) {
            $object->setBandwidthLimit($data['bandwidth_limit']);
            unset($data['bandwidth_limit']);
        }
        elseif (\array_key_exists('bandwidth_limit', $data) && $data['bandwidth_limit'] === null) {
            $object->setBandwidthLimit(null);
        }
        if (\array_key_exists('recipient_count', $data) && $data['recipient_count'] !== null) {
            $object->setRecipientCount($data['recipient_count']);
            unset($data['recipient_count']);
        }
        elseif (\array_key_exists('recipient_count', $data) && $data['recipient_count'] === null) {
            $object->setRecipientCount(null);
        }
        if (\array_key_exists('recipient_limit', $data) && $data['recipient_limit'] !== null) {
            $object->setRecipientLimit($data['recipient_limit']);
            unset($data['recipient_limit']);
        }
        elseif (\array_key_exists('recipient_limit', $data) && $data['recipient_limit'] === null) {
            $object->setRecipientLimit(null);
        }
        if (\array_key_exists('active_domain_count', $data) && $data['active_domain_count'] !== null) {
            $object->setActiveDomainCount($data['active_domain_count']);
            unset($data['active_domain_count']);
        }
        elseif (\array_key_exists('active_domain_count', $data) && $data['active_domain_count'] === null) {
            $object->setActiveDomainCount(null);
        }
        if (\array_key_exists('active_domain_limit', $data) && $data['active_domain_limit'] !== null) {
            $object->setActiveDomainLimit($data['active_domain_limit']);
            unset($data['active_domain_limit']);
        }
        elseif (\array_key_exists('active_domain_limit', $data) && $data['active_domain_limit'] === null) {
            $object->setActiveDomainLimit(null);
        }
        if (\array_key_exists('active_shared_domain_alias_count', $data) && $data['active_shared_domain_alias_count'] !== null) {
            $object->setActiveSharedDomainAliasCount($data['active_shared_domain_alias_count']);
            unset($data['active_shared_domain_alias_count']);
        }
        elseif (\array_key_exists('active_shared_domain_alias_count', $data) && $data['active_shared_domain_alias_count'] === null) {
            $object->setActiveSharedDomainAliasCount(null);
        }
        if (\array_key_exists('active_shared_domain_alias_limit', $data) && $data['active_shared_domain_alias_limit'] !== null) {
            $object->setActiveSharedDomainAliasLimit($data['active_shared_domain_alias_limit']);
            unset($data['active_shared_domain_alias_limit']);
        }
        elseif (\array_key_exists('active_shared_domain_alias_limit', $data) && $data['active_shared_domain_alias_limit'] === null) {
            $object->setActiveSharedDomainAliasLimit(null);
        }
        if (\array_key_exists('active_rule_count', $data) && $data['active_rule_count'] !== null) {
            $object->setActiveRuleCount($data['active_rule_count']);
            unset($data['active_rule_count']);
        }
        elseif (\array_key_exists('active_rule_count', $data) && $data['active_rule_count'] === null) {
            $object->setActiveRuleCount(null);
        }
        if (\array_key_exists('active_rule_limit', $data) && $data['active_rule_limit'] !== null) {
            $object->setActiveRuleLimit($data['active_rule_limit']);
            unset($data['active_rule_limit']);
        }
        elseif (\array_key_exists('active_rule_limit', $data) && $data['active_rule_limit'] === null) {
            $object->setActiveRuleLimit(null);
        }
        if (\array_key_exists('total_emails_forwarded', $data) && $data['total_emails_forwarded'] !== null) {
            $object->setTotalEmailsForwarded($data['total_emails_forwarded']);
            unset($data['total_emails_forwarded']);
        }
        elseif (\array_key_exists('total_emails_forwarded', $data) && $data['total_emails_forwarded'] === null) {
            $object->setTotalEmailsForwarded(null);
        }
        if (\array_key_exists('total_emails_blocked', $data) && $data['total_emails_blocked'] !== null) {
            $object->setTotalEmailsBlocked($data['total_emails_blocked']);
            unset($data['total_emails_blocked']);
        }
        elseif (\array_key_exists('total_emails_blocked', $data) && $data['total_emails_blocked'] === null) {
            $object->setTotalEmailsBlocked(null);
        }
        if (\array_key_exists('total_emails_replied', $data) && $data['total_emails_replied'] !== null) {
            $object->setTotalEmailsReplied($data['total_emails_replied']);
            unset($data['total_emails_replied']);
        }
        elseif (\array_key_exists('total_emails_replied', $data) && $data['total_emails_replied'] === null) {
            $object->setTotalEmailsReplied(null);
        }
        if (\array_key_exists('total_emails_sent', $data) && $data['total_emails_sent'] !== null) {
            $object->setTotalEmailsSent($data['total_emails_sent']);
            unset($data['total_emails_sent']);
        }
        elseif (\array_key_exists('total_emails_sent', $data) && $data['total_emails_sent'] === null) {
            $object->setTotalEmailsSent(null);
        }
        if (\array_key_exists('total_aliases', $data) && $data['total_aliases'] !== null) {
            $object->setTotalAliases($data['total_aliases']);
            unset($data['total_aliases']);
        }
        elseif (\array_key_exists('total_aliases', $data) && $data['total_aliases'] === null) {
            $object->setTotalAliases(null);
        }
        if (\array_key_exists('total_active_aliases', $data) && $data['total_active_aliases'] !== null) {
            $object->setTotalActiveAliases($data['total_active_aliases']);
            unset($data['total_active_aliases']);
        }
        elseif (\array_key_exists('total_active_aliases', $data) && $data['total_active_aliases'] === null) {
            $object->setTotalActiveAliases(null);
        }
        if (\array_key_exists('total_inactive_aliases', $data) && $data['total_inactive_aliases'] !== null) {
            $object->setTotalInactiveAliases($data['total_inactive_aliases']);
            unset($data['total_inactive_aliases']);
        }
        elseif (\array_key_exists('total_inactive_aliases', $data) && $data['total_inactive_aliases'] === null) {
            $object->setTotalInactiveAliases(null);
        }
        if (\array_key_exists('total_deleted_aliases', $data) && $data['total_deleted_aliases'] !== null) {
            $object->setTotalDeletedAliases($data['total_deleted_aliases']);
            unset($data['total_deleted_aliases']);
        }
        elseif (\array_key_exists('total_deleted_aliases', $data) && $data['total_deleted_aliases'] === null) {
            $object->setTotalDeletedAliases(null);
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
        if ($object->isInitialized('username') && null !== $object->getUsername()) {
            $data['username'] = $object->getUsername();
        }
        if ($object->isInitialized('fromName') && null !== $object->getFromName()) {
            $data['from_name'] = $object->getFromName();
        }
        if ($object->isInitialized('emailSubject') && null !== $object->getEmailSubject()) {
            $data['email_subject'] = $object->getEmailSubject();
        }
        if ($object->isInitialized('bannerLocation') && null !== $object->getBannerLocation()) {
            $data['banner_location'] = $object->getBannerLocation();
        }
        if ($object->isInitialized('bandwidth') && null !== $object->getBandwidth()) {
            $data['bandwidth'] = $object->getBandwidth();
        }
        if ($object->isInitialized('usernameCount') && null !== $object->getUsernameCount()) {
            $data['username_count'] = $object->getUsernameCount();
        }
        if ($object->isInitialized('usernameLimit') && null !== $object->getUsernameLimit()) {
            $data['username_limit'] = $object->getUsernameLimit();
        }
        if ($object->isInitialized('defaultRecipientId') && null !== $object->getDefaultRecipientId()) {
            $data['default_recipient_id'] = $object->getDefaultRecipientId();
        }
        if ($object->isInitialized('defaultAliasDomain') && null !== $object->getDefaultAliasDomain()) {
            $data['default_alias_domain'] = $object->getDefaultAliasDomain();
        }
        if ($object->isInitialized('defaultAliasFormat') && null !== $object->getDefaultAliasFormat()) {
            $data['default_alias_format'] = $object->getDefaultAliasFormat();
        }
        if ($object->isInitialized('subscription') && null !== $object->getSubscription()) {
            $data['subscription'] = $object->getSubscription();
        }
        if ($object->isInitialized('subscriptionEndsAt') && null !== $object->getSubscriptionEndsAt()) {
            $data['subscription_ends_at'] = $object->getSubscriptionEndsAt();
        }
        if ($object->isInitialized('bandwidthLimit') && null !== $object->getBandwidthLimit()) {
            $data['bandwidth_limit'] = $object->getBandwidthLimit();
        }
        if ($object->isInitialized('recipientCount') && null !== $object->getRecipientCount()) {
            $data['recipient_count'] = $object->getRecipientCount();
        }
        if ($object->isInitialized('recipientLimit') && null !== $object->getRecipientLimit()) {
            $data['recipient_limit'] = $object->getRecipientLimit();
        }
        if ($object->isInitialized('activeDomainCount') && null !== $object->getActiveDomainCount()) {
            $data['active_domain_count'] = $object->getActiveDomainCount();
        }
        if ($object->isInitialized('activeDomainLimit') && null !== $object->getActiveDomainLimit()) {
            $data['active_domain_limit'] = $object->getActiveDomainLimit();
        }
        if ($object->isInitialized('activeSharedDomainAliasCount') && null !== $object->getActiveSharedDomainAliasCount()) {
            $data['active_shared_domain_alias_count'] = $object->getActiveSharedDomainAliasCount();
        }
        if ($object->isInitialized('activeSharedDomainAliasLimit') && null !== $object->getActiveSharedDomainAliasLimit()) {
            $data['active_shared_domain_alias_limit'] = $object->getActiveSharedDomainAliasLimit();
        }
        if ($object->isInitialized('activeRuleCount') && null !== $object->getActiveRuleCount()) {
            $data['active_rule_count'] = $object->getActiveRuleCount();
        }
        if ($object->isInitialized('activeRuleLimit') && null !== $object->getActiveRuleLimit()) {
            $data['active_rule_limit'] = $object->getActiveRuleLimit();
        }
        if ($object->isInitialized('totalEmailsForwarded') && null !== $object->getTotalEmailsForwarded()) {
            $data['total_emails_forwarded'] = $object->getTotalEmailsForwarded();
        }
        if ($object->isInitialized('totalEmailsBlocked') && null !== $object->getTotalEmailsBlocked()) {
            $data['total_emails_blocked'] = $object->getTotalEmailsBlocked();
        }
        if ($object->isInitialized('totalEmailsReplied') && null !== $object->getTotalEmailsReplied()) {
            $data['total_emails_replied'] = $object->getTotalEmailsReplied();
        }
        if ($object->isInitialized('totalEmailsSent') && null !== $object->getTotalEmailsSent()) {
            $data['total_emails_sent'] = $object->getTotalEmailsSent();
        }
        if ($object->isInitialized('totalAliases') && null !== $object->getTotalAliases()) {
            $data['total_aliases'] = $object->getTotalAliases();
        }
        if ($object->isInitialized('totalActiveAliases') && null !== $object->getTotalActiveAliases()) {
            $data['total_active_aliases'] = $object->getTotalActiveAliases();
        }
        if ($object->isInitialized('totalInactiveAliases') && null !== $object->getTotalInactiveAliases()) {
            $data['total_inactive_aliases'] = $object->getTotalInactiveAliases();
        }
        if ($object->isInitialized('totalDeletedAliases') && null !== $object->getTotalDeletedAliases()) {
            $data['total_deleted_aliases'] = $object->getTotalDeletedAliases();
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
        return array('Addy\\Api\\Model\\ApiV1AccountDetailsGetResponse200DataItem' => true);
    }
    public function hasCacheableSupportsMethod() : bool
    {
        return true;
    }
}