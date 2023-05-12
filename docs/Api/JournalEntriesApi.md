# TheLogicStudio\CodatPHP\JournalEntriesApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdPushJournalEntriesPost()**](JournalEntriesApi.md#companiesCompanyIdConnectionsConnectionIdPushJournalEntriesPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/journalEntries | Posts a new journalEntry to the accounting package for a given company. |
| [**companiesCompanyIdDataJournalEntriesGet()**](JournalEntriesApi.md#companiesCompanyIdDataJournalEntriesGet) | **GET** /companies/{companyId}/data/journalEntries | Gets the latest journal entries for a company, with pagination |
| [**companiesCompanyIdDataJournalEntriesJournalEntryIdGet()**](JournalEntriesApi.md#companiesCompanyIdDataJournalEntriesJournalEntryIdGet) | **GET** /companies/{companyId}/data/journalEntries/{journalEntryId} | Gets a single JournalEntry corresponding to the supplied Id |


## `companiesCompanyIdConnectionsConnectionIdPushJournalEntriesPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushJournalEntriesPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_journal_entry): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsJournalEntryPushOperation
```

Posts a new journalEntry to the accounting package for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$timeout_in_minutes = 56; // int
$codat_data_contracts_datasets_journal_entry = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsJournalEntry(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsJournalEntry

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushJournalEntriesPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_journal_entry);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->companiesCompanyIdConnectionsConnectionIdPushJournalEntriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **codat_data_contracts_datasets_journal_entry** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsJournalEntry**](../Model/CodatDataContractsDatasetsJournalEntry.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsJournalEntryPushOperation**](../Model/CodatDataContractsDatasetsJournalEntryPushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataJournalEntriesGet()`

```php
companiesCompanyIdDataJournalEntriesGet($company_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsJournalEntryPagedResponseModel
```

Gets the latest journal entries for a company, with pagination

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\JournalEntriesApi(
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
    $result = $apiInstance->companiesCompanyIdDataJournalEntriesGet($company_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->companiesCompanyIdDataJournalEntriesGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsJournalEntryPagedResponseModel**](../Model/CodatDataContractsDatasetsJournalEntryPagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataJournalEntriesJournalEntryIdGet()`

```php
companiesCompanyIdDataJournalEntriesJournalEntryIdGet($company_id, $journal_entry_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsJournalEntry
```

Gets a single JournalEntry corresponding to the supplied Id

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\JournalEntriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$journal_entry_id = 'journal_entry_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataJournalEntriesJournalEntryIdGet($company_id, $journal_entry_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JournalEntriesApi->companiesCompanyIdDataJournalEntriesJournalEntryIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **journal_entry_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsJournalEntry**](../Model/CodatDataContractsDatasetsJournalEntry.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
