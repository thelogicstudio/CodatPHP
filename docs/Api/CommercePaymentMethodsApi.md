# TheLogicStudio\CodatPHP\CommercePaymentMethodsApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsGet()**](CommercePaymentMethodsApi.md#companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-paymentMethods | Gets a list of all payment methods from a data connection |
| [**companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsPaymentMethodIdGet()**](CommercePaymentMethodsApi.md#companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsPaymentMethodIdGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/commerce-paymentMethods/{paymentMethodId} | Gets the details of an individual payment method. |


## `companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsGet($company_id, $connection_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommercePaymentMethodPagedResponseModel
```

Gets a list of all payment methods from a data connection

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CommercePaymentMethodsApi(
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
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsGet($company_id, $connection_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommercePaymentMethodsApi->companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommercePaymentMethodPagedResponseModel**](../Model/CodatDataContractsDatasetsCommercePaymentMethodPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsPaymentMethodIdGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsPaymentMethodIdGet($company_id, $connection_id, $payment_method_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommercePaymentMethod
```

Gets the details of an individual payment method.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CommercePaymentMethodsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$payment_method_id = 'payment_method_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsPaymentMethodIdGet($company_id, $connection_id, $payment_method_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommercePaymentMethodsApi->companiesCompanyIdConnectionsConnectionIdDataCommercePaymentMethodsPaymentMethodIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **payment_method_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCommercePaymentMethod**](../Model/CodatDataContractsDatasetsCommercePaymentMethod.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
