<?php
/**
 * TaxRatesApi
 * PHP version 7.4
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Codat API
 *
 * [See our API changes](https://docs.codat.io/changelog)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TheLogicStudio\CodatPHP\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use TheLogicStudio\CodatPHP\ApiException;
use TheLogicStudio\CodatPHP\Configuration;
use TheLogicStudio\CodatPHP\HeaderSelector;
use TheLogicStudio\CodatPHP\ObjectSerializer;

/**
 * TaxRatesApi Class Doc Comment
 *
 * @category Class
 * @package  TheLogicStudio\CodatPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaxRatesApi
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

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'companiesCompanyIdDataTaxRatesGet' => [
            'application/json',
        ],
        'companiesCompanyIdDataTaxRatesTaxRateIdGet' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
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
     * Operation companiesCompanyIdDataTaxRatesGet
     *
     * Gets the latest tax rates for a given company.
     *
     * @param  string $company_id company_id (required)
     * @param  int $page page (required)
     * @param  int $page_size page_size (optional, default to 100)
     * @param  string $query query (optional)
     * @param  string $order_by order_by (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companiesCompanyIdDataTaxRatesGet'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\CodatPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRatePagedResponseModel
     */
    public function companiesCompanyIdDataTaxRatesGet($company_id, $page, $page_size = 100, $query = null, $order_by = null, string $contentType = self::contentTypes['companiesCompanyIdDataTaxRatesGet'][0])
    {
        list($response) = $this->companiesCompanyIdDataTaxRatesGetWithHttpInfo($company_id, $page, $page_size, $query, $order_by, $contentType);
        return $response;
    }

    /**
     * Operation companiesCompanyIdDataTaxRatesGetWithHttpInfo
     *
     * Gets the latest tax rates for a given company.
     *
     * @param  string $company_id (required)
     * @param  int $page (required)
     * @param  int $page_size (optional, default to 100)
     * @param  string $query (optional)
     * @param  string $order_by (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companiesCompanyIdDataTaxRatesGet'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\CodatPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRatePagedResponseModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function companiesCompanyIdDataTaxRatesGetWithHttpInfo($company_id, $page, $page_size = 100, $query = null, $order_by = null, string $contentType = self::contentTypes['companiesCompanyIdDataTaxRatesGet'][0])
    {
        $request = $this->companiesCompanyIdDataTaxRatesGetRequest($company_id, $page, $page_size, $query, $order_by, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRatePagedResponseModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRatePagedResponseModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRatePagedResponseModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRatePagedResponseModel';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRatePagedResponseModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation companiesCompanyIdDataTaxRatesGetAsync
     *
     * Gets the latest tax rates for a given company.
     *
     * @param  string $company_id (required)
     * @param  int $page (required)
     * @param  int $page_size (optional, default to 100)
     * @param  string $query (optional)
     * @param  string $order_by (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companiesCompanyIdDataTaxRatesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companiesCompanyIdDataTaxRatesGetAsync($company_id, $page, $page_size = 100, $query = null, $order_by = null, string $contentType = self::contentTypes['companiesCompanyIdDataTaxRatesGet'][0])
    {
        return $this->companiesCompanyIdDataTaxRatesGetAsyncWithHttpInfo($company_id, $page, $page_size, $query, $order_by, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companiesCompanyIdDataTaxRatesGetAsyncWithHttpInfo
     *
     * Gets the latest tax rates for a given company.
     *
     * @param  string $company_id (required)
     * @param  int $page (required)
     * @param  int $page_size (optional, default to 100)
     * @param  string $query (optional)
     * @param  string $order_by (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companiesCompanyIdDataTaxRatesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companiesCompanyIdDataTaxRatesGetAsyncWithHttpInfo($company_id, $page, $page_size = 100, $query = null, $order_by = null, string $contentType = self::contentTypes['companiesCompanyIdDataTaxRatesGet'][0])
    {
        $returnType = '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRatePagedResponseModel';
        $request = $this->companiesCompanyIdDataTaxRatesGetRequest($company_id, $page, $page_size, $query, $order_by, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'companiesCompanyIdDataTaxRatesGet'
     *
     * @param  string $company_id (required)
     * @param  int $page (required)
     * @param  int $page_size (optional, default to 100)
     * @param  string $query (optional)
     * @param  string $order_by (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companiesCompanyIdDataTaxRatesGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companiesCompanyIdDataTaxRatesGetRequest($company_id, $page, $page_size = 100, $query = null, $order_by = null, string $contentType = self::contentTypes['companiesCompanyIdDataTaxRatesGet'][0])
    {

        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling companiesCompanyIdDataTaxRatesGet'
            );
        }

        // verify the required parameter 'page' is set
        if ($page === null || (is_array($page) && count($page) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $page when calling companiesCompanyIdDataTaxRatesGet'
            );
        }





        $resourcePath = '/companies/{companyId}/data/taxRates';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page_size,
            'pageSize', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $query,
            'query', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $order_by,
            'orderBy', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);


        // path params
        if ($company_id !== null) {
            $resourcePath = str_replace(
                '{' . 'companyId' . '}',
                ObjectSerializer::toPathValue($company_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation companiesCompanyIdDataTaxRatesTaxRateIdGet
     *
     * Gets the specified tax rate for a given company.
     *
     * @param  string $company_id company_id (required)
     * @param  string $tax_rate_id tax_rate_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companiesCompanyIdDataTaxRatesTaxRateIdGet'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\CodatPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRate
     */
    public function companiesCompanyIdDataTaxRatesTaxRateIdGet($company_id, $tax_rate_id, string $contentType = self::contentTypes['companiesCompanyIdDataTaxRatesTaxRateIdGet'][0])
    {
        list($response) = $this->companiesCompanyIdDataTaxRatesTaxRateIdGetWithHttpInfo($company_id, $tax_rate_id, $contentType);
        return $response;
    }

    /**
     * Operation companiesCompanyIdDataTaxRatesTaxRateIdGetWithHttpInfo
     *
     * Gets the specified tax rate for a given company.
     *
     * @param  string $company_id (required)
     * @param  string $tax_rate_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companiesCompanyIdDataTaxRatesTaxRateIdGet'] to see the possible values for this operation
     *
     * @throws \TheLogicStudio\CodatPHP\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRate, HTTP status code, HTTP response headers (array of strings)
     */
    public function companiesCompanyIdDataTaxRatesTaxRateIdGetWithHttpInfo($company_id, $tax_rate_id, string $contentType = self::contentTypes['companiesCompanyIdDataTaxRatesTaxRateIdGet'][0])
    {
        $request = $this->companiesCompanyIdDataTaxRatesTaxRateIdGetRequest($company_id, $tax_rate_id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRate' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRate' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRate', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRate';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRate',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation companiesCompanyIdDataTaxRatesTaxRateIdGetAsync
     *
     * Gets the specified tax rate for a given company.
     *
     * @param  string $company_id (required)
     * @param  string $tax_rate_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companiesCompanyIdDataTaxRatesTaxRateIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companiesCompanyIdDataTaxRatesTaxRateIdGetAsync($company_id, $tax_rate_id, string $contentType = self::contentTypes['companiesCompanyIdDataTaxRatesTaxRateIdGet'][0])
    {
        return $this->companiesCompanyIdDataTaxRatesTaxRateIdGetAsyncWithHttpInfo($company_id, $tax_rate_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation companiesCompanyIdDataTaxRatesTaxRateIdGetAsyncWithHttpInfo
     *
     * Gets the specified tax rate for a given company.
     *
     * @param  string $company_id (required)
     * @param  string $tax_rate_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companiesCompanyIdDataTaxRatesTaxRateIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function companiesCompanyIdDataTaxRatesTaxRateIdGetAsyncWithHttpInfo($company_id, $tax_rate_id, string $contentType = self::contentTypes['companiesCompanyIdDataTaxRatesTaxRateIdGet'][0])
    {
        $returnType = '\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTaxRate';
        $request = $this->companiesCompanyIdDataTaxRatesTaxRateIdGetRequest($company_id, $tax_rate_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'companiesCompanyIdDataTaxRatesTaxRateIdGet'
     *
     * @param  string $company_id (required)
     * @param  string $tax_rate_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['companiesCompanyIdDataTaxRatesTaxRateIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function companiesCompanyIdDataTaxRatesTaxRateIdGetRequest($company_id, $tax_rate_id, string $contentType = self::contentTypes['companiesCompanyIdDataTaxRatesTaxRateIdGet'][0])
    {

        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling companiesCompanyIdDataTaxRatesTaxRateIdGet'
            );
        }

        // verify the required parameter 'tax_rate_id' is set
        if ($tax_rate_id === null || (is_array($tax_rate_id) && count($tax_rate_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $tax_rate_id when calling companiesCompanyIdDataTaxRatesTaxRateIdGet'
            );
        }


        $resourcePath = '/companies/{companyId}/data/taxRates/{taxRateId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($company_id !== null) {
            $resourcePath = str_replace(
                '{' . 'companyId' . '}',
                ObjectSerializer::toPathValue($company_id),
                $resourcePath
            );
        }
        // path params
        if ($tax_rate_id !== null) {
            $resourcePath = str_replace(
                '{' . 'taxRateId' . '}',
                ObjectSerializer::toPathValue($tax_rate_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
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
