<?php

namespace Addy\Api\Endpoint;

class AddPublicKeyForASpecificRecipient extends \Addy\Api\Runtime\Client\BaseEndpoint implements \Addy\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint adds a public GPG/OpenPGP key for a specific recipient. Make sure to escape the json using something like - https://jsonformatter.org/json-escape
     *
     * @param string $id The id of the recipient to add the key for
     * @param null|\Addy\Api\Model\ApiV1RecipientKeysIdPatchBody $requestBody 
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     */
    public function __construct(string $id, ?\Addy\Api\Model\ApiV1RecipientKeysIdPatchBody $requestBody = null, array $headerParameters = array())
    {
        $this->id = $id;
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \Addy\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PATCH';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/api/v1/recipient-keys/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Addy\Api\Model\ApiV1RecipientKeysIdPatchBody) {
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
     * @return null|\Addy\Api\Model\ApiV1RecipientKeysIdPatchResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Addy\\Api\\Model\\ApiV1RecipientKeysIdPatchResponse200', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('default');
    }
}