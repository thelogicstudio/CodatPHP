# TheLogicStudio\CodatPHP\DirectCostsApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdDownloadGet()**](DirectCostsApi.md#companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdDownloadGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/directCosts/{directCostId}/attachments/{attachmentId}/download | Downloads an attachment for the specified direct cost for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdGet()**](DirectCostsApi.md#companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/directCosts/{directCostId}/attachments/{attachmentId} | Gets the specified direct cost attachment for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsGet()**](DirectCostsApi.md#companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/directCosts/{directCostId}/attachments | Gets all attachments for the specified direct cost for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdGet()**](DirectCostsApi.md#companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/directCosts/{directCostId} | Gets the specified direct cost for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdDataDirectCostsGet()**](DirectCostsApi.md#companiesCompanyIdConnectionsConnectionIdDataDirectCostsGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/directCosts | Gets the direct costs for the company. |
| [**companiesCompanyIdConnectionsConnectionIdPushDirectCostsDirectCostIdAttachmentPost()**](DirectCostsApi.md#companiesCompanyIdConnectionsConnectionIdPushDirectCostsDirectCostIdAttachmentPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/directCosts/{directCostId}/attachment | Posts a new direct cost attachment for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdPushDirectCostsPost()**](DirectCostsApi.md#companiesCompanyIdConnectionsConnectionIdPushDirectCostsPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/directCosts | Posts a new direct cost to the accounting package for a given company. |


## `companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdDownloadGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdDownloadGet($company_id, $connection_id, $direct_cost_id, $attachment_id)
```

Downloads an attachment for the specified direct cost for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectCostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$direct_cost_id = 'direct_cost_id_example'; // string
$attachment_id = 'attachment_id_example'; // string

try {
    $apiInstance->companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdDownloadGet($company_id, $connection_id, $direct_cost_id, $attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling DirectCostsApi->companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **direct_cost_id** | **string**|  | |
| **attachment_id** | **string**|  | |

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

## `companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdGet($company_id, $connection_id, $direct_cost_id, $attachment_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAttachmentsDatasetAttachment
```

Gets the specified direct cost attachment for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectCostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$direct_cost_id = 'direct_cost_id_example'; // string
$attachment_id = 'attachment_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdGet($company_id, $connection_id, $direct_cost_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectCostsApi->companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsAttachmentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **direct_cost_id** | **string**|  | |
| **attachment_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAttachmentsDatasetAttachment**](../Model/CodatDataContractsDatasetsAttachmentsDatasetAttachment.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsGet($company_id, $connection_id, $direct_cost_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAttachmentsDataset
```

Gets all attachments for the specified direct cost for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectCostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$direct_cost_id = 'direct_cost_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsGet($company_id, $connection_id, $direct_cost_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectCostsApi->companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **direct_cost_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAttachmentsDataset**](../Model/CodatDataContractsDatasetsAttachmentsDataset.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdGet($company_id, $direct_cost_id, $connection_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectCost
```

Gets the specified direct cost for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectCostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$direct_cost_id = 'direct_cost_id_example'; // string
$connection_id = 'connection_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdGet($company_id, $direct_cost_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectCostsApi->companiesCompanyIdConnectionsConnectionIdDataDirectCostsDirectCostIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **direct_cost_id** | **string**|  | |
| **connection_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectCost**](../Model/CodatDataContractsDatasetsDirectCost.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdDataDirectCostsGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataDirectCostsGet($company_id, $connection_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectCostPagedResponseModel
```

Gets the direct costs for the company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectCostsApi(
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
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataDirectCostsGet($company_id, $connection_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectCostsApi->companiesCompanyIdConnectionsConnectionIdDataDirectCostsGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectCostPagedResponseModel**](../Model/CodatDataContractsDatasetsDirectCostPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdPushDirectCostsDirectCostIdAttachmentPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushDirectCostsDirectCostIdAttachmentPost($company_id, $connection_id, $direct_cost_id)
```

Posts a new direct cost attachment for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectCostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$direct_cost_id = 'direct_cost_id_example'; // string

try {
    $apiInstance->companiesCompanyIdConnectionsConnectionIdPushDirectCostsDirectCostIdAttachmentPost($company_id, $connection_id, $direct_cost_id);
} catch (Exception $e) {
    echo 'Exception when calling DirectCostsApi->companiesCompanyIdConnectionsConnectionIdPushDirectCostsDirectCostIdAttachmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **direct_cost_id** | **string**|  | |

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

## `companiesCompanyIdConnectionsConnectionIdPushDirectCostsPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushDirectCostsPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_direct_cost): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectCostPushOperation
```

Posts a new direct cost to the accounting package for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectCostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$timeout_in_minutes = 56; // int
$codat_data_contracts_datasets_direct_cost = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectCost(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectCost

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushDirectCostsPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_direct_cost);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectCostsApi->companiesCompanyIdConnectionsConnectionIdPushDirectCostsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **codat_data_contracts_datasets_direct_cost** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectCost**](../Model/CodatDataContractsDatasetsDirectCost.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectCostPushOperation**](../Model/CodatDataContractsDatasetsDirectCostPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
