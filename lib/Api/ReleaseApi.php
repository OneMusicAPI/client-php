<?php
/**
 * ReleaseApi
 * PHP version 5
 *
 * @category Class
 * @package  OneMusicAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OneMusicAPI
 *
 * OneMusicAPI is a low cost music metadata API
 *
 * The version of the OpenAPI document: 0.0.0
 * Contact: dan@elstensoftware.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OneMusicAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OneMusicAPI\Client\ApiException;
use OneMusicAPI\Client\Configuration;
use OneMusicAPI\Client\HeaderSelector;
use OneMusicAPI\Client\ObjectSerializer;

/**
 * ReleaseApi Class Doc Comment
 *
 * @category Class
 * @package  OneMusicAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReleaseApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation release
     *
     * @param  string $user_key Your API key. (required)
     * @param  string $inc inc (optional)
     * @param  string $must_inc must_inc (optional)
     * @param  int $max_result_count max_result_count (optional)
     * @param  float $min_certainty min_certainty (optional)
     * @param  int $min_image_score min_image_score (optional)
     * @param  int $min_image_width min_image_width (optional)
     * @param  int $min_image_height min_image_height (optional)
     * @param  int $max_image_width max_image_width (optional)
     * @param  int $max_image_height max_image_height (optional)
     * @param  string $title The title of the release. (optional)
     * @param  string $artist The name of the artist for the release. (optional)
     * @param  string $barcode The barcode for the release. (optional)
     *
     * @throws \OneMusicAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OneMusicAPI\Client\Model\Release[]
     */
    public function release($user_key, $inc = null, $must_inc = null, $max_result_count = null, $min_certainty = null, $min_image_score = null, $min_image_width = null, $min_image_height = null, $max_image_width = null, $max_image_height = null, $title = null, $artist = null, $barcode = null)
    {
        list($response) = $this->releaseWithHttpInfo($user_key, $inc, $must_inc, $max_result_count, $min_certainty, $min_image_score, $min_image_width, $min_image_height, $max_image_width, $max_image_height, $title, $artist, $barcode);
        return $response;
    }

    /**
     * Operation releaseWithHttpInfo
     *
     * @param  string $user_key Your API key. (required)
     * @param  string $inc (optional)
     * @param  string $must_inc (optional)
     * @param  int $max_result_count (optional)
     * @param  float $min_certainty (optional)
     * @param  int $min_image_score (optional)
     * @param  int $min_image_width (optional)
     * @param  int $min_image_height (optional)
     * @param  int $max_image_width (optional)
     * @param  int $max_image_height (optional)
     * @param  string $title The title of the release. (optional)
     * @param  string $artist The name of the artist for the release. (optional)
     * @param  string $barcode The barcode for the release. (optional)
     *
     * @throws \OneMusicAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OneMusicAPI\Client\Model\Release[], HTTP status code, HTTP response headers (array of strings)
     */
    public function releaseWithHttpInfo($user_key, $inc = null, $must_inc = null, $max_result_count = null, $min_certainty = null, $min_image_score = null, $min_image_width = null, $min_image_height = null, $max_image_width = null, $max_image_height = null, $title = null, $artist = null, $barcode = null)
    {
        $request = $this->releaseRequest($user_key, $inc, $must_inc, $max_result_count, $min_certainty, $min_image_score, $min_image_width, $min_image_height, $max_image_width, $max_image_height, $title, $artist, $barcode);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\OneMusicAPI\Client\Model\Release[]' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OneMusicAPI\Client\Model\Release[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OneMusicAPI\Client\Model\Release[]';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OneMusicAPI\Client\Model\Release[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation releaseAsync
     *
     * 
     *
     * @param  string $user_key Your API key. (required)
     * @param  string $inc (optional)
     * @param  string $must_inc (optional)
     * @param  int $max_result_count (optional)
     * @param  float $min_certainty (optional)
     * @param  int $min_image_score (optional)
     * @param  int $min_image_width (optional)
     * @param  int $min_image_height (optional)
     * @param  int $max_image_width (optional)
     * @param  int $max_image_height (optional)
     * @param  string $title The title of the release. (optional)
     * @param  string $artist The name of the artist for the release. (optional)
     * @param  string $barcode The barcode for the release. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function releaseAsync($user_key, $inc = null, $must_inc = null, $max_result_count = null, $min_certainty = null, $min_image_score = null, $min_image_width = null, $min_image_height = null, $max_image_width = null, $max_image_height = null, $title = null, $artist = null, $barcode = null)
    {
        return $this->releaseAsyncWithHttpInfo($user_key, $inc, $must_inc, $max_result_count, $min_certainty, $min_image_score, $min_image_width, $min_image_height, $max_image_width, $max_image_height, $title, $artist, $barcode)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation releaseAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $user_key Your API key. (required)
     * @param  string $inc (optional)
     * @param  string $must_inc (optional)
     * @param  int $max_result_count (optional)
     * @param  float $min_certainty (optional)
     * @param  int $min_image_score (optional)
     * @param  int $min_image_width (optional)
     * @param  int $min_image_height (optional)
     * @param  int $max_image_width (optional)
     * @param  int $max_image_height (optional)
     * @param  string $title The title of the release. (optional)
     * @param  string $artist The name of the artist for the release. (optional)
     * @param  string $barcode The barcode for the release. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function releaseAsyncWithHttpInfo($user_key, $inc = null, $must_inc = null, $max_result_count = null, $min_certainty = null, $min_image_score = null, $min_image_width = null, $min_image_height = null, $max_image_width = null, $max_image_height = null, $title = null, $artist = null, $barcode = null)
    {
        $returnType = '\OneMusicAPI\Client\Model\Release[]';
        $request = $this->releaseRequest($user_key, $inc, $must_inc, $max_result_count, $min_certainty, $min_image_score, $min_image_width, $min_image_height, $max_image_width, $max_image_height, $title, $artist, $barcode);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'release'
     *
     * @param  string $user_key Your API key. (required)
     * @param  string $inc (optional)
     * @param  string $must_inc (optional)
     * @param  int $max_result_count (optional)
     * @param  float $min_certainty (optional)
     * @param  int $min_image_score (optional)
     * @param  int $min_image_width (optional)
     * @param  int $min_image_height (optional)
     * @param  int $max_image_width (optional)
     * @param  int $max_image_height (optional)
     * @param  string $title The title of the release. (optional)
     * @param  string $artist The name of the artist for the release. (optional)
     * @param  string $barcode The barcode for the release. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function releaseRequest($user_key, $inc = null, $must_inc = null, $max_result_count = null, $min_certainty = null, $min_image_score = null, $min_image_width = null, $min_image_height = null, $max_image_width = null, $max_image_height = null, $title = null, $artist = null, $barcode = null)
    {
        // verify the required parameter 'user_key' is set
        if ($user_key === null || (is_array($user_key) && count($user_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_key when calling release'
            );
        }

        $resourcePath = '/20190716/release';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($user_key !== null) {
            if('form' === 'form' && is_array($user_key)) {
                foreach($user_key as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['user_key'] = $user_key;
            }
        }
        // query params
        if ($inc !== null) {
            if('form' === 'form' && is_array($inc)) {
                foreach($inc as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['inc'] = $inc;
            }
        }
        // query params
        if ($must_inc !== null) {
            if('form' === 'form' && is_array($must_inc)) {
                foreach($must_inc as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['mustInc'] = $must_inc;
            }
        }
        // query params
        if ($max_result_count !== null) {
            if('form' === 'form' && is_array($max_result_count)) {
                foreach($max_result_count as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['maxResultCount'] = $max_result_count;
            }
        }
        // query params
        if ($min_certainty !== null) {
            if('form' === 'form' && is_array($min_certainty)) {
                foreach($min_certainty as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['minCertainty'] = $min_certainty;
            }
        }
        // query params
        if ($min_image_score !== null) {
            if('form' === 'form' && is_array($min_image_score)) {
                foreach($min_image_score as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['minImageScore'] = $min_image_score;
            }
        }
        // query params
        if ($min_image_width !== null) {
            if('form' === 'form' && is_array($min_image_width)) {
                foreach($min_image_width as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['minImageWidth'] = $min_image_width;
            }
        }
        // query params
        if ($min_image_height !== null) {
            if('form' === 'form' && is_array($min_image_height)) {
                foreach($min_image_height as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['minImageHeight'] = $min_image_height;
            }
        }
        // query params
        if ($max_image_width !== null) {
            if('form' === 'form' && is_array($max_image_width)) {
                foreach($max_image_width as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['maxImageWidth'] = $max_image_width;
            }
        }
        // query params
        if ($max_image_height !== null) {
            if('form' === 'form' && is_array($max_image_height)) {
                foreach($max_image_height as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['maxImageHeight'] = $max_image_height;
            }
        }
        // query params
        if ($title !== null) {
            if('form' === 'form' && is_array($title)) {
                foreach($title as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['title'] = $title;
            }
        }
        // query params
        if ($artist !== null) {
            if('form' === 'form' && is_array($artist)) {
                foreach($artist as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['artist'] = $artist;
            }
        }
        // query params
        if ($barcode !== null) {
            if('form' === 'form' && is_array($barcode)) {
                foreach($barcode as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['barcode'] = $barcode;
            }
        }



        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
