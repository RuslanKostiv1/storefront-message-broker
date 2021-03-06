<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\MessageBroker\HttpClient;

use Magento\Framework\App\DeploymentConfig;
use Magento\Framework\Serialize\Serializer\Json;
use Psr\Log\LoggerInterface;

/**
 * Client for invoking REST API
 */
class RestClient
{
    const BACKOFFICE_URL_WEB_PATH = 'system/default/backoffice/web/base_url';
    /**
     * @var string REST URL base path
     */
    private $restBasePath = '/rest/';

    /**
     * @var CurlClient
     */
    private $curlClient;

    /**
     * @var Json
     */
    private $jsonSerializer;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var DeploymentConfig
     */
    private $deploymentConfig;

    /**
     * @param CurlClient $curlClient
     * @param Json $jsonSerializer
     * @param DeploymentConfig $deploymentConfig
     * @param LoggerInterface $logger
     */
    public function __construct(
        CurlClient $curlClient,
        Json $jsonSerializer,
        DeploymentConfig $deploymentConfig,
        LoggerInterface $logger
    ) {
        $this->curlClient = $curlClient;
        $this->jsonSerializer = $jsonSerializer;
        $this->logger = $logger;
        $this->deploymentConfig = $deploymentConfig;
    }

    /**
     * Perform HTTP GET request
     *
     * @param string $resourcePath Resource URL like /V1/Resource1/123
     * @param array $data
     * @param array $headers
     * @return array
     * @throws \Throwable
     */
    public function get($resourcePath, $data = [], $headers = [])
    {
        $url = $this->constructResourceUrl($resourcePath);
        if (!empty($data)) {
            $url .= '?' . http_build_query($data);
        }

        try {
            $responseBody = $this->curlClient->get($url, $data, $headers);
            return !empty($responseBody['body']) ? $this->jsonSerializer->unserialize($responseBody['body']) : [];
        } catch (\Throwable $e) {
            $this->logger->error(
                \sprintf(
                    'Error during REST call to Export API: url: %s, response: %s, response_code: %s',
                    $url,
                    $responseBody['body'] ?? '',
                    $responseBody['http_code'] ?? ''
                ),
                ['exception' => $e]
            );
            throw $e;
        }
    }

    /**
     * Construct given resource url
     *
     * @param string $resourcePath Resource URL like /V1/Resource1/123
     * @return string resource URL
     */
    private function constructResourceUrl($resourcePath): string
    {
        $storefrontAppHost = $this->deploymentConfig->get(
            self::BACKOFFICE_URL_WEB_PATH
        );
        //Fallback for url in case of monolithic installation
        if (empty($storefrontAppHost)) {
            $storefrontAppHost = $this->resolveDefaultMagentoUrl();
        }

        return rtrim($storefrontAppHost, '/') . $this->restBasePath . ltrim($resourcePath, '/');
    }

    /**
     * For Monolithic installation return default url from phpunit_rest.xml const if present of return "localhost"
     *
     * @return string
     */
    private function resolveDefaultMagentoUrl()
    {
        return defined('TESTS_BASE_URL') ? TESTS_BASE_URL : 'localhost';
    }
}
