<?php

namespace Addy\Api\Endpoint;

class GetAllAliases extends \Addy\Api\Runtime\Client\BaseEndpoint implements \Addy\Api\Runtime\Client\Endpoint
{
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
     */
    public function __construct(array $queryParameters = array(), array $headerParameters = array())
    {
        $this->queryParameters = $queryParameters;
        $this->headerParameters = $headerParameters;
    }
    use \Addy\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/api/v1/aliases';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('filter[deleted]', 'filter[active]', 'filter[search]', 'sort', 'page[number]', 'page[size]', 'with'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('filter[deleted]', array('string'));
        $optionsResolver->addAllowedTypes('filter[active]', array('string'));
        $optionsResolver->addAllowedTypes('filter[search]', array('string'));
        $optionsResolver->addAllowedTypes('sort', array('string'));
        $optionsResolver->addAllowedTypes('page[number]', array('int'));
        $optionsResolver->addAllowedTypes('page[size]', array('int'));
        $optionsResolver->addAllowedTypes('with', array('string'));
        return $optionsResolver;
    }
    protected function getHeadersOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(array('X-Requested-With'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->addAllowedTypes('X-Requested-With', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Addy\Api\Model\ApiV1AliasesGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Addy\\Api\\Model\\ApiV1AliasesGetResponse200', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('default');
    }
}