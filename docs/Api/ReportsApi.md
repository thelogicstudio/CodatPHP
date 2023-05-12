# TheLogicStudio\CodatPHP\ReportsApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdReportsAgedCreditorAvailableGet()**](ReportsApi.md#companiesCompanyIdReportsAgedCreditorAvailableGet) | **GET** /companies/{companyId}/reports/agedCreditor/available |  |
| [**companiesCompanyIdReportsAgedCreditorGet()**](ReportsApi.md#companiesCompanyIdReportsAgedCreditorGet) | **GET** /companies/{companyId}/reports/agedCreditor | Gets the aged creditor report for a company. |
| [**companiesCompanyIdReportsAgedDebtorAvailableGet()**](ReportsApi.md#companiesCompanyIdReportsAgedDebtorAvailableGet) | **GET** /companies/{companyId}/reports/agedDebtor/available |  |
| [**companiesCompanyIdReportsAgedDebtorGet()**](ReportsApi.md#companiesCompanyIdReportsAgedDebtorGet) | **GET** /companies/{companyId}/reports/agedDebtor | Gets the aged debtor report for a company. |
| [**companiesCompanyIdReportsEventsGet()**](ReportsApi.md#companiesCompanyIdReportsEventsGet) | **GET** /companies/{companyId}/reports/events |  |


## `companiesCompanyIdReportsAgedCreditorAvailableGet()`

```php
companiesCompanyIdReportsAgedCreditorAvailableGet($company_id): bool
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdReportsAgedCreditorAvailableGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->companiesCompanyIdReportsAgedCreditorAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

### Return type

**bool**

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdReportsAgedCreditorGet()`

```php
companiesCompanyIdReportsAgedCreditorGet($company_id, $report_date, $number_of_periods, $period_length_days): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAgedCreditorOutstandingICollectionReport
```

Gets the aged creditor report for a company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$report_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$number_of_periods = 56; // int
$period_length_days = 56; // int

try {
    $result = $apiInstance->companiesCompanyIdReportsAgedCreditorGet($company_id, $report_date, $number_of_periods, $period_length_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->companiesCompanyIdReportsAgedCreditorGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **report_date** | **\DateTime**|  | [optional] |
| **number_of_periods** | **int**|  | [optional] |
| **period_length_days** | **int**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAgedCreditorOutstandingICollectionReport**](../Model/CodatDataContractsDatasetsAgedCreditorOutstandingICollectionReport.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdReportsAgedDebtorAvailableGet()`

```php
companiesCompanyIdReportsAgedDebtorAvailableGet($company_id): bool
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdReportsAgedDebtorAvailableGet($company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->companiesCompanyIdReportsAgedDebtorAvailableGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |

### Return type

**bool**

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdReportsAgedDebtorGet()`

```php
companiesCompanyIdReportsAgedDebtorGet($company_id, $report_date, $number_of_periods, $period_length_days): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAgedDebtorOutstandingICollectionReport
```

Gets the aged debtor report for a company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$report_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$number_of_periods = 56; // int
$period_length_days = 56; // int

try {
    $result = $apiInstance->companiesCompanyIdReportsAgedDebtorGet($company_id, $report_date, $number_of_periods, $period_length_days);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->companiesCompanyIdReportsAgedDebtorGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **report_date** | **\DateTime**|  | [optional] |
| **number_of_periods** | **int**|  | [optional] |
| **period_length_days** | **int**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsAgedDebtorOutstandingICollectionReport**](../Model/CodatDataContractsDatasetsAgedDebtorOutstandingICollectionReport.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdReportsEventsGet()`

```php
companiesCompanyIdReportsEventsGet($company_id, $from_date, $to_date, $page_size): \TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompanyEventStream
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$page_size = 56; // int

try {
    $result = $apiInstance->companiesCompanyIdReportsEventsGet($company_id, $from_date, $to_date, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->companiesCompanyIdReportsEventsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **from_date** | **\DateTime**|  | [optional] |
| **to_date** | **\DateTime**|  | [optional] |
| **page_size** | **int**|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatPublicApiModelsCompanyCompanyEventStream**](../Model/CodatPublicApiModelsCompanyCompanyEventStream.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
