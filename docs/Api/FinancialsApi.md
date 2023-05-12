# TheLogicStudio\CodatPHP\FinancialsApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdDataFinancialsBalanceSheetGet()**](FinancialsApi.md#companiesCompanyIdDataFinancialsBalanceSheetGet) | **GET** /companies/{companyId}/data/financials/balanceSheet | Gets the latest balance sheet for a company. |
| [**companiesCompanyIdDataFinancialsCashFlowStatementGet()**](FinancialsApi.md#companiesCompanyIdDataFinancialsCashFlowStatementGet) | **GET** /companies/{companyId}/data/financials/cashFlowStatement | Gets the latest cash flow statement for a company. |
| [**companiesCompanyIdDataFinancialsProfitAndLossGet()**](FinancialsApi.md#companiesCompanyIdDataFinancialsProfitAndLossGet) | **GET** /companies/{companyId}/data/financials/profitAndLoss | Gets the latest profit and loss for a company. |


## `companiesCompanyIdDataFinancialsBalanceSheetGet()`

```php
companiesCompanyIdDataFinancialsBalanceSheetGet($company_id, $period_length, $periods_to_compare, $start_month): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataBalanceSheetResponse
```

Gets the latest balance sheet for a company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\FinancialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$period_length = 56; // int
$periods_to_compare = 56; // int
$start_month = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->companiesCompanyIdDataFinancialsBalanceSheetGet($company_id, $period_length, $periods_to_compare, $start_month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialsApi->companiesCompanyIdDataFinancialsBalanceSheetGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **period_length** | **int**|  | |
| **periods_to_compare** | **int**|  | |
| **start_month** | **\DateTime**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataBalanceSheetResponse**](../Model/CodatPublicApiModelsDataBalanceSheetResponse.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataFinancialsCashFlowStatementGet()`

```php
companiesCompanyIdDataFinancialsCashFlowStatementGet($company_id, $period_length, $periods_to_compare, $start_month): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataCashFlowStatementResponse
```

Gets the latest cash flow statement for a company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\FinancialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$period_length = 56; // int
$periods_to_compare = 56; // int
$start_month = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->companiesCompanyIdDataFinancialsCashFlowStatementGet($company_id, $period_length, $periods_to_compare, $start_month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialsApi->companiesCompanyIdDataFinancialsCashFlowStatementGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **period_length** | **int**|  | |
| **periods_to_compare** | **int**|  | |
| **start_month** | **\DateTime**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataCashFlowStatementResponse**](../Model/CodatPublicApiModelsDataCashFlowStatementResponse.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataFinancialsProfitAndLossGet()`

```php
companiesCompanyIdDataFinancialsProfitAndLossGet($company_id, $period_length, $periods_to_compare, $start_month): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataProfitAndLossResponse
```

Gets the latest profit and loss for a company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\FinancialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$period_length = 56; // int
$periods_to_compare = 56; // int
$start_month = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->companiesCompanyIdDataFinancialsProfitAndLossGet($company_id, $period_length, $periods_to_compare, $start_month);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FinancialsApi->companiesCompanyIdDataFinancialsProfitAndLossGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **period_length** | **int**|  | |
| **periods_to_compare** | **int**|  | |
| **start_month** | **\DateTime**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsDataProfitAndLossResponse**](../Model/CodatPublicApiModelsDataProfitAndLossResponse.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
