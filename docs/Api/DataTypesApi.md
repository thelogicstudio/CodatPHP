# TheLogicStudio\CodatPHP\DataTypesApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsGet()**](DataTypesApi.md#companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsGet) | **GET** /companies/{companyId}/connections/{connectionId}/dataTypes/{dataType}/options | Gets all available push options for the given data type |
| [**companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPOSTGet()**](DataTypesApi.md#companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPOSTGet) | **GET** /companies/{companyId}/connections/{connectionId}/dataTypes/{dataType}/options/POST | Gets the POST push options for the given data type |
| [**companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPUTGet()**](DataTypesApi.md#companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPUTGet) | **GET** /companies/{companyId}/connections/{connectionId}/dataTypes/{dataType}/options/PUT | Gets the PUT push options for the given data type |


## `companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsGet($company_id, $connection_id, $data_type): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataPushOptionsAggregate
```

Gets all available push options for the given data type

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DataTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$data_type = 'data_type_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsGet($company_id, $connection_id, $data_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTypesApi->companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **data_type** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataPushOptionsAggregate**](../Model/CodatPublicApiModelsDataPushOptionsAggregate.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPOSTGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPOSTGet($company_id, $connection_id, $data_type): \TheLogicStudio\CodatPHP\Model\CodatDataContractsPushPushOption
```

Gets the POST push options for the given data type

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DataTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$data_type = 'data_type_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPOSTGet($company_id, $connection_id, $data_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTypesApi->companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPOSTGet: ', $e->getMessage(), PHP_EOL;
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

## `companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPUTGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPUTGet($company_id, $connection_id, $data_type): \TheLogicStudio\CodatPHP\Model\CodatDataContractsPushPushOption
```

Gets the PUT push options for the given data type

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DataTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$data_type = 'data_type_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPUTGet($company_id, $connection_id, $data_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTypesApi->companiesCompanyIdConnectionsConnectionIdDataTypesDataTypeOptionsPUTGet: ', $e->getMessage(), PHP_EOL;
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
