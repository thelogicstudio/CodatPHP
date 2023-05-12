# TheLogicStudio\CodatPHP\AssessApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdReportsEnhancedBalanceSheetAccountsGet()**](AssessApi.md#companiesCompanyIdReportsEnhancedBalanceSheetAccountsGet) | **GET** /companies/{companyId}/reports/enhancedBalanceSheet/accounts | Gets a list of accounts with account categories per statement period, specific to balance sheet |
| [**companiesCompanyIdReportsEnhancedCashFlowTransactionsGet()**](AssessApi.md#companiesCompanyIdReportsEnhancedCashFlowTransactionsGet) | **GET** /companies/{companyId}/reports/enhancedCashFlow/transactions | Gets a list of banking transactions and their categories. |
| [**companiesCompanyIdReportsEnhancedInvoicesGet()**](AssessApi.md#companiesCompanyIdReportsEnhancedInvoicesGet) | **GET** /companies/{companyId}/reports/enhancedInvoices |  |
| [**companiesCompanyIdReportsEnhancedProfitAndLossAccountsGet()**](AssessApi.md#companiesCompanyIdReportsEnhancedProfitAndLossAccountsGet) | **GET** /companies/{companyId}/reports/enhancedProfitAndLoss/accounts | Gets a list of accounts with account categories per statement period, specific to profit and loss |
| [**dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityDetailsGet()**](AssessApi.md#dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityDetailsGet) | **GET** /data/companies/{companyId}/assess/dataTypes/{dataType}/dataIntegrity/details | Gets record-by-record match results for a given company and datatype, optionally restricted by a Codat query string. |
| [**dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityStatusGet()**](AssessApi.md#dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityStatusGet) | **GET** /data/companies/{companyId}/assess/dataTypes/{dataType}/dataIntegrity/status | Gets match status for a given company and datatype. |
| [**dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegritySummariesGet()**](AssessApi.md#dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegritySummariesGet) | **GET** /data/companies/{companyId}/assess/dataTypes/{dataType}/dataIntegrity/summaries | Gets match summary for a given company and datatype, optionally restricted by a Codat query string. |
| [**dataCompaniesCompanyIdAssessExcelDownloadGet()**](AssessApi.md#dataCompaniesCompanyIdAssessExcelDownloadGet) | **GET** /data/companies/{companyId}/assess/excel/download | Download the Excel report to a local drive. |
| [**dataCompaniesCompanyIdAssessExcelGet()**](AssessApi.md#dataCompaniesCompanyIdAssessExcelGet) | **GET** /data/companies/{companyId}/assess/excel | Returns the status of the latest report requested. |
| [**dataCompaniesCompanyIdAssessExcelPost()**](AssessApi.md#dataCompaniesCompanyIdAssessExcelPost) | **POST** /data/companies/{companyId}/assess/excel | Request an Excel report for download. |
| [**dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsCustomerRetentionGet()**](AssessApi.md#dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsCustomerRetentionGet) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/commerceMetrics/customerRetention | Gets the customer retention metrics for a specific company connection, over one or more periods of time. |
| [**dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsLifetimeValueGet()**](AssessApi.md#dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsLifetimeValueGet) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/commerceMetrics/lifetimeValue | Gets the lifetime value metric for a specific company connection, over one or more periods of time. |
| [**dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsOrdersGet()**](AssessApi.md#dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsOrdersGet) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/commerceMetrics/orders | Gets the order information for a specific company connection, over one or more periods of time. |
| [**dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRefundsGet()**](AssessApi.md#dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRefundsGet) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/commerceMetrics/refunds | Gets the refunds information for a specific company connection, over one or more periods of time. |
| [**dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRevenueGet()**](AssessApi.md#dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRevenueGet) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/commerceMetrics/revenue | Gets the revenue and revenue growth for a specific company connection, over one or more periods of time. |
| [**dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsMrrGet()**](AssessApi.md#dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsMrrGet) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/subscriptions/mrr | Gets key metrics for subscription revenue. |
| [**dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsProcessGet()**](AssessApi.md#dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsProcessGet) | **GET** /data/companies/{companyId}/connections/{connectionId}/assess/subscriptions/process | Gets key metrics for subscription revenue. |


## `companiesCompanyIdReportsEnhancedBalanceSheetAccountsGet()`

```php
companiesCompanyIdReportsEnhancedBalanceSheetAccountsGet($company_id, $report_date, $number_of_periods): \TheLogicStudio\CodatPHP\Model\CodatAssessDataContractsFinancialsStatementsEnhancedFinancialStatement
```

Gets a list of accounts with account categories per statement period, specific to balance sheet

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$report_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$number_of_periods = 56; // int

try {
    $result = $apiInstance->companiesCompanyIdReportsEnhancedBalanceSheetAccountsGet($company_id, $report_date, $number_of_periods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->companiesCompanyIdReportsEnhancedBalanceSheetAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **report_date** | **\DateTime**|  | [optional] |
| **number_of_periods** | **int**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatAssessDataContractsFinancialsStatementsEnhancedFinancialStatement**](../Model/CodatAssessDataContractsFinancialsStatementsEnhancedFinancialStatement.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdReportsEnhancedCashFlowTransactionsGet()`

```php
companiesCompanyIdReportsEnhancedCashFlowTransactionsGet($company_id, $page, $page_size, $query): \TheLogicStudio\CodatPHP\Model\CodatAssessDataContractsCashFlowTransactionsCashFlowTransactionsReport
```

Gets a list of banking transactions and their categories.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$page = 1; // int
$page_size = 100; // int
$query = 'query_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdReportsEnhancedCashFlowTransactionsGet($company_id, $page, $page_size, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->companiesCompanyIdReportsEnhancedCashFlowTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **page** | **int**|  | [default to 1] |
| **page_size** | **int**|  | [optional] [default to 100] |
| **query** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatAssessDataContractsCashFlowTransactionsCashFlowTransactionsReport**](../Model/CodatAssessDataContractsCashFlowTransactionsCashFlowTransactionsReport.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdReportsEnhancedInvoicesGet()`

```php
companiesCompanyIdReportsEnhancedInvoicesGet($company_id, $page, $page_size): \TheLogicStudio\CodatPHP\Model\CodatDataIntegrityContractsReportsInvoicesReport
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$page = 1; // int
$page_size = 100; // int

try {
    $result = $apiInstance->companiesCompanyIdReportsEnhancedInvoicesGet($company_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->companiesCompanyIdReportsEnhancedInvoicesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **page** | **int**|  | [default to 1] |
| **page_size** | **int**|  | [optional] [default to 100] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataIntegrityContractsReportsInvoicesReport**](../Model/CodatDataIntegrityContractsReportsInvoicesReport.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdReportsEnhancedProfitAndLossAccountsGet()`

```php
companiesCompanyIdReportsEnhancedProfitAndLossAccountsGet($company_id, $report_date, $number_of_periods): \TheLogicStudio\CodatPHP\Model\CodatAssessDataContractsFinancialsStatementsEnhancedFinancialStatement
```

Gets a list of accounts with account categories per statement period, specific to profit and loss

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$report_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$number_of_periods = 56; // int

try {
    $result = $apiInstance->companiesCompanyIdReportsEnhancedProfitAndLossAccountsGet($company_id, $report_date, $number_of_periods);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->companiesCompanyIdReportsEnhancedProfitAndLossAccountsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **report_date** | **\DateTime**|  | [optional] |
| **number_of_periods** | **int**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatAssessDataContractsFinancialsStatementsEnhancedFinancialStatement**](../Model/CodatAssessDataContractsFinancialsStatementsEnhancedFinancialStatement.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityDetailsGet()`

```php
dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityDetailsGet($company_id, $data_type, $page, $query, $page_size, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataIntegrityContractsDetailsTransactionDetailsPagedResponse
```

Gets record-by-record match results for a given company and datatype, optionally restricted by a Codat query string.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$data_type = 'data_type_example'; // string
$page = 1; // int
$query = 'query_example'; // string
$page_size = 56; // int
$order_by = 'order_by_example'; // string

try {
    $result = $apiInstance->dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityDetailsGet($company_id, $data_type, $page, $query, $page_size, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **data_type** | **string**|  | |
| **page** | **int**|  | [optional] [default to 1] |
| **query** | **string**|  | [optional] |
| **page_size** | **int**|  | [optional] |
| **order_by** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataIntegrityContractsDetailsTransactionDetailsPagedResponse**](../Model/CodatDataIntegrityContractsDetailsTransactionDetailsPagedResponse.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityStatusGet()`

```php
dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityStatusGet($company_id, $data_type): \TheLogicStudio\CodatPHP\Model\CodatDataIntegrityContractsMetadataMatchMetadataResponse
```

Gets match status for a given company and datatype.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$data_type = 'data_type_example'; // string

try {
    $result = $apiInstance->dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityStatusGet($company_id, $data_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegrityStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **data_type** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataIntegrityContractsMetadataMatchMetadataResponse**](../Model/CodatDataIntegrityContractsMetadataMatchMetadataResponse.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegritySummariesGet()`

```php
dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegritySummariesGet($company_id, $data_type, $query): \TheLogicStudio\CodatPHP\Model\CodatDataIntegrityContractsSummaryMatchSummariesResponse
```

Gets match summary for a given company and datatype, optionally restricted by a Codat query string.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$data_type = 'data_type_example'; // string
$query = 'query_example'; // string

try {
    $result = $apiInstance->dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegritySummariesGet($company_id, $data_type, $query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->dataCompaniesCompanyIdAssessDataTypesDataTypeDataIntegritySummariesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **data_type** | **string**|  | |
| **query** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataIntegrityContractsSummaryMatchSummariesResponse**](../Model/CodatDataIntegrityContractsSummaryMatchSummariesResponse.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCompaniesCompanyIdAssessExcelDownloadGet()`

```php
dataCompaniesCompanyIdAssessExcelDownloadGet($company_id, $report_type): \SplFileObject
```

Download the Excel report to a local drive.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$report_type = 'report_type_example'; // string

try {
    $result = $apiInstance->dataCompaniesCompanyIdAssessExcelDownloadGet($company_id, $report_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->dataCompaniesCompanyIdAssessExcelDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **report_type** | **string**|  | [optional] |

### Return type

**\SplFileObject**

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCompaniesCompanyIdAssessExcelGet()`

```php
dataCompaniesCompanyIdAssessExcelGet($company_id, $report_type): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsAssessAssessExcelMeta
```

Returns the status of the latest report requested.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$report_type = 'report_type_example'; // string

try {
    $result = $apiInstance->dataCompaniesCompanyIdAssessExcelGet($company_id, $report_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->dataCompaniesCompanyIdAssessExcelGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **report_type** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsAssessAssessExcelMeta**](../Model/CodatPublicApiModelsAssessAssessExcelMeta.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCompaniesCompanyIdAssessExcelPost()`

```php
dataCompaniesCompanyIdAssessExcelPost($company_id, $report_type): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsAssessAssessExcelMeta
```

Request an Excel report for download.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$report_type = 'report_type_example'; // string

try {
    $result = $apiInstance->dataCompaniesCompanyIdAssessExcelPost($company_id, $report_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->dataCompaniesCompanyIdAssessExcelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **report_type** | **string**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsAssessAssessExcelMeta**](../Model/CodatPublicApiModelsAssessAssessExcelMeta.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsCustomerRetentionGet()`

```php
dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsCustomerRetentionGet($company_id, $connection_id, $report_date, $period_length, $number_of_periods, $period_unit, $include_display_names): \TheLogicStudio\CodatPHP\Model\CodatStandardReportingContractsReport
```

Gets the customer retention metrics for a specific company connection, over one or more periods of time.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$report_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$period_length = 56; // int
$number_of_periods = 56; // int
$period_unit = new \TheLogicStudio\CodatPHP\Model\CodatAssessDataContractsCommerceMetricsPeriodUnit(); // CodatAssessDataContractsCommerceMetricsPeriodUnit
$include_display_names = false; // bool

try {
    $result = $apiInstance->dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsCustomerRetentionGet($company_id, $connection_id, $report_date, $period_length, $number_of_periods, $period_unit, $include_display_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsCustomerRetentionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **report_date** | **\DateTime**|  | |
| **period_length** | **int**|  | |
| **number_of_periods** | **int**|  | |
| **period_unit** | [**CodatAssessDataContractsCommerceMetricsPeriodUnit**](../Model/.md)|  | |
| **include_display_names** | **bool**|  | [optional] [default to false] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatStandardReportingContractsReport**](../Model/CodatStandardReportingContractsReport.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsLifetimeValueGet()`

```php
dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsLifetimeValueGet($company_id, $connection_id, $report_date, $period_length, $number_of_periods, $period_unit, $include_display_names): \TheLogicStudio\CodatPHP\Model\CodatStandardReportingContractsReport
```

Gets the lifetime value metric for a specific company connection, over one or more periods of time.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$report_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$period_length = 56; // int
$number_of_periods = 56; // int
$period_unit = new \TheLogicStudio\CodatPHP\Model\CodatAssessDataContractsCommerceMetricsPeriodUnit(); // CodatAssessDataContractsCommerceMetricsPeriodUnit
$include_display_names = false; // bool

try {
    $result = $apiInstance->dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsLifetimeValueGet($company_id, $connection_id, $report_date, $period_length, $number_of_periods, $period_unit, $include_display_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsLifetimeValueGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **report_date** | **\DateTime**|  | |
| **period_length** | **int**|  | |
| **number_of_periods** | **int**|  | |
| **period_unit** | [**CodatAssessDataContractsCommerceMetricsPeriodUnit**](../Model/.md)|  | |
| **include_display_names** | **bool**|  | [optional] [default to false] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatStandardReportingContractsReport**](../Model/CodatStandardReportingContractsReport.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsOrdersGet()`

```php
dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsOrdersGet($company_id, $connection_id, $report_date, $period_length, $number_of_periods, $period_unit, $include_display_names): \TheLogicStudio\CodatPHP\Model\CodatStandardReportingContractsReport
```

Gets the order information for a specific company connection, over one or more periods of time.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$report_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$period_length = 56; // int
$number_of_periods = 56; // int
$period_unit = new \TheLogicStudio\CodatPHP\Model\CodatAssessDataContractsCommerceMetricsPeriodUnit(); // CodatAssessDataContractsCommerceMetricsPeriodUnit
$include_display_names = false; // bool

try {
    $result = $apiInstance->dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsOrdersGet($company_id, $connection_id, $report_date, $period_length, $number_of_periods, $period_unit, $include_display_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsOrdersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **report_date** | **\DateTime**|  | |
| **period_length** | **int**|  | |
| **number_of_periods** | **int**|  | |
| **period_unit** | [**CodatAssessDataContractsCommerceMetricsPeriodUnit**](../Model/.md)|  | |
| **include_display_names** | **bool**|  | [optional] [default to false] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatStandardReportingContractsReport**](../Model/CodatStandardReportingContractsReport.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRefundsGet()`

```php
dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRefundsGet($company_id, $connection_id, $report_date, $period_length, $number_of_periods, $period_unit, $include_display_names): \TheLogicStudio\CodatPHP\Model\CodatStandardReportingContractsReport
```

Gets the refunds information for a specific company connection, over one or more periods of time.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$report_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$period_length = 56; // int
$number_of_periods = 56; // int
$period_unit = new \TheLogicStudio\CodatPHP\Model\CodatAssessDataContractsCommerceMetricsPeriodUnit(); // CodatAssessDataContractsCommerceMetricsPeriodUnit
$include_display_names = false; // bool

try {
    $result = $apiInstance->dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRefundsGet($company_id, $connection_id, $report_date, $period_length, $number_of_periods, $period_unit, $include_display_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRefundsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **report_date** | **\DateTime**|  | |
| **period_length** | **int**|  | |
| **number_of_periods** | **int**|  | |
| **period_unit** | [**CodatAssessDataContractsCommerceMetricsPeriodUnit**](../Model/.md)|  | |
| **include_display_names** | **bool**|  | [optional] [default to false] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatStandardReportingContractsReport**](../Model/CodatStandardReportingContractsReport.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRevenueGet()`

```php
dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRevenueGet($company_id, $connection_id, $report_date, $period_length, $number_of_periods, $period_unit, $include_display_names): \TheLogicStudio\CodatPHP\Model\CodatStandardReportingContractsReport
```

Gets the revenue and revenue growth for a specific company connection, over one or more periods of time.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$report_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$period_length = 56; // int
$number_of_periods = 56; // int
$period_unit = new \TheLogicStudio\CodatPHP\Model\CodatAssessDataContractsCommerceMetricsPeriodUnit(); // CodatAssessDataContractsCommerceMetricsPeriodUnit
$include_display_names = false; // bool

try {
    $result = $apiInstance->dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRevenueGet($company_id, $connection_id, $report_date, $period_length, $number_of_periods, $period_unit, $include_display_names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->dataCompaniesCompanyIdConnectionsConnectionIdAssessCommerceMetricsRevenueGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **report_date** | **\DateTime**|  | |
| **period_length** | **int**|  | |
| **number_of_periods** | **int**|  | |
| **period_unit** | [**CodatAssessDataContractsCommerceMetricsPeriodUnit**](../Model/.md)|  | |
| **include_display_names** | **bool**|  | [optional] [default to false] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatStandardReportingContractsReport**](../Model/CodatStandardReportingContractsReport.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsMrrGet()`

```php
dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsMrrGet($company_id, $connection_id): \TheLogicStudio\CodatPHP\Model\CodatStandardReportingContractsReport
```

Gets key metrics for subscription revenue.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string

try {
    $result = $apiInstance->dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsMrrGet($company_id, $connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsMrrGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatStandardReportingContractsReport**](../Model/CodatStandardReportingContractsReport.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsProcessGet()`

```php
dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsProcessGet($company_id, $connection_id)
```

Gets key metrics for subscription revenue.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\AssessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string

try {
    $apiInstance->dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsProcessGet($company_id, $connection_id);
} catch (Exception $e) {
    echo 'Exception when calling AssessApi->dataCompaniesCompanyIdConnectionsConnectionIdAssessSubscriptionsProcessGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |

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
