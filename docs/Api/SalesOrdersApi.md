# TheLogicStudio\CodatPHP\SalesOrdersApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdDataSalesOrdersGet()**](SalesOrdersApi.md#companiesCompanyIdDataSalesOrdersGet) | **GET** /companies/{companyId}/data/salesOrders |  |
| [**companiesCompanyIdDataSalesOrdersSalesOrderIdGet()**](SalesOrdersApi.md#companiesCompanyIdDataSalesOrdersSalesOrderIdGet) | **GET** /companies/{companyId}/data/salesOrders/{salesOrderId} |  |


## `companiesCompanyIdDataSalesOrdersGet()`

```php
companiesCompanyIdDataSalesOrdersGet($company_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSalesOrderPagedResponseModel
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\SalesOrdersApi(
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
    $result = $apiInstance->companiesCompanyIdDataSalesOrdersGet($company_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->companiesCompanyIdDataSalesOrdersGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSalesOrderPagedResponseModel**](../Model/CodatDataContractsDatasetsSalesOrderPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataSalesOrdersSalesOrderIdGet()`

```php
companiesCompanyIdDataSalesOrdersSalesOrderIdGet($company_id, $sales_order_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSalesOrder
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\SalesOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$sales_order_id = 'sales_order_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataSalesOrdersSalesOrderIdGet($company_id, $sales_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrdersApi->companiesCompanyIdDataSalesOrdersSalesOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **sales_order_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsSalesOrder**](../Model/CodatDataContractsDatasetsSalesOrder.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
