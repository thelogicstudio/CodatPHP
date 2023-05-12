# TheLogicStudio\CodatPHP\CreditNotesApi

All URIs are relative to https://api.codat.io, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**companiesCompanyIdConnectionsConnectionIdPushCreditNotesCreditNoteIdPut()**](CreditNotesApi.md#companiesCompanyIdConnectionsConnectionIdPushCreditNotesCreditNoteIdPut) | **PUT** /companies/{companyId}/connections/{connectionId}/push/creditNotes/{creditNoteId} | Posts an updated credit note to the accounting package for a given company. |
| [**companiesCompanyIdConnectionsConnectionIdPushCreditNotesPost()**](CreditNotesApi.md#companiesCompanyIdConnectionsConnectionIdPushCreditNotesPost) | **POST** /companies/{companyId}/connections/{connectionId}/push/creditNotes |  |
| [**companiesCompanyIdDataCreditNotesCreditNoteIdGet()**](CreditNotesApi.md#companiesCompanyIdDataCreditNotesCreditNoteIdGet) | **GET** /companies/{companyId}/data/creditNotes/{creditNoteId} | Gets a single creditNote corresponding to the supplied Id |
| [**companiesCompanyIdDataCreditNotesGet()**](CreditNotesApi.md#companiesCompanyIdDataCreditNotesGet) | **GET** /companies/{companyId}/data/creditNotes | Gets a list of all credit notes for a company, with pagination |


## `companiesCompanyIdConnectionsConnectionIdPushCreditNotesCreditNoteIdPut()`

```php
companiesCompanyIdConnectionsConnectionIdPushCreditNotesCreditNoteIdPut($company_id, $connection_id, $credit_note_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_credit_note): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNotePushOperation
```

Posts an updated credit note to the accounting package for a given company.

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$credit_note_id = 'credit_note_id_example'; // string
$timeout_in_minutes = 56; // int
$force_update = false; // bool
$codat_data_contracts_datasets_credit_note = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNote(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNote

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushCreditNotesCreditNoteIdPut($company_id, $connection_id, $credit_note_id, $timeout_in_minutes, $force_update, $codat_data_contracts_datasets_credit_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->companiesCompanyIdConnectionsConnectionIdPushCreditNotesCreditNoteIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **credit_note_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **force_update** | **bool**|  | [optional] [default to false] |
| **codat_data_contracts_datasets_credit_note** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNote**](../Model/CodatDataContractsDatasetsCreditNote.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNotePushOperation**](../Model/CodatDataContractsDatasetsCreditNotePushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdConnectionsConnectionIdPushCreditNotesPost()`

```php
companiesCompanyIdConnectionsConnectionIdPushCreditNotesPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_credit_note): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNotePushOperation
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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$connection_id = 'connection_id_example'; // string
$timeout_in_minutes = 56; // int
$codat_data_contracts_datasets_credit_note = new \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNote(); // \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNote

try {
    $result = $apiInstance->companiesCompanyIdConnectionsConnectionIdPushCreditNotesPost($company_id, $connection_id, $timeout_in_minutes, $codat_data_contracts_datasets_credit_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->companiesCompanyIdConnectionsConnectionIdPushCreditNotesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **connection_id** | **string**|  | |
| **timeout_in_minutes** | **int**|  | [optional] |
| **codat_data_contracts_datasets_credit_note** | [**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNote**](../Model/CodatDataContractsDatasetsCreditNote.md)|  | [optional] |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNotePushOperation**](../Model/CodatDataContractsDatasetsCreditNotePushOperation.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataCreditNotesCreditNoteIdGet()`

```php
companiesCompanyIdDataCreditNotesCreditNoteIdGet($company_id, $credit_note_id): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNote
```

Gets a single creditNote corresponding to the supplied Id

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string
$credit_note_id = 'credit_note_id_example'; // string

try {
    $result = $apiInstance->companiesCompanyIdDataCreditNotesCreditNoteIdGet($company_id, $credit_note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->companiesCompanyIdDataCreditNotesCreditNoteIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**|  | |
| **credit_note_id** | **string**|  | |

### Return type

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNote**](../Model/CodatDataContractsDatasetsCreditNote.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companiesCompanyIdDataCreditNotesGet()`

```php
companiesCompanyIdDataCreditNotesGet($company_id, $page, $page_size, $query, $order_by): \TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNotePagedResponseModel
```

Gets a list of all credit notes for a company, with pagination

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


$apiInstance = new TheLogicStudio\CodatPHP\Api\CreditNotesApi(
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
    $result = $apiInstance->companiesCompanyIdDataCreditNotesGet($company_id, $page, $page_size, $query, $order_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->companiesCompanyIdDataCreditNotesGet: ', $e->getMessage(), PHP_EOL;
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

[**\TheLogicStudio\CodatPHP\Model\CodatDataContractsDatasetsCreditNotePagedResponseModel**](../Model/CodatDataContractsDatasetsCreditNotePagedResponseModel.md)

### Authorization

[CodatLogin](../../README.md#CodatLogin), [APIKeyAuth](../../README.md#APIKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
