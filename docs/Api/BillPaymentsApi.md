# TheLogicStudio\CodatPHP\BillPaymentsApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdPushBillPaymentsPost()**](BillPaymentsApi.md#companiesCompanyIdConnectionsConnectionIdPushBillPaymentsPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/billPayments | Posts a new bill payment to the accounting package for a given company. |
| [**companiesCompanyIdDataBillPaymentsBillPaymentIdGet()**](BillPaymentsApi.md#companiesCompanyIdDataBillPaymentsBillPaymentIdGet) | **GET** /companies/{companyId}/data/billPayments/{billPaymentId} |  |
| [**companiesCompanyIdDataBillPaymentsGet()**](BillPaymentsApi.md#companiesCompanyIdDataBillPaymentsGet) | **GET** /companies/{companyId}/data/billPayments | Gets the latest billPayments for a company, with pagination |


## `companiesCompanyIdConnectionsConnectionIdPushBillPaymentsPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushBillPaymentsPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_bill_payment): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillPaymentPushOperation
```

Posts a new bill payment to the accounting package for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$timeout_in_minutes = 56; // int
$codat_data_contracts_datasets_bill_payment = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillPayment(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillPayment

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushBillPaymentsPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_bill_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->companiesCompanyIdConnectionsConnectionIdPushBillPaymentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **codat_data_contracts_datasets_bill_payment** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillPayment**](../Model/CodatDataContractsDatasetsBillPayment.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillPaymentPushOperation**](../Model/CodatDataContractsDatasetsBillPaymentPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataBillPaymentsBillPaymentIdGet()`

```php
companiesCompanyIdDataBillPaymentsBillPaymentIdGet($company_id, $bill_payment_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillPayment
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\BillPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$bill_payment_id = 'bill_payment_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataBillPaymentsBillPaymentIdGet($company_id, $bill_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->companiesCompanyIdDataBillPaymentsBillPaymentIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **bill_payment_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillPayment**](../Model/CodatDataContractsDatasetsBillPayment.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataBillPaymentsGet()`

```php
companiesCompanyIdDataBillPaymentsGet($company_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillPaymentPagedResponseModel
```

Gets the latest billPayments for a company, with pagination

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\BillPaymentsApi(
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
    $result = $apiInstance->companiesCompanyIdDataBillPaymentsGet($company_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillPaymentsApi->companiesCompanyIdDataBillPaymentsGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBillPaymentPagedResponseModel**](../Model/CodatDataContractsDatasetsBillPaymentPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
