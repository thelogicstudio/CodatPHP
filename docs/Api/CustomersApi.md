# TheLogicStudio\CodatPHP\CustomersApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdDownloadGet()**](CustomersApi.md#companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdDownloadGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/customers/{customerId}/attachments/{attachmentId}/download |  |
| [**companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdGet()**](CustomersApi.md#companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/customers/{customerId}/attachments/{attachmentId} |  |
| [**companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsGet()**](CustomersApi.md#companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/customers/{customerId}/attachments |  |
| [**companiesCompanyIdConnectionsConnectionIdPushCustomersCustomerIdPut()**](CustomersApi.md#companiesCompanyIdConnectionsConnectionIdPushCustomersCustomerIdPut) | **PUT** /companies/{companyId}/connections/{connectionId}/push/customers/{customerId} | Posts an updated customer for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdPushCustomersPost()**](CustomersApi.md#companiesCompanyIdConnectionsConnectionIdPushCustomersPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/customers | Posts an individual customer for a given company. |
| [**companiesCompanyIdDataCustomersCustomerIdGet()**](CustomersApi.md#companiesCompanyIdDataCustomersCustomerIdGet) | **GET** /companies/{companyId}/data/customers/{customerId} | Gets a single customer corresponding to the supplied Id |
| [**companiesCompanyIdDataCustomersGet()**](CustomersApi.md#companiesCompanyIdDataCustomersGet) | **GET** /companies/{companyId}/data/customers | Gets the latest customers for a company, with pagination |


## `companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdDownloadGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdDownloadGet($company_id, $connection_id, $customer_id, $attachment_id)
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$customer_id = 'customer_id_example'; // string
$attachment_id = 'attachment_id_example'; // string

try {
    $apiInstance->companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdDownloadGet($company_id, $connection_id, $customer_id, $attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **customer_id** | **string**|  | |
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

## `companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdGet($company_id, $connection_id, $customer_id, $attachment_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAttachmentsDatasetAttachment
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$customer_id = 'customer_id_example'; // string
$attachment_id = 'attachment_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdGet($company_id, $connection_id, $customer_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsAttachmentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **customer_id** | **string**|  | |
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

## `companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsGet($company_id, $connection_id, $customer_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAttachmentsDataset
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$customer_id = 'customer_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsGet($company_id, $connection_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->companiesCompanyIdConnectionsConnectionIdDataCustomersCustomerIdAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **customer_id** | **string**|  | |

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

## `companiesCompanyIdConnectionsConnectionIdPushCustomersCustomerIdPut()`

```php
companiesCompanyIdConnectionsConnectionIdPushCustomersCustomerIdPut($company_id, $connection_id, $customer_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_customer): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomerPushOperation
```

Posts an updated customer for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$customer_id = 'customer_id_example'; // string
$timeout_in_minutes = 56; // int
$force_update = false; // bool
$codat_data_contracts_datasets_customer = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomer(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomer

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushCustomersCustomerIdPut($company_id, $connection_id, $customer_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->companiesCompanyIdConnectionsConnectionIdPushCustomersCustomerIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **customer_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **force_update** | **bool**|  | [optional] [default to false] |
| **codat_data_contracts_datasets_customer** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomer**](../Model/CodatDataContractsDatasetsCustomer.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomerPushOperation**](../Model/CodatDataContractsDatasetsCustomerPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdPushCustomersPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushCustomersPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_customer): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomerPushOperation
```

Posts an individual customer for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$timeout_in_minutes = 56; // int
$codat_data_contracts_datasets_customer = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomer(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomer

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushCustomersPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_customer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->companiesCompanyIdConnectionsConnectionIdPushCustomersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **codat_data_contracts_datasets_customer** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomer**](../Model/CodatDataContractsDatasetsCustomer.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomerPushOperation**](../Model/CodatDataContractsDatasetsCustomerPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataCustomersCustomerIdGet()`

```php
companiesCompanyIdDataCustomersCustomerIdGet($company_id, $customer_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomer
```

Gets a single customer corresponding to the supplied Id

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$customer_id = 'customer_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataCustomersCustomerIdGet($company_id, $customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->companiesCompanyIdDataCustomersCustomerIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **customer_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomer**](../Model/CodatDataContractsDatasetsCustomer.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataCustomersGet()`

```php
companiesCompanyIdDataCustomersGet($company_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomerPagedResponseModel
```

Gets the latest customers for a company, with pagination

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CustomersApi(
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
    $result = $apiInstance->companiesCompanyIdDataCustomersGet($company_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->companiesCompanyIdDataCustomersGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCustomerPagedResponseModel**](../Model/CodatDataContractsDatasetsCustomerPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
