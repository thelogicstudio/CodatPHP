# TheLogicStudio\CodatPHP\TransfersApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdDataTransfersGet()**](TransfersApi.md#companiesCompanyIdConnectionsConnectionIdDataTransfersGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/transfers | Gets the transfers for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdDataTransfersTransferIdGet()**](TransfersApi.md#companiesCompanyIdConnectionsConnectionIdDataTransfersTransferIdGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/transfers/{transferId} | Gets the specified transfer for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdPushTransfersPost()**](TransfersApi.md#companiesCompanyIdConnectionsConnectionIdPushTransfersPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/transfers | Posts a new transfer to the accounting package for a given company. |


## `companiesCompanyIdConnectionsConnectionIdDataTransfersGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataTransfersGet($company_id, $connection_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTransferPagedResponseModel
```

Gets the transfers for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$page = 1; // int
$page_size = 100; // int
$query = 'query_example'; // string
$order_by = 'order_by_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataTransfersGet($company_id, $connection_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->companiesCompanyIdConnectionsConnectionIdDataTransfersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **page** | **int**|  | [default to 1] |
| **page_size** | **int**|  | [optional] [default to 100] |
| **query** | **string**|  | [optional] |
| **order_by** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTransferPagedResponseModel**](../Model/CodatDataContractsDatasetsTransferPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdDataTransfersTransferIdGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataTransfersTransferIdGet($company_id, $connection_id, $transfer_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTransfer
```

Gets the specified transfer for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$transfer_id = 'transfer_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataTransfersTransferIdGet($company_id, $connection_id, $transfer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->companiesCompanyIdConnectionsConnectionIdDataTransfersTransferIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **transfer_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTransfer**](../Model/CodatDataContractsDatasetsTransfer.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdPushTransfersPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushTransfersPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_transfer): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTransferPushOperation
```

Posts a new transfer to the accounting package for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\TransfersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$timeout_in_minutes = 56; // int
$codat_data_contracts_datasets_transfer = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTransfer(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTransfer

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushTransfersPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_transfer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransfersApi->companiesCompanyIdConnectionsConnectionIdPushTransfersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **codat_data_contracts_datasets_transfer** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTransfer**](../Model/CodatDataContractsDatasetsTransfer.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsTransferPushOperation**](../Model/CodatDataContractsDatasetsTransferPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
