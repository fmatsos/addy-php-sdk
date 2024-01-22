<?php

namespace Addy\Api\Endpoint;

class AllowLoginForASpecificUsername extends \Addy\Api\Runtime\Client\BaseEndpoint implements \Addy\Api\Runtime\Client\Endpoint
{
    /**
     * This endpoint gives a specific username the ability to login to your account.
     *
     * @param null|\Addy\Api\Model\ApiV1LoginableUsernamesPostBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     */
    public function __construct(?\Addy\Api\Model\ApiV1LoginableUsernamesPostBody $requestBody = null, array $headerParameters = array())
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \Addy\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/api/v1/loginable-usernames';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Addy\Api\Model\ApiV1LoginableUsernamesPostBody) {
            return array(array('Content-Type' => array('application/json')), $serializer->serialize($this->body, 'json'));
        }
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
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
     * @return null|\Addy\Api\Model\ApiV1LoginableUsernamesPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Addy\\Api\\Model\\ApiV1LoginableUsernamesPostResponse200', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('default');
    }
}