# TheLogicStudio\CodatPHP\DataApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdDataAllPost()**](DataApi.md#companiesCompanyIdDataAllPost) | **POST** /companies/{companyId}/data/all | Initiates the process of capturing a new data snapshot for a company |
| [**companiesCompanyIdDataHistoryDatasetIdGet()**](DataApi.md#companiesCompanyIdDataHistoryDatasetIdGet) | **GET** /companies/{companyId}/data/history/{datasetId} | Fetch metadata on a single data synchronisation |
| [**companiesCompanyIdDataHistoryGet()**](DataApi.md#companiesCompanyIdDataHistoryGet) | **GET** /companies/{companyId}/data/history | Fetch a list of all data snapshots captured for a company |
| [**companiesCompanyIdDataQueueDataTypePost()**](DataApi.md#companiesCompanyIdDataQueueDataTypePost) | **POST** /companies/{companyId}/data/queue/{dataType} | Initiates the process of capturing a data snapshot of a specified type for a company |


## `companiesCompanyIdDataAllPost()`

```php
companiesCompanyIdDataAllPost($company_id)
```

Initiates the process of capturing a new data snapshot for a company

Initiates the synchronisation for all possible data types supported by the linked data sources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $apiInstance->companiesCompanyIdDataAllPost($company_id);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->companiesCompanyIdDataAllPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataHistoryDatasetIdGet()`

```php
companiesCompanyIdDataHistoryDatasetIdGet($company_id, $dataset_id): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataDataSet
```

Fetch metadata on a single data synchronisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$dataset_id = 'dataset_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataHistoryDatasetIdGet($company_id, $dataset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->companiesCompanyIdDataHistoryDatasetIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **dataset_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataDataSet**](../Model/CodatPublicApiModelsDataDataSet.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataHistoryGet()`

```php
companiesCompanyIdDataHistoryGet($company_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataDataSetPagedResponseModel
```

Fetch a list of all data snapshots captured for a company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$page = 1; // int
$page_size = 100; // int
$query = 'query_example'; // string
$order_by = 'order_by_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataHistoryGet($company_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->companiesCompanyIdDataHistoryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **page** | **int**|  | [default to 1] |
| **page_size** | **int**|  | [optional] [default to 100] |
| **query** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataDataSetPagedResponseModel**](../Model/CodatPublicApiModelsDataDataSetPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataQueueDataTypePost()`

```php
companiesCompanyIdDataQueueDataTypePost($company_id, $data_type, $connection_id): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataDataSet
```

Initiates the process of capturing a data snapshot of a specified type for a company

Initiates the synchronisation for a specified data type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: CodatLogin
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: APIKeyAuth
$config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = TheLogicStudio\CodatPHP\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new TheLogicStudio\CodatPHP\Api\DataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$data_type = 'data_type_example'; // string
$connection_id = 'connection_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataQueueDataTypePost($company_id, $data_type, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataApi->companiesCompanyIdDataQueueDataTypePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **data_type** | **string**|  | |
| **connection_id** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataDataSet**](../Model/CodatPublicApiModelsDataDataSet.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
