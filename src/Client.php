<?php

namespace Addy\Api;

class Client extends \Addy\Api\Runtime\Client\Client
{
    /**
     * This endpoint retrieves details about the current API token.
     *
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1ApiTokenDetailsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getDetailsAboutTheCurrentAPIToken(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetDetailsAboutTheCurrentAPIToken($headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves all account details.
     *
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AccountDetailsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllAccountDetails(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetAllAccountDetails($headerParameters), $fetch);
    }
    /**
     * This endpoint gets specific aliases.
     *
     * @param null|\Addy\Api\Model\ApiV1AliasesGetBulkPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AliasesGetBulkPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function bulkGetSpecificAliases(?\Addy\Api\Model\ApiV1AliasesGetBulkPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\BulkGetSpecificAliases($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint activates specific aliases.
     *
     * @param null|\Addy\Api\Model\ApiV1AliasesActivateBulkPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AliasesActivateBulkPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function bulkActivateSpecificAliases(?\Addy\Api\Model\ApiV1AliasesActivateBulkPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\BulkActivateSpecificAliases($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint deactivates specific aliases.
     *
     * @param null|\Addy\Api\Model\ApiV1AliasesDeactivateBulkPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AliasesDeactivateBulkPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function bulkDeactivateSpecificAliases(?\Addy\Api\Model\ApiV1AliasesDeactivateBulkPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\BulkDeactivateSpecificAliases($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint deletes specific aliases.
     *
     * @param null|\Addy\Api\Model\ApiV1AliasesDeleteBulkPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AliasesDeleteBulkPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function bulkDeleteSpecificAliases(?\Addy\Api\Model\ApiV1AliasesDeleteBulkPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\BulkDeleteSpecificAliases($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint restores specific aliases.
     *
     * @param null|\Addy\Api\Model\ApiV1AliasesRestoreBulkPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AliasesRestoreBulkPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function bulkRestoreSpecificAliases(?\Addy\Api\Model\ApiV1AliasesRestoreBulkPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\BulkRestoreSpecificAliases($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint forgets specific aliases.
     *
     * @param null|\Addy\Api\Model\ApiV1AliasesForgetBulkPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AliasesForgetBulkPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function bulkForgetSpecificAliases(?\Addy\Api\Model\ApiV1AliasesForgetBulkPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\BulkForgetSpecificAliases($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint updates the recipients for specific aliases.
     *
     * @param null|\Addy\Api\Model\ApiV1AliasesRecipientsBulkPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AliasesRecipientsBulkPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function bulkUpdateRecipientsForSpecificAliases(?\Addy\Api\Model\ApiV1AliasesRecipientsBulkPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\BulkUpdateRecipientsForSpecificAliases($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves all aliases.
     *
     * @param array $queryParameters {
     *     @var string $filter[deleted] Choose to return alias with deleted or only deleted. Options: with, only.
     *     @var string $filter[active] Choose to return active or inactive aliases. Options: true, false.
     *     @var string $filter[search] Search aliases by email and description.
     *     @var string $sort Choose what to sort the aliases by, prepend "-" for descending results. Options: local_part, domain, email, emails_forwarded, emails_blocked, emails_replied, emails_sent, active, created_at, updated_at, deleted_at
     *     @var int $page[number] Paginate the alias results.
     *     @var int $page[size] Paginate the alias results, default 100, min 1 max 100.
     *     @var string $with Return aliases with their attached recipients. Options: recipients
     * }
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AliasesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllAliases(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetAllAliases($queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint creates a new alias.
     *
     * @param null|\Addy\Api\Model\ApiV1AliasesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AliasesPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createNewAlias(?\Addy\Api\Model\ApiV1AliasesPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\CreateNewAlias($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint deletes a specific alias.
     *
     * @param string $id The id of the alias to retrieve
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteASpecificAlias(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DeleteASpecificAlias($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves a specific alias.
     *
     * @param string $id The id of the alias to retrieve
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AliasesIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getASpecificAlias(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetASpecificAlias($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint updates a specific alias.
     *
     * @param string $id The id of the alias to retrieve
     * @param null|\Addy\Api\Model\ApiV1AliasesIdPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AliasesIdPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateASpecificAlias(string $id, ?\Addy\Api\Model\ApiV1AliasesIdPatchBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\UpdateASpecificAlias($id, $requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint restores a specific deleted alias.
     *
     * @param string $id The id of the alias to restore
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AliasesIdRestorePatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function restoreASpecificDeletedAlias(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\RestoreASpecificDeletedAlias($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint forgets a specific alias.
     *
     * @param string $id The id of the alias to forget
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function forgetASpecificAlias(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\ForgetASpecificAlias($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint activates a specific alias.
     *
     * @param null|\Addy\Api\Model\ApiV1ActiveAliasesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1ActiveAliasesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function activateASpecificAlias(?\Addy\Api\Model\ApiV1ActiveAliasesPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\ActivateASpecificAlias($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint deactivates a specific alias.
     *
     * @param string $id The id of the alias to deactivate
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deactivateASpecificAlias(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DeactivateASpecificAlias($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint updates the recipients for a specific alias.
     *
     * @param null|\Addy\Api\Model\ApiV1AliasRecipientsPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AliasRecipientsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateRecipientsForASpecificAlias(?\Addy\Api\Model\ApiV1AliasRecipientsPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\UpdateRecipientsForASpecificAlias($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves details about the current addy.io version (only available for self-hosted instances).
     *
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AppVersionGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getTheCurrentAddyioAppVersion(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetTheCurrentAddyioAppVersion($headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves all domain options.
     *
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1DomainOptionsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllDomainOptions(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetAllDomainOptions($headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves all domains.
     *
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1DomainsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllDomains(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetAllDomains($headerParameters), $fetch);
    }
    /**
     * This endpoint creates a new domain.
     *
     * @param null|\Addy\Api\Model\ApiV1DomainsPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1DomainsPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createNewDomain(?\Addy\Api\Model\ApiV1DomainsPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\CreateNewDomain($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint deletes a specific domain.
     *
     * @param string $id The id of the domain to retrieve
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteASpecificDomain(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DeleteASpecificDomain($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves a specific domain.
     *
     * @param string $id The id of the domain to retrieve
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1DomainsIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getASpecificDomain(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetASpecificDomain($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint updates a specific domain.
     *
     * @param string $id The id of the domain to retrieve
     * @param null|\Addy\Api\Model\ApiV1DomainsIdPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1DomainsIdPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateASpecificDomain(string $id, ?\Addy\Api\Model\ApiV1DomainsIdPatchBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\UpdateASpecificDomain($id, $requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint updates the default recipient for a specific domain.
     *
     * @param string $id The id of the domain to update
     * @param null|\Addy\Api\Model\ApiV1DomainsIdDefaultRecipientPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1DomainsIdDefaultRecipientPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateDefaultRecipientForASpecificDomain(string $id, ?\Addy\Api\Model\ApiV1DomainsIdDefaultRecipientPatchBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\UpdateDefaultRecipientForASpecificDomain($id, $requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint activates a specific domain.
     *
     * @param null|\Addy\Api\Model\ApiV1ActiveDomainsPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1ActiveDomainsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function activateASpecificDomain(?\Addy\Api\Model\ApiV1ActiveDomainsPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\ActivateASpecificDomain($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint deactivates a specific domain.
     *
     * @param string $id The id of the domain to deactivate
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deactivateASpecificDomain(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DeactivateASpecificDomain($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint enables catch-all a specific domain.
     *
     * @param null|\Addy\Api\Model\ApiV1CatchAllDomainsPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1CatchAllDomainsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function enableCatchAllForASpecificDomain(?\Addy\Api\Model\ApiV1CatchAllDomainsPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\EnableCatchAllForASpecificDomain($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint disables catch-all for a specific domain.
     *
     * @param string $id The id of the domain to disable catch-all
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function disableCatchAllForASpecificDomain(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DisableCatchAllForASpecificDomain($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves all failed deliveries.
     *
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1FailedDeliveriesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllFailedDeliveries(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetAllFailedDeliveries($headerParameters), $fetch);
    }
    /**
     * This endpoint deletes a specific failed delivery.
     *
     * @param string $id The id of the failed delivery to retrieve
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteASpecificFailedDelivery(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DeleteASpecificFailedDelivery($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves a specific failed delivery.
     *
     * @param string $id The id of the failed delivery to retrieve
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1FailedDeliveriesIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getASpecificFailedDelivery(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetASpecificFailedDelivery($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves all recipients.
     *
     * @param array $queryParameters {
     *     @var string $filter[verified] Choose to return recipients that are verified or unverified. Options: true, false.
     * }
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1RecipientsGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllRecipients(array $queryParameters = array(), array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetAllRecipients($queryParameters, $headerParameters), $fetch);
    }
    /**
     * This endpoint creates a new recipient.
     *
     * @param null|\Addy\Api\Model\ApiV1RecipientsPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1RecipientsPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createNewRecipient(?\Addy\Api\Model\ApiV1RecipientsPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\CreateNewRecipient($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint deletes a specific recipient.
     *
     * @param string $id The id of the recipient to retrieve
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteASpecificRecipient(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DeleteASpecificRecipient($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves a specific recipient.
     *
     * @param string $id The id of the recipient to retrieve
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1RecipientsIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getASpecificRecipient(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetASpecificRecipient($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint can be used to resend the verification email when adding a new recipient
     *
     * @param null|\Addy\Api\Model\ApiV1RecipientsEmailResendPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1RecipientsEmailResendPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function resendTheVerificationEmailForARecipient(?\Addy\Api\Model\ApiV1RecipientsEmailResendPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\ResendTheVerificationEmailForARecipient($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint remnoves a public GPG/OpenPGP key for a specific recipient.
     *
     * @param string $id The id of the recipient to add the key for
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function removePublicKeyForASpecificRecipient(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\RemovePublicKeyForASpecificRecipient($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint adds a public GPG/OpenPGP key for a specific recipient. Make sure to escape the json using something like - https://jsonformatter.org/json-escape
     *
     * @param string $id The id of the recipient to add the key for
     * @param null|\Addy\Api\Model\ApiV1RecipientKeysIdPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1RecipientKeysIdPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function addPublicKeyForASpecificRecipient(string $id, ?\Addy\Api\Model\ApiV1RecipientKeysIdPatchBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\AddPublicKeyForASpecificRecipient($id, $requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint enables encryption for a specific recipient.
     *
     * @param null|\Addy\Api\Model\ApiV1EncryptedRecipientsPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1EncryptedRecipientsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function enableEncryptionForASpecificRecipient(?\Addy\Api\Model\ApiV1EncryptedRecipientsPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\EnableEncryptionForASpecificRecipient($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint disables encryption for a specific recipient.
     *
     * @param string $id The id of the recipient to disable encryption for
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function disableEncryptionForASpecificRecipient(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DisableEncryptionForASpecificRecipient($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint enables inline encryption for a specific recipient.
     *
     * @param null|\Addy\Api\Model\ApiV1InlineEncryptedRecipientsPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1InlineEncryptedRecipientsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function enableInlinePGPInlineEncryptionForASpecificRecipient(?\Addy\Api\Model\ApiV1InlineEncryptedRecipientsPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\EnableInlinePGPInlineEncryptionForASpecificRecipient($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint disables inline encryption for a specific recipient.
     *
     * @param string $id The id of the recipient to disable inline encryption for
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function disableInlinePGPInlineEncryptionForASpecificRecipient(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DisableInlinePGPInlineEncryptionForASpecificRecipient($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint enables protected headers which hides the message subject for a specific recipient.
     *
     * @param null|\Addy\Api\Model\ApiV1ProtectedHeadersRecipientsPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1ProtectedHeadersRecipientsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function enableProtectedHeadershideSubjectForASpecificRecipient(?\Addy\Api\Model\ApiV1ProtectedHeadersRecipientsPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\EnableProtectedHeadershideSubjectForASpecificRecipient($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint disables protected headers for a specific recipient.
     *
     * @param string $id The id of the recipient to disable protected headers for
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function disableProtectedHeadershideSubjectForASpecificRecipient(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DisableProtectedHeadershideSubjectForASpecificRecipient($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint allows a specific recipient to reply/send.
     *
     * @param null|\Addy\Api\Model\ApiV1AllowedRecipientsPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1AllowedRecipientsPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function allowASpecificRecipientToReplysendFromYourAliases(?\Addy\Api\Model\ApiV1AllowedRecipientsPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\AllowASpecificRecipientToReplysendFromYourAliases($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint disallows a specific recipient to reply/send.
     *
     * @param string $id The id of the recipient to disallow replies/sends for
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function disallowASpecificRecipientToReplysendFromYourAliases(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DisallowASpecificRecipientToReplysendFromYourAliases($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves all rules.
     *
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1RulesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllRules(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetAllRules($headerParameters), $fetch);
    }
    /**
     * This endpoint creates a new rule.
     *
     * @param null|\Addy\Api\Model\ApiV1RulesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1RulesPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createNewRule(?\Addy\Api\Model\ApiV1RulesPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\CreateNewRule($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint deletes a specific rule.
     *
     * @param string $id The id of the rule to retrieve
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteASpecificRule(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DeleteASpecificRule($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves a specific rule.
     *
     * @param string $id The id of the rule to retrieve
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1RulesIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getASpecificRule(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetASpecificRule($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint updates a specific rule.
     *
     * @param string $id The id of the rule to retrieve
     * @param null|\Addy\Api\Model\ApiV1RulesIdPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1RulesIdPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateASpecificRule(string $id, ?\Addy\Api\Model\ApiV1RulesIdPatchBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\UpdateASpecificRule($id, $requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint updates the order of the rules.
     *
     * @param null|\Addy\Api\Model\ApiV1ReorderRulesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1ReorderRulesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateTheOrderOfTheRules(?\Addy\Api\Model\ApiV1ReorderRulesPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\UpdateTheOrderOfTheRules($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint activates a specific Rule.
     *
     * @param null|\Addy\Api\Model\ApiV1ActiveRulesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1ActiveRulesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function activateASpecificRule(?\Addy\Api\Model\ApiV1ActiveRulesPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\ActivateASpecificRule($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint deactivates a specific rule.
     *
     * @param string $id The id of the rule to deactivate
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deactivateASpecificRule(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DeactivateASpecificRule($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves all usernames.
     *
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1UsernamesGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getAllUsernames(array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetAllUsernames($headerParameters), $fetch);
    }
    /**
     * This endpoint creates a new username.
     *
     * @param null|\Addy\Api\Model\ApiV1UsernamesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1UsernamesPostResponse201|\Psr\Http\Message\ResponseInterface
     */
    public function createNewUsername(?\Addy\Api\Model\ApiV1UsernamesPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\CreateNewUsername($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint deletes a specific username.
     *
     * @param string $id The id of the username to retrieve
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deleteASpecificUsername(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DeleteASpecificUsername($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint retrieves a specific username.
     *
     * @param string $id The id of the username to retrieve
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1UsernamesIdGetResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function getASpecificUsername(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\GetASpecificUsername($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint updates a specific username.
     *
     * @param string $id The id of the username to retrieve
     * @param null|\Addy\Api\Model\ApiV1UsernamesIdPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1UsernamesIdPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateASpecificUsername(string $id, ?\Addy\Api\Model\ApiV1UsernamesIdPatchBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\UpdateASpecificUsername($id, $requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint updates the default recipient for a specific username.
     *
     * @param string $id The id of the username to update
     * @param null|\Addy\Api\Model\ApiV1UsernamesIdDefaultRecipientPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1UsernamesIdDefaultRecipientPatchResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function updateDefaultRecipientForASpecificUsername(string $id, ?\Addy\Api\Model\ApiV1UsernamesIdDefaultRecipientPatchBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\UpdateDefaultRecipientForASpecificUsername($id, $requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint activates a specific username.
     *
     * @param null|\Addy\Api\Model\ApiV1ActiveUsernamesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1ActiveUsernamesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function activateASpecificUsername(?\Addy\Api\Model\ApiV1ActiveUsernamesPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\ActivateASpecificUsername($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint deactivates a specific username.
     *
     * @param string $id The id of the username to deactivate
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function deactivateASpecificUsername(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DeactivateASpecificUsername($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint enables catch-all a specific username.
     *
     * @param null|\Addy\Api\Model\ApiV1CatchAllUsernamesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1CatchAllUsernamesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function enableCatchAllForASpecificUsername(?\Addy\Api\Model\ApiV1CatchAllUsernamesPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\EnableCatchAllForASpecificUsername($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint disables catch-all for a specific username.
     *
     * @param string $id The id of the username to disable catch-all
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function disableCatchAllForASpecificUsername(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DisableCatchAllForASpecificUsername($id, $headerParameters), $fetch);
    }
    /**
     * This endpoint gives a specific username the ability to login to your account.
     *
     * @param null|\Addy\Api\Model\ApiV1LoginableUsernamesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Addy\Api\Model\ApiV1LoginableUsernamesPostResponse200|\Psr\Http\Message\ResponseInterface
     */
    public function allowLoginForASpecificUsername(?\Addy\Api\Model\ApiV1LoginableUsernamesPostBody $requestBody = null, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\AllowLoginForASpecificUsername($requestBody, $headerParameters), $fetch);
    }
    /**
     * This endpoint prevents a specific username from being able to login to your account.
     *
     * @param string $id The id of the username
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function disallowLoginForASpecificUsername(string $id, array $headerParameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Addy\Api\Endpoint\DisallowLoginForASpecificUsername($id, $headerParameters), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = array(), array $additionalNormalizers = array())
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = array();
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://app.addy.io');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = array(new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Addy\Api\Normalizer\JaneObjectNormalizer());
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, array(new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(array('json_decode_associative' => true)))));
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}