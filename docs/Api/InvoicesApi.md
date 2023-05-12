# TheLogicStudio\CodatPHP\InvoicesApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdDownloadGet()**](InvoicesApi.md#companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdDownloadGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/invoices/{invoiceId}/attachments/{attachmentId}/download |  |
| [**companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdGet()**](InvoicesApi.md#companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/invoices/{invoiceId}/attachments/{attachmentId} |  |
| [**companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsGet()**](InvoicesApi.md#companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/invoices/{invoiceId}/attachments |  |
| [**companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdAttachmentPost()**](InvoicesApi.md#companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdAttachmentPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/invoices/{invoiceId}/attachment |  |
| [**companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdPut()**](InvoicesApi.md#companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdPut) | **PUT** /companies/{companyId}/connections/{connectionId}/push/invoices/{invoiceId} | Posts an updated invoice to the accounting package for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdPushInvoicesPost()**](InvoicesApi.md#companiesCompanyIdConnectionsConnectionIdPushInvoicesPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/invoices | Posts a new invoice to the accounting package for a given company. |
| [**companiesCompanyIdDataInvoicesGet()**](InvoicesApi.md#companiesCompanyIdDataInvoicesGet) | **GET** /companies/{companyId}/data/invoices | Gets the latest invoices for a company, with pagination |
| [**companiesCompanyIdDataInvoicesInvoiceIdGet()**](InvoicesApi.md#companiesCompanyIdDataInvoicesInvoiceIdGet) | **GET** /companies/{companyId}/data/invoices/{invoiceId} |  |
| [**companiesCompanyIdDataInvoicesInvoiceIdPdfGet()**](InvoicesApi.md#companiesCompanyIdDataInvoicesInvoiceIdPdfGet) | **GET** /companies/{companyId}/data/invoices/{invoiceId}/pdf |  |


## `companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdDownloadGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdDownloadGet($company_id, $connection_id, $invoice_id, $attachment_id)
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$attachment_id = 'attachment_id_example'; // string

try {
    $apiInstance->companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdDownloadGet($company_id, $connection_id, $invoice_id, $attachment_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **invoice_id** | **string**|  | |
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

## `companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdGet($company_id, $connection_id, $invoice_id, $attachment_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAttachmentsDatasetAttachment
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$attachment_id = 'attachment_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdGet($company_id, $connection_id, $invoice_id, $attachment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsAttachmentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **invoice_id** | **string**|  | |
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

## `companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsGet($company_id, $connection_id, $invoice_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAttachmentsDataset
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsGet($company_id, $connection_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->companiesCompanyIdConnectionsConnectionIdDataInvoicesInvoiceIdAttachmentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **invoice_id** | **string**|  | |

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

## `companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdAttachmentPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdAttachmentPost($company_id, $connection_id, $invoice_id)
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $apiInstance->companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdAttachmentPost($company_id, $connection_id, $invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdAttachmentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **invoice_id** | **string**|  | |

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

## `companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdPut()`

```php
companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdPut($company_id, $connection_id, $invoice_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_invoice): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoicePushOperation
```

Posts an updated invoice to the accounting package for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$invoice_id = 'invoice_id_example'; // string
$timeout_in_minutes = 56; // int
$force_update = false; // bool
$codat_data_contracts_datasets_invoice = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoice(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoice

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdPut($company_id, $connection_id, $invoice_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->companiesCompanyIdConnectionsConnectionIdPushInvoicesInvoiceIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **invoice_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **force_update** | **bool**|  | [optional] [default to false] |
| **codat_data_contracts_datasets_invoice** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoice**](../Model/CodatDataContractsDatasetsInvoice.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoicePushOperation**](../Model/CodatDataContractsDatasetsInvoicePushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdPushInvoicesPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushInvoicesPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_invoice): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoicePushOperation
```

Posts a new invoice to the accounting package for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$timeout_in_minutes = 56; // int
$codat_data_contracts_datasets_invoice = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoice(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoice

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushInvoicesPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_invoice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->companiesCompanyIdConnectionsConnectionIdPushInvoicesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **codat_data_contracts_datasets_invoice** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoice**](../Model/CodatDataContractsDatasetsInvoice.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoicePushOperation**](../Model/CodatDataContractsDatasetsInvoicePushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataInvoicesGet()`

```php
companiesCompanyIdDataInvoicesGet($company_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoicePagedResponseModel
```

Gets the latest invoices for a company, with pagination

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\InvoicesApi(
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
    $result = $apiInstance->companiesCompanyIdDataInvoicesGet($company_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->companiesCompanyIdDataInvoicesGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoicePagedResponseModel**](../Model/CodatDataContractsDatasetsInvoicePagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataInvoicesInvoiceIdGet()`

```php
companiesCompanyIdDataInvoicesInvoiceIdGet($company_id, $invoice_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoice
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataInvoicesInvoiceIdGet($company_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->companiesCompanyIdDataInvoicesInvoiceIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **invoice_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsInvoice**](../Model/CodatDataContractsDatasetsInvoice.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataInvoicesInvoiceIdPdfGet()`

```php
companiesCompanyIdDataInvoicesInvoiceIdPdfGet($company_id, $invoice_id)
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $apiInstance->companiesCompanyIdDataInvoicesInvoiceIdPdfGet($company_id, $invoice_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->companiesCompanyIdDataInvoicesInvoiceIdPdfGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **invoice_id** | **string**|  | |

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
