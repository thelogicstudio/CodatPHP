# TheLogicStudio\CodatPHP\SuppliersApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdDownloadGet()**](SuppliersApi.md#companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdDownloadGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/suppliers/{supplierId}/attachments/{attachmentId}/download |  |
| [**companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdGet()**](SuppliersApi.md#companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/suppliers/{supplierId}/attachments/{attachmentId} |  |
| [**companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsGet()**](SuppliersApi.md#companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/suppliers/{supplierId}/attachments |  |
| [**companiesCompanyIdConnectionsConnectionIdPushSuppliersPost()**](SuppliersApi.md#companiesCompanyIdConnectionsConnectionIdPushSuppliersPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/suppliers |  |
| [**companiesCompanyIdConnectionsConnectionIdPushSuppliersSupplierIdPut()**](SuppliersApi.md#companiesCompanyIdConnectionsConnectionIdPushSuppliersSupplierIdPut) | **PUT** /companies/{companyId}/connections/{connectionId}/push/suppliers/{supplierId} |  |
| [**companiesCompanyIdDataSuppliersGet()**](SuppliersApi.md#companiesCompanyIdDataSuppliersGet) | **GET** /companies/{companyId}/data/suppliers | Gets the latest suppliers for a company, with pagination |
| [**companiesCompanyIdDataSuppliersSupplierIdGet()**](SuppliersApi.md#companiesCompanyIdDataSuppliersSupplierIdGet) | **GET** /companies/{companyId}/data/suppliers/{supplierId} | Gets a single supplier corresponding to the supplied Id |


## `companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdDownloadGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdDownloadGet($company_id, $connection_id, $supplier_id, $attachment_id)
```



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


$apiInstance = new TheLogicStudio\CodatPHP\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$supplier_id = 'supplier_id_example'; // string
$attachment_id = 'attachment_id_example'; // string

try {
    $apiInstance->companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdDownloadGet($company_id, $connection_id, $supplier_id, $attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **supplier_id** | **string**|  | |
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

## `companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdGet($company_id, $connection_id, $supplier_id, $attachment_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAttachmentsDatasetAttachment
```



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


$apiInstance = new TheLogicStudio\CodatPHP\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$supplier_id = 'supplier_id_example'; // string
$attachment_id = 'attachment_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdGet($company_id, $connection_id, $supplier_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsAttachmentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **supplier_id** | **string**|  | |
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

## `companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsGet($company_id, $connection_id, $supplier_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAttachmentsDataset
```



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


$apiInstance = new TheLogicStudio\CodatPHP\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$supplier_id = 'supplier_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsGet($company_id, $connection_id, $supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->companiesCompanyIdConnectionsConnectionIdDataSuppliersSupplierIdAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **supplier_id** | **string**|  | |

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

## `companiesCompanyIdConnectionsConnectionIdPushSuppliersPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushSuppliersPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_supplier): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplierPushOperation
```



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


$apiInstance = new TheLogicStudio\CodatPHP\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$timeout_in_minutes = 56; // int
$codat_data_contracts_datasets_supplier = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplier(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplier

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushSuppliersPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->companiesCompanyIdConnectionsConnectionIdPushSuppliersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **codat_data_contracts_datasets_supplier** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplier**](../Model/CodatDataContractsDatasetsSupplier.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplierPushOperation**](../Model/CodatDataContractsDatasetsSupplierPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdPushSuppliersSupplierIdPut()`

```php
companiesCompanyIdConnectionsConnectionIdPushSuppliersSupplierIdPut($company_id, $connection_id, $supplier_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_supplier): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplierPushOperation
```



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


$apiInstance = new TheLogicStudio\CodatPHP\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$supplier_id = 'supplier_id_example'; // string
$timeout_in_minutes = 56; // int
$force_update = false; // bool
$codat_data_contracts_datasets_supplier = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplier(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplier

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushSuppliersSupplierIdPut($company_id, $connection_id, $supplier_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_supplier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->companiesCompanyIdConnectionsConnectionIdPushSuppliersSupplierIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **supplier_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **force_update** | **bool**|  | [optional] [default to false] |
| **codat_data_contracts_datasets_supplier** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplier**](../Model/CodatDataContractsDatasetsSupplier.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplierPushOperation**](../Model/CodatDataContractsDatasetsSupplierPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataSuppliersGet()`

```php
companiesCompanyIdDataSuppliersGet($company_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplierPagedResponseModel
```

Gets the latest suppliers for a company, with pagination

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\SuppliersApi(
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
    $result = $apiInstance->companiesCompanyIdDataSuppliersGet($company_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->companiesCompanyIdDataSuppliersGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplierPagedResponseModel**](../Model/CodatDataContractsDatasetsSupplierPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataSuppliersSupplierIdGet()`

```php
companiesCompanyIdDataSuppliersSupplierIdGet($company_id, $supplier_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplier
```

Gets a single supplier corresponding to the supplied Id

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\SuppliersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$supplier_id = 'supplier_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataSuppliersSupplierIdGet($company_id, $supplier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SuppliersApi->companiesCompanyIdDataSuppliersSupplierIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **supplier_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSupplier**](../Model/CodatDataContractsDatasetsSupplier.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
