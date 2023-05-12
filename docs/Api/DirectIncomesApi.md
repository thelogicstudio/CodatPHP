# TheLogicStudio\CodatPHP\DirectIncomesApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdDownloadGet()**](DirectIncomesApi.md#companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdDownloadGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/directIncomes/{directIncomeId}/attachments/{attachmentId}/download | Downloads an attachment for the specified direct income for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdGet()**](DirectIncomesApi.md#companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/directIncomes/{directIncomeId}/attachments/{attachmentId} | Gets the specified direct income attachment for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsGet()**](DirectIncomesApi.md#companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/directIncomes/{directIncomeId}/attachments | Gets all attachments for the specified direct income for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdGet()**](DirectIncomesApi.md#companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/directIncomes/{directIncomeId} | Gets the specified direct income for a given company and connection. |
| [**companiesCompanyIdConnectionsConnectionIdDataDirectIncomesGet()**](DirectIncomesApi.md#companiesCompanyIdConnectionsConnectionIdDataDirectIncomesGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/directIncomes | Gets the direct incomes for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdPushDirectIncomesDirectIncomeIdAttachmentPost()**](DirectIncomesApi.md#companiesCompanyIdConnectionsConnectionIdPushDirectIncomesDirectIncomeIdAttachmentPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/directIncomes/{directIncomeId}/attachment | Posts a new direct income attachment for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdPushDirectIncomesPost()**](DirectIncomesApi.md#companiesCompanyIdConnectionsConnectionIdPushDirectIncomesPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/directIncomes | Posts a new direct income to the accounting package for a given company. |


## `companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdDownloadGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdDownloadGet($company_id, $connection_id, $direct_income_id, $attachment_id)
```

Downloads an attachment for the specified direct income for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectIncomesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$direct_income_id = 'direct_income_id_example'; // string
$attachment_id = 'attachment_id_example'; // string

try {
    $apiInstance->companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdDownloadGet($company_id, $connection_id, $direct_income_id, $attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling DirectIncomesApi->companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **direct_income_id** | **string**|  | |
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

## `companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdGet($company_id, $connection_id, $direct_income_id, $attachment_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAttachmentsDatasetAttachment
```

Gets the specified direct income attachment for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectIncomesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$direct_income_id = 'direct_income_id_example'; // string
$attachment_id = 'attachment_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdGet($company_id, $connection_id, $direct_income_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectIncomesApi->companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsAttachmentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **direct_income_id** | **string**|  | |
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

## `companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsGet($company_id, $connection_id, $direct_income_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAttachmentsDataset
```

Gets all attachments for the specified direct income for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectIncomesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$direct_income_id = 'direct_income_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsGet($company_id, $connection_id, $direct_income_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectIncomesApi->companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **direct_income_id** | **string**|  | |

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

## `companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdGet($company_id, $connection_id, $direct_income_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectIncome
```

Gets the specified direct income for a given company and connection.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectIncomesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$direct_income_id = 'direct_income_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdGet($company_id, $connection_id, $direct_income_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectIncomesApi->companiesCompanyIdConnectionsConnectionIdDataDirectIncomesDirectIncomeIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **direct_income_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectIncome**](../Model/CodatDataContractsDatasetsDirectIncome.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdDataDirectIncomesGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataDirectIncomesGet($company_id, $connection_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectIncomePagedResponseModel
```

Gets the direct incomes for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectIncomesApi(
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
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataDirectIncomesGet($company_id, $connection_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectIncomesApi->companiesCompanyIdConnectionsConnectionIdDataDirectIncomesGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectIncomePagedResponseModel**](../Model/CodatDataContractsDatasetsDirectIncomePagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdPushDirectIncomesDirectIncomeIdAttachmentPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushDirectIncomesDirectIncomeIdAttachmentPost($company_id, $connection_id, $direct_income_id)
```

Posts a new direct income attachment for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectIncomesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$direct_income_id = 'direct_income_id_example'; // string

try {
    $apiInstance->companiesCompanyIdConnectionsConnectionIdPushDirectIncomesDirectIncomeIdAttachmentPost($company_id, $connection_id, $direct_income_id);
} catch (Exception $e) {
    echo 'Exception when calling DirectIncomesApi->companiesCompanyIdConnectionsConnectionIdPushDirectIncomesDirectIncomeIdAttachmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **direct_income_id** | **string**|  | |

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

## `companiesCompanyIdConnectionsConnectionIdPushDirectIncomesPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushDirectIncomesPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_direct_income): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectIncomePushOperation
```

Posts a new direct income to the accounting package for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\DirectIncomesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$timeout_in_minutes = 56; // int
$codat_data_contracts_datasets_direct_income = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectIncome(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectIncome

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushDirectIncomesPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_direct_income);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectIncomesApi->companiesCompanyIdConnectionsConnectionIdPushDirectIncomesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **codat_data_contracts_datasets_direct_income** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectIncome**](../Model/CodatDataContractsDatasetsDirectIncome.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsDirectIncomePushOperation**](../Model/CodatDataContractsDatasetsDirectIncomePushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
