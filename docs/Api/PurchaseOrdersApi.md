# TheLogicStudio\CodatPHP\PurchaseOrdersApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPost()**](PurchaseOrdersApi.md#companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/purchaseOrders | Posts a new purchase order to the accounting package for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPurchaseOrderIdPut()**](PurchaseOrdersApi.md#companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPurchaseOrderIdPut) | **PUT** /companies/{companyId}/connections/{connectionId}/push/purchaseOrders/{purchaseOrderId} | Posts an updated purchase order to the accounting package for a given company. |
| [**companiesCompanyIdDataPurchaseOrdersGet()**](PurchaseOrdersApi.md#companiesCompanyIdDataPurchaseOrdersGet) | **GET** /companies/{companyId}/data/purchaseOrders |  |
| [**companiesCompanyIdDataPurchaseOrdersPurchaseOrderIdGet()**](PurchaseOrdersApi.md#companiesCompanyIdDataPurchaseOrdersPurchaseOrderIdGet) | **GET** /companies/{companyId}/data/purchaseOrders/{purchaseOrderId} |  |


## `companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_purchase_order): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrderPushOperation
```

Posts a new purchase order to the accounting package for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$timeout_in_minutes = 56; // int
$codat_data_contracts_datasets_purchase_order = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrder(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrder

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_purchase_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **codat_data_contracts_datasets_purchase_order** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrder**](../Model/CodatDataContractsDatasetsPurchaseOrder.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrderPushOperation**](../Model/CodatDataContractsDatasetsPurchaseOrderPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPurchaseOrderIdPut()`

```php
companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPurchaseOrderIdPut($company_id, $connection_id, $purchase_order_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_purchase_order): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrderPushOperation
```

Posts an updated purchase order to the accounting package for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$purchase_order_id = 'purchase_order_id_example'; // string
$timeout_in_minutes = 56; // int
$force_update = false; // bool
$codat_data_contracts_datasets_purchase_order = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrder(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrder

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPurchaseOrderIdPut($company_id, $connection_id, $purchase_order_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_purchase_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->companiesCompanyIdConnectionsConnectionIdPushPurchaseOrdersPurchaseOrderIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **purchase_order_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **force_update** | **bool**|  | [optional] [default to false] |
| **codat_data_contracts_datasets_purchase_order** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrder**](../Model/CodatDataContractsDatasetsPurchaseOrder.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrderPushOperation**](../Model/CodatDataContractsDatasetsPurchaseOrderPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataPurchaseOrdersGet()`

```php
companiesCompanyIdDataPurchaseOrdersGet($company_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrderPagedResponseModel
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\PurchaseOrdersApi(
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
    $result = $apiInstance->companiesCompanyIdDataPurchaseOrdersGet($company_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->companiesCompanyIdDataPurchaseOrdersGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrderPagedResponseModel**](../Model/CodatDataContractsDatasetsPurchaseOrderPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataPurchaseOrdersPurchaseOrderIdGet()`

```php
companiesCompanyIdDataPurchaseOrdersPurchaseOrderIdGet($company_id, $purchase_order_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrder
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$purchase_order_id = 'purchase_order_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataPurchaseOrdersPurchaseOrderIdGet($company_id, $purchase_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->companiesCompanyIdDataPurchaseOrdersPurchaseOrderIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **purchase_order_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsPurchaseOrder**](../Model/CodatDataContractsDatasetsPurchaseOrder.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
