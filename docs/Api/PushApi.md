# TheLogicStudio\CodatPHP\PushApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdOptionsDataTypeGet()**](PushApi.md#companiesCompanyIdConnectionsConnectionIdOptionsDataTypeGet) | **GET** /companies/{companyId}/connections/{connectionId}/options/{dataType} | Gets the push options for the given data type |
| [**companiesCompanyIdPushGet()**](PushApi.md#companiesCompanyIdPushGet) | **GET** /companies/{companyId}/push | Gets paged push operation records |
| [**companiesCompanyIdPushPushOperationKeyGet()**](PushApi.md#companiesCompanyIdPushPushOperationKeyGet) | **GET** /companies/{companyId}/push/{pushOperationKey} | Gets a single push operation record |


## `companiesCompanyIdConnectionsConnectionIdOptionsDataTypeGet()`

```php
companiesCompanyIdConnectionsConnectionIdOptionsDataTypeGet($company_id, $connection_id, $data_type): \TheLogicStudio\CodatPHP\Model\CodatDataContractsPushPushOption
```

Gets the push options for the given data type

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$data_type = 'data_type_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdOptionsDataTypeGet($company_id, $connection_id, $data_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->companiesCompanyIdConnectionsConnectionIdOptionsDataTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **data_type** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsPushPushOption**](../Model/CodatDataContractsPushPushOption.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdPushGet()`

```php
companiesCompanyIdPushGet($company_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\SystemObjectPushOperationPagedResponseModel
```

Gets paged push operation records

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | Company Id
$page = 56; // int | Page
$page_size = 100; // int | Page size
$query = 'query_example'; // string | Data query
$order_by = 'order_by_example'; // string | Order by property (ascending)

try {
    $result = $apiInstance->companiesCompanyIdPushGet($company_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->companiesCompanyIdPushGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| Company Id | |
| **page** | **int**| Page | |
| **page_size** | **int**| Page size | [optional] [default to 100] |
| **query** | **string**| Data query | [optional] |
| **order_by** | **string**| Order by property (ascending) | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\SystemObjectPushOperationPagedResponseModel**](../Model/SystemObjectPushOperationPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdPushPushOperationKeyGet()`

```php
companiesCompanyIdPushPushOperationKeyGet($company_id, $push_operation_key): \TheLogicStudio\CodatPHP\Model\SystemObjectPushOperation
```

Gets a single push operation record

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\PushApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | 
$push_operation_key = 'push_operation_key_example'; // string | 

try {
    $result = $apiInstance->companiesCompanyIdPushPushOperationKeyGet($company_id, $push_operation_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PushApi->companiesCompanyIdPushPushOperationKeyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **push_operation_key** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\SystemObjectPushOperation**](../Model/SystemObjectPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
