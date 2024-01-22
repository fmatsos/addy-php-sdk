<?php

namespace Addy\Api\Endpoint;

class DisableProtectedHeadershideSubjectForASpecificRecipient extends \Addy\Api\Runtime\Client\BaseEndpoint implements \Addy\Api\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * This endpoint disables protected headers for a specific recipient.
     *
     * @param string $id The id of the recipient to disable protected headers for
     * @param array $headerParameters {
     *     @var string $X-Requested-With 
     * }
     */
    public function __construct(string $id, array $headerParameters = array())
    {
        $this->id = $id;
        $this->headerParameters = $headerParameters;
    }
    use \Addy\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/api/v1/protected-headers-recipients/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
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
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (204 === $status) {
            return null;
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('default');
    }
}