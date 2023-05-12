# TheLogicStudio\CodatPHP\BankingTransactionCategoriesApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesGet()**](BankingTransactionCategoriesApi.md#companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/banking-transactionCategories | Gets a list of hierarchical categories associated with a transaction for greater contextual meaning to transaction  activity. |
| [**companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesTransactionCategoryIdGet()**](BankingTransactionCategoriesApi.md#companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesTransactionCategoryIdGet) | **GET** /companies/{companyId}/connections/{connectionId}/data/banking-transactionCategories/{transactionCategoryId} | Gets a specified bank transaction category for a given company |


## `companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesGet($company_id, $connection_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankingTransactionCategoryPagedResponseModel
```

Gets a list of hierarchical categories associated with a transaction for greater contextual meaning to transaction  activity.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\BankingTransactionCategoriesApi(
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
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesGet($company_id, $connection_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingTransactionCategoriesApi->companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankingTransactionCategoryPagedResponseModel**](../Model/CodatDataContractsDatasetsBankingTransactionCategoryPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesTransactionCategoryIdGet()`

```php
companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesTransactionCategoryIdGet($company_id, $connection_id, $transaction_category_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankingTransactionCategory
```

Gets a specified bank transaction category for a given company

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\BankingTransactionCategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$transaction_category_id = 'transaction_category_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesTransactionCategoryIdGet($company_id, $connection_id, $transaction_category_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankingTransactionCategoriesApi->companiesCompanyIdConnectionsConnectionIdDataBankingTransactionCategoriesTransactionCategoryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **transaction_category_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsBankingTransactionCategory**](../Model/CodatDataContractsDatasetsBankingTransactionCategory.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
