<?php

namespace sharkom\NordigenPHP\Http;

use GuzzleHttp\Exception\BadResponseException;
use sharkom\NordigenPHP\Exceptions\ExceptionHandler;
use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\ClientInterface;

trait RequestHandlerTrait
{
    protected $httpClient;
    protected $baseUri;

    public function get(string $uri, array $options = []): ResponseInterface
    {
        try {
            $response = $this->httpClient->get($uri, $options);
            return $response;
        } catch (BadResponseException $exc) {
            ExceptionHandler::handleException($exc->getResponse());
        }
    }

    public function post(string $uri, array $options = []): ResponseInterface
    {
        try {
            $response = $this->httpClient->post($uri, $options);
            return $response;
        } catch (BadResponseException $exc) {
            ExceptionHandler::handleException($exc->getResponse());
        }
    }

    public function put(string $uri, array $options = []): ResponseInterface
    {
        try {
            $response = $this->httpClient->put($uri, $options);
            return $response;
        } catch (BadResponseException $exc) {
            ExceptionHandler::handleException($exc->getResponse());
        }
    }

    public function delete(string $uri, array $options = []): ResponseInterface
    {
        try {
            $response = $this->httpClient->delete($uri, $options);
            return $response;
        } catch (BadResponseException $exc) {
            ExceptionHandler::handleException($exc->getResponse());
        }
    }
}
