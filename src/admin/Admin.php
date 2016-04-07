<?php

namespace mirolabs\dotpay\client\admin;

use Doctrine\Common\Annotations\AnnotationRegistry;

abstract class Admin
{
    /**
     * @var Configuration
     */
    private $configuration;

    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
        $this->client        = new \GuzzleHttp\Client();

        $reflection = new \ReflectionClass('\JMS\Serializer\Annotation\Type');
        $path       = str_replace('/JMS/Serializer/Annotation/Type.php', '', $reflection->getFileName());
        AnnotationRegistry::registerAutoloadNamespace('JMS\Serializer\Annotation', $path);
    }

    public function request($method, $action, $body = null, $query = null)
    {
        return $this->client->request(
                $method, $this->getAddress($action), $this->getOptions($body, $query)
        );
    }

    public function getObject($action, $responseType)
    {
        $content = $this->request('GET', $action)->getBody()->getContents();
        return $this->deserialize($content, $responseType);
    }

    public function getArray($action, $responseType)
    {
        $content = $this->request('GET', $action)->getBody()->getContents();
        return $this->deserialize($content, 'array<'.$responseType.'>');
    }

    public function sendPostByObject($action, $body, $responseType)
    {
        $content = $this->request('POST', $action, $this->serialize($body))->getBody()->getContents();
        return $this->deserialize($content, $responseType);
    }

    public function delete($action)
    {
        $this->request('DELETE', $action);
    }

    /**
     * @param string $action
     * @param int $page
     * @param string $responseType
     */
    public function getPageable($action, $page, $responseType)
    {
        $response = $this->request('GET', $action.'?page='.$page)->getBody()->getContents();
        $pageable = new model\Pageable();
        $jpage    = json_decode($response);
        return $pageable
                ->setCurrent($page)
                ->setCount($jpage->count)
                ->setResult($this->deserialize(json_encode($jpage->results), $responseType));
    }

    /**
     * @param string $action
     * @param int $page
     * @param string $responseType
     */
    public function getQuery($action, array $query, $page, $responseType)
    {
        $query['page'] = $page;
        $response = $this->request('GET', $action, null, $query)->getBody()->getContents();
        $pageable = new model\Pageable();
        $jpage    = json_decode($response);
        return $pageable
                ->setCurrent($page)
                ->setCount($jpage->count)
                ->setResult($this->deserialize(json_encode($jpage->results), $responseType));
    }

    /**
     *
     * @param mixed $content
     * @return string
     */
    private function serialize($content)
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        return $serializer->serialize($content, 'json');
    }

    /**
     *
     * @param string $content
     * @param string $responseType
     * @return mixed
     */
    private function deserialize($content, $responseType)
    {
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        return $serializer->deserialize($content, $responseType, 'json');
    }

    /**
     * @param string $action
     * @return string
     */
    private function getAddress($action)
    {
        return $this->configuration->getUrl().$action;
    }

    /**
     * @param mixed $body
     * @return array
     */
    private function getOptions($body, $query = null)
    {
        $options = [
            'headers' => $this->getHeaders(),
        ];
        if (!is_null($body)) {
            $options['body'] = $body;
        }
        if (!is_null($query)) {
            $options['query'] = $query;
        }
        return$options;
    }

    /**
     * @return array
     */
    private function getHeaders()
    {
        return [
            'Accept' => 'application/json',
            'Authorization' => $this->configuration->getBasicAuthorization(),
            'Content-Type' => 'application/json'
        ];
    }
}